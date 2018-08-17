@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Clientes</h2>
    <a href="/cliente/create">Criar Cliente</a>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th>NOME</th>
                        <th>CPF</th>
                        <th>CEP</th>
                        <th>LOGRADOURO</th>
                        <th>NÚMERO</th>
                        <th>COMPLEMENTO</th>
                        <th>BAIRRO</th>
                        <th>CIDADE</th>
                        <th>OBSERVAÇÕES</th>
                        <th colspan="2" class="text-center">AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->nome }}</td>
                        <td>{{ $cliente->cpf }}</td>
                        <td>{{ $cliente->cep }}</td>
                        <td>{{ $cliente->logradouro }}</td>
                        <td>{{ $cliente->numero }}</td>
                        <td>{{ $cliente->complemento }}</td>
                        <td>{{ $cliente->bairro }}</td>
                        <td>{{ $cliente->cidade }}</td>
                        <td>{{ $cliente->observacoes }}</td>
                        <td>
                            <a href="{{ route('cliente.edit', ['cliente' => $cliente] ) }}" class="btn btn-primary">Editar</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('cliente.destroy', ['cliente' => $cliente]) }}" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
