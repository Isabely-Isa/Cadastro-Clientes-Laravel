<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteControlador extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view ('clientes', compact('clientes'));
    }

    public function create()
    {
        return view('novocliente');
    }

    public function store(Request $request)
    {
        $regras = [
            'nome'  => 'required|min:3|unique:clientes|max:20',
          'idade' => 'required|min:18',
          'email' => 'required|email'
         ];
         $mensagens = [ 

           'nome.min' => 'É necessário no mínimo 3 caracteres no nome.',
           'required' => 'O atributo :attribute não pode estar em branco.',  
            'email.required' => 'Digite um endereço de email.',
            'email.email' => 'Digite um endereço de email válido'
         ];
         $request->validate($regras, $mensagens);


        $cli = new Cliente();
        $cli->nome     = $request->input('nome');
        $cli->idade    = $request->input('idade');
        $cli->email    = $request->input('email');
        $cli->save();
        return view('/clientes');;
    }


    public function show($id)
    {
     //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
