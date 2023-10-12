<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacotes;


class PacotesController extends Controller
{
    public function index()
    {
        return response()->json(['data' => Pacotes::all()]);
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
}
