<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Log;


class GoogleAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        $existingUser = User::where('sub', $user->getId())->first();

        if ($existingUser) {
            // Usuário já existe, verificar e, se necessário, atualizar os dados
            if ($existingUser->name !== $user->getName() || $existingUser->email !== $user->getEmail()) {
                // Atualizar os dados do usuário
                $existingUser->name = $user->getName();
                $existingUser->email = $user->getEmail();
                $existingUser->save();
            }

            // Faça o login do usuário
            Auth::login($existingUser);
        } else {
            // Usuário não existe, registre-o no banco de dados
            $newUser = new User();
            $newUser->name = $user->getName();
            $newUser->email = $user->getEmail();
            $newUser->sub = $user->getId();
            $newUser->access_level = 'cliente'; // Defina o access_level como "cliente" para novos usuários

            $newUser->save();

            Auth::login($newUser);
        }

        return redirect('/');
    }
    

    
}
