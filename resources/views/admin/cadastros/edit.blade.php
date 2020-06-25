@extends('site.master.layout')

@section('content')
<form class="form-signin margens container" action="{{ route('cadastro.update',['cadastro'=>$cadastro->id]) }}" method="post">
    @csrf
    @method('PUT')

    <h1 class="mb-3 txtcad">Editar seus dados</h1>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="firstName">Nome:</label>
            <input value="{{ $cadastro->name }}" name="name" type="text" class="form-control" id="firstName" placeholder="Digite seu nome">
        </div>
        <div class="col-md-6 mb-3">
            <label for="lastName">Sobrenome:</label>
            <input value="{{ $cadastro->surname }}" name="surname" type="text" class="form-control" id="lastName" placeholder="Digite seu sobrenome">
        </div>
        <div class="col-md-4 mb-3">
            <label for="rg">RG:</label>
            <input value="{{ $cadastro->rg }}" name="rg" type="text" class="form-control" id="rg" placeholder="Ex: 00.000.000-0">
        </div>
        <div class="col-md-4 mb-3">
            <label for="cpf">CPF:</label>
            <input value="{{ $cadastro->cpf }}" name="cpf" type="text" class="form-control" id="cpf" placeholder="Ex: 000.000.000-00">
        </div>
        <div class="col-md-4 mb-3">
            <label for="data">Data nascimento:</label>
            <input value="{{ $cadastro->datanasc }}" name="datanasc" type="date" class="form-control" id="zip" placeholder="Dia/Mês/Ano">
        </div>
        <div class="col-md-4 mb-3">
            <label for="phone">Telefone</label>
            <input value="{{ $cadastro->phone }}" name="phone" type="text" class="form-control phone-ddd-mask" placeholder="Ex.: (00) 0000-0000">
        </div>
        <div class="col mb-4">
            <label for="email">Email:</label>
            <input value="{{ $cadastro->email }}" name="email" class="form-control" id="email" placeholder="nome@exemplo.com">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-4">
            <label for="password">Senha:</label>
            <input value="{{ $cadastro->password }}" name="password" type="password" class="form-control" id="password">
        </div>

    </div>
    <div class="row entrar2">
        <div class="col-md-6 mb-4">
            <button class="btn btn-lg btn-success btn-block entrar2" type="submit">Salvar</button>
        </div>
    </div>
</form>
@endsection