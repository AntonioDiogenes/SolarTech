<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    
    public function index()
    {
        return response()->json(['data' => Clientes::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|unique:clientes,cpf|max:14',
            'email' => 'required|string|email|unique:clientes,email|max:255',
            'senha' => 'required|string|max:255',
            'cep' => 'required|string|max:9',
            'logradouro' => 'required|string|max:255',
            'bairro' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'estado' => 'required|string|max:2',
        ]);

        Clientes::create([
            'nome' => $request->input('nome'),
            'cpf' => $request->input('cpf'),
            'email' => $request->input('email'),
            'senha' => bcrypt($request->input('senha')),
            'cep' => $request->input('cep'),
            'logradouro' => $request->input('logradouro'),
            'bairro' => $request->input('bairro'),
            'cidade' => $request->input('cidade'),
            'estado' => $request->input('estado'),
        ]);

        return response()->json(["resp" => "Operaçao Bem Sucedida !"]);
    }

    public function show($id)
    {
        return response()->json(['data' => Clientes::findOrFail($id)]);
    }

    public function edit($id)
    {
        return response()->json(['data' => Clientes::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|unique:clientes,cpf|max:14',
            'email' => 'required|string|email|unique:clientes,email|max:255',
            'senha' => 'required|string|max:255',
            'cep' => 'required|string|max:9',
            'logradouro' => 'required|string|max:255',
            'bairro' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'estado' => 'required|string|max:2',
        ]);

        Clientes::findOrFail($id)->update([
            'nome' => $request->input('nome'),
            'cpf' => $request->input('cpf'),
            'email' => $request->input('email'),
            'senha' => bcrypt($request->input('senha')),
            'cep' => $request->input('cep'),
            'logradouro' => $request->input('logradouro'),
            'bairro' => $request->input('bairro'),
            'cidade' => $request->input('cidade'),
            'estado' => $request->input('estado'),
        ]);


    }

    public function destroy(Clientes $clientes)
    {
        Pacotes::findOrFail($id)->delete();
        return response()->json(["resp" => "Operaçao Bem Sucedida !"]);
    }
}
