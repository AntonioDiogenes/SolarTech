<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Http;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'sub',
        "cpf",
        "cep",
        "logradouro",
        "bairro",
        "cidade",
        "estado",
        "numero_casa",
        "access_level"
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            // Verifica se o campo 'cep' foi fornecido
            if (!empty($user->cep)) {
                $response = Http::get("https://viacep.com.br/ws/{$user->cep}/json/");

                // Se a requisição for bem-sucedida, preenche os campos do usuário
                if ($response->successful()) {
                    $data = $response->json();
                    $user->logradouro = $data['logradouro'];
                    $user->bairro = $data['bairro'];
                    $user->cidade = $data['localidade'];
                    $user->estado = $data['uf'];
                }
            }
            $user->access_level = 'cliente';
        });
    }
}
