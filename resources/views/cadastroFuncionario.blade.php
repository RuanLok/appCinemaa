@extends('padrao')

@section('content')

<form method = "post" action="{{route('cadastro-funcionario')}}">
    @csrf
            <div class="mb-3 form-check">
                <label for="nomeInput" class="form-label">Nome:</label>
                <input type="text" name="nomefun" class="form-control" id="nomeInput" >
            </div>
            <div class="mb-3 form-check">
                <label for="emailInput" class="form-label">E-mail:</label>
                <input type="email" name="emailfun" class="form-control" id="emailInput">
            </div>
            <div class="mb-3 form-check">
                <label for="whatsappInput" class="form-label">WhatsApp:</label>
                <input type="text" name="whatsapp" class="form-control" id="whatsappInput" >
            </div>
            <div class="mb-3 form-check">
                <label for="cpfInput" class="form-label">CPF:</label>
                <input type="text" name="cpf" class="form-control" id="cpfInput">
            </div>
            <div class="mb-3 form-check">
                <label for="senhaInput" class="form-label">Senha:</label>
                <input type="password" name="senha" class="form-control" id="senhaInput">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>

@endsection 