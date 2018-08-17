@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Gravar Cliente</h2>
    <div class="row">
        <div class="col">
            <form method="post" action="{{ route('cliente.store') }}">
                @csrf
                <fieldset class="form-group">
                    <label for="nome">NOME</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </fieldset>

                <fieldset class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf">
                </fieldset>

                <fieldset class="form-group">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control" id="cep" name="cep">
                </fieldset>

                <fieldset class="form-group">
                    <label for="logradouro">LOGRADOURO</label>
                    <input type="text" class="form-control" id="logradouro" name="logradouro">
                </fieldset>

                <fieldset class="form-group">
                    <label for="numero">NÚMERO</label>
                    <input type="text" class="form-control" id="numero" name="numero">
                </fieldset>

                <fieldset class="form-group">
                    <label for="complemento">COMPLEMENTO</label>
                    <input type="text" class="form-control" id="complemento" name="complemento">
                </fieldset>

                <fieldset class="form-group">
                    <label for="bairro">BAIRRO</label>
                    <input type="text" class="form-control" id="bairro" name="bairro">
                </fieldset>

                <fieldset class="form-group">
                    <label for="cidade">CIDADE</label>
                    <input type="text" class="form-control" id="cidade" name="cidade">
                </fieldset>

                <fieldset class="form-group">
                    <label for="observacoes">OBSERVAÇÕES</label>
                    <textarea class="form-control" id="observacoes" name="observacoes"></textarea>
                </fieldset>
                <button type="submit" class="btn btn-primary">Gravar</button>
            </form>
        </div>
    </div>
</div>

@endsection
