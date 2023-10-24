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
    
    public function handleGoogleCallback(){
        $user = Socialite::driver('google')->user();

        $existingUser = User::where('sub', $user->getId())->first();
        
        if ($existingUser) {
            // Usuário já existe, faça o login do usuário
            Auth::login($existingUser);
            return redirect('/'); // Redirecione para a página de destino após o login
        } else {
            // Usuário não existe, registre-o no banco de dados
            $newUser = new User();
            $newUser->name = $user->getName();
            $newUser->email = $user->getEmail();
            $newUser->sub = $user->getId(); 

            $newUser->save();

            Auth::login($newUser);

            return redirect('/');
        }
    }
    

    
}
