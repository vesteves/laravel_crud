<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', [
            'clientes' => $clientes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            Cliente::create($request->all());
        } catch (\Exception $e) {

            return redirect()->route('cliente.index')->with('error', 'Falha ao cadastrar Cliente.');
        }

        return redirect()->route('cliente.index')->with('success', 'Novo Cliente adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', [
            'cliente' => $cliente
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {

        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->cep = $request->cep;
        $cliente->logradouro = $request->logradouro;
        $cliente->numero = $request->numero;
        $cliente->complemento = $request->complemento;
        $cliente->bairro = $request->bairro;
        $cliente->cidade = $request->cidade;
        $cliente->observacoes = $request->observacoes;

        try {
            $cliente->save();
        } catch (\Exception $e) {
            return redirect()->route('cliente.index')->with('error', 'Falha ao atualizar Cliente.');
        }

        return redirect()->route('cliente.index')->with('success', 'Cliente atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        try {
            $cliente->delete();
        } catch (\Exception $e) {
            return redirect()->route('cliente.index')->with('error', 'Falha ao remover Cliente.');
        }

        return redirect()->route('cliente.index')->with('success', 'Cliente removido com sucesso!');
    }
}
