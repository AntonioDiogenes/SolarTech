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
        //adicionar outro modal pra confirmar dados de endereço 
        //ae recebe esse modal atualiza os dados e dps abre o modal de confirmar compra
        //pra poder entrar aqui e enviar a compra 
        
        $data = $request->all();

        User::find($data["id_usuario"])->update([
            'numero_casa' => $data["numero_casa"],
            'logradouro' => $data["logradouro"],
            'bairro' => $data["bairro"],
            'cidade' => $data["cidade"],
            'estado' => $data["estado"],
        ]);

        $usuario = User::find($data["id_usuario"]);
        $pacote = Pacotes::where('nome',$data["planoEscolhido"])->first();

        $dadosDoUsuario = $usuario->toArray();
        $dadosDoPacote = $pacote->toArray();
        

        $sendToFinancial = [];
        $sendToFinancial["pacote"] = $dadosDoPacote;
        $sendToFinancial["usuario"] = $dadosDoUsuario;//enviar pro outro modulo

        
        dd($sendToFinancial);
        
        return redirect("/");
    }
}
