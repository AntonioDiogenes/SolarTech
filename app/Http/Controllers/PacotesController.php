<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacotes;


class PacotesController extends Controller
{
    public function index()
    {
        $pacotes = Pacotes::all();
        return response()->json(['data' => $pacotes]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'quantidadePlacas' => 'required|integer',
            'valor' => 'required|integer',
        ]);

        $pacote = new Pacotes([
            'nome' => $request->input('nome'),
            'quantidadePlacas' => $request->input('quantidadePlacas'),
            'valor' => $request->input('valor'),
        ]);

        $pacote->save();
        return response()->json(["resp" => "Operaçao Bem Sucedida !"]);
    }

    public function show($id)
    {
        $pacote = Pacotes::findOrFail($id);
        return response()->json(['data' => $pacote]);
    }

    public function edit($id)
    {
        $pacote = Pacotes::findOrFail($id);
        return response()->json(['data' => $pacote]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string',
            'quantidadePlacas' => 'required|integer',
            'valor' => 'required|integer',
        ]);

        $pacote = Pacotes::findOrFail($id);

        $pacote->update([
            'nome' => $request->input('nome'),
            'quantidadePlacas' => $request->input('quantidadePlacas'),
            'valor' => $request->input('valor'),
        ]);

        return response()->json(["resp" => "Operaçao Bem Sucedida !"]);
    }

    public function destroy($id)
    {
        $pacote = Pacotes::findOrFail($id);
        $pacote->delete();
        return response()->json(["resp" => "Operaçao Bem Sucedida !"]);
    }
}
