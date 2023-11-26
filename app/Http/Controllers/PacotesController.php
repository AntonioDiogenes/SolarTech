<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacotes;
use App\Models\User;
use Illuminate\Support\Facades\Http;



class PacotesController extends Controller
{
    public function index()
    {
        $pacotes = Pacotes::all();

        if ($pacotes->isEmpty()) {
            return response()->json(['error' => 'Nenhum pacote encontrado'], 404); 
        }

        return response()->json(['data' => $pacotes]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'quantidadePlacas' => 'required|integer',
            'valor' => 'required|integer',
        ]);

        Pacotes::create([
            'nome' => $request->input('nome'),
            'quantidadePlacas' => $request->input('quantidadePlacas'),
            'valor' => $request->input('valor'),
        ]);

        return response()->json(["resp" => "Operaçao Bem Sucedida !"]);
    }

    public function show($id)
    {
        return response()->json(['data' => Pacotes::findOrFail($id)]);
    }

    public function edit($id)
    {
        return response()->json(['data' => Pacotes::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string',
            'quantidadePlacas' => 'required|integer',
            'valor' => 'required|integer',
        ]);

        Pacotes::findOrFail($id)->update([
            'nome' => $request->input('nome'),
            'quantidadePlacas' => $request->input('quantidadePlacas'),
            'valor' => $request->input('valor'),
        ]);

        return response()->json(["resp" => "Operaçao Bem Sucedida !"]);
    }

    public function destroy($id)
    {
        Pacotes::findOrFail($id)->delete();
        return response()->json(["resp" => "Operaçao Bem Sucedida !"]);
    }

    public function finalizarCompra(Request $request){

        $data = $request->all();
        
        User::find($data["id_usuario"])->update([
            'numero_casa' => $data["numero_casa"],
            'logradouro' => $data["logradouro"],
            'bairro' => $data["bairro"],
            'cidade' => $data["cidade"],
            'estado' => $data["estado"],
        ]);
        if(isset($data['nome']) == 'personalizado'){
            $pacote = [];
            $pacote['nomePacote'] =  $data['nome'];
            $pacote['quantidadePlacas'] =  $data['quantidadeEscolhida'];
            $pacote['valorFinal'] = $data['pacoteEscohido'] + ($data['quantidadeEscolhida'] * 1000);
            $dadosDoPacote = $pacote;
        }else{

            $pacote = Pacotes::where('nomePacote',$data["planoEscolhido"])->first();
            $dadosDoPacote = $pacote->toArray();
        }

        $usuario = User::find($data["id_usuario"]);

        $dadosDoUsuario = $usuario->toArray();
        
        $sendToFinancial = [
            'pacote' => $dadosDoPacote,
            'usuario' => $dadosDoUsuario
        ];
        
        $sendEmail = [
            'name' => $dadosDoUsuario['name'],
            'destinatario' => $dadosDoUsuario['email'],
            'pacote' => $dadosDoPacote['nomePacote'],
            'valor' => $dadosDoPacote['valorFinal'],
        ];
        
        // dd($sendEmail);
        // dd($sendToFinancial);
        $response = Http::post('http://modulofuncionario:80/api/receber-dados', $sendToFinancial);
        
        if ($response->json(['message']) == 'True') {
            $resp = Http::post('http://moduloenviaremail:5000/sendEmail', $sendEmail);
        }else{
            return redirect('/')->with('error', 'compra mal sucedida');
        }

        return redirect("/");
    }
}
