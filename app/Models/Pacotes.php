<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Pacotes extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = ['nome', 'quantidadePlacas', 'valor', 'valorFinal'];
    
    protected static function boot(){
        
        parent::boot();

        static::saving(function ($pacote) {
            $pacote->valorFinal = $pacote->valor + ($pacote->quantidadePlacas * 1000);
        });
    }
}
