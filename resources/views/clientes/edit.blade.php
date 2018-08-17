@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Cliente</h2>
    <div class="row">
        <div class="col">
            <form method="post" action="{{ route('cliente.update', ['cliente' => $cliente]) }}">
                @csrf
                @method('PUT')
                <fieldset class="form-group">
                    <label for="nome">NOME</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $cliente->nome }}">
                </fieldset>

                <fieldset class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $cliente->cpf }}">
                </fieldset>

                <fieldset class="form-group">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control" id="cep" name="cep" value="{{ $cliente->cep }}">
                </fieldset>

                <fieldset class="form-group">
                    <label for="logradouro">LOGRADOURO</label>
                    <input type="text" class="form-control" id="logradouro" name="logradouro" value="{{ $cliente->logradouro }}">
                </fieldset>

                <fieldset class="form-group">
                    <label for="numero">NÚMERO</label>
                    <input type="text" class="form-control" id="numero" name="numero" value="{{ $cliente->numero }}">
                </fieldset>

                <fieldset class="form-group">
                    <label for="complemento">COMPLEMENTO</label>
                    <input type="text" class="form-control" id="complemento" name="complemento" value="{{ $cliente->complemento }}">
                </fieldset>

                <fieldset class="form-group">
                    <label for="bairro">BAIRRO</label>
                    <input type="text" class="form-control" id="bairro" name="bairro" value="{{ $cliente->bairro }}">
                </fieldset>

                <fieldset class="form-group">
                    <label for="cidade">CIDADE</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" value="{{ $cliente->cidade }}">
                </fieldset>

                <fieldset class="form-group">
                    <label for="observacoes">OBSERVAÇÕES</label>
                    <textarea class="form-control" id="observacoes" name="observacoes">{{ $cliente->observacoes }}</textarea>
                </fieldset>
                <button type="submit" class="btn btn-primary">Gravar</button>
            </form>
        </div>
    </div>
</div>

@endsection
