<?php

namespace App\Http\Controllers;
use App\Models\Pacotes;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{
    
    public function index()
    {
        $pacotes = Pacotes::all();
        if (Auth::check()) {
            $user = Auth::user();
            return view("/Rapid/index",compact("pacotes","user"));
        }
        return view("/Rapid/index",compact("pacotes"));
    }

    public function saveCep(Request $request)
    {
        $cep = $request->input('cepUsuario');
        $cpf = $request->input('cpfUsuario');
        if (!empty($cep)) {
            $response = Http::get("https://viacep.com.br/ws/{$cep}/json/");

            if ($response->successful()) {
                $data = $response->json();

                $user = User::find(auth()->user()->id);

                $user->cep = $cep;
                $user->cpf = $cpf;
                $user->logradouro = $data['logradouro'];
                $user->bairro = $data['bairro'];
                $user->cidade = $data['localidade'];
                $user->estado = $data['uf'];

                // Salva as alterações no banco de dados
                $user->save();
            }
        }

        // Se a requisição falhar ou se o 'cep' estiver vazio, redirecione de volta para a página anterior ou faça algo apropriado
        // ...

        // Por exemplo, redirecione de volta com uma mensagem de erro
        return redirect()->back()->with('error', 'Falha ao obter informações do CEP.');
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
