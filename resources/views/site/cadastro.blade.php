@extends('site.master.layout')

@section('content')
<form class="form-signin margens container">
  <h1 class="mb-3 txtcad">Criar conta</h1>
  <h2 class="mb-3 txtcad">Preencha os campos para criar sua conta:</h2>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="firstName">Nome:</label>
      <input type="text" class="form-control" id="firstName" placeholder="Digite seu nome">
    </div>
    <div class="col-md-6 mb-3">
      <label for="lastName">Sobrenome:</label>
      <input type="text" class="form-control" id="lastName" placeholder="Digite seu sobrenome">
    </div>
    <div class="col-md-4 mb-3">
      <label for="rg">RG:</label>
      <input type="text" class="form-control" id="rg" placeholder="Ex: 00.000.000-0">
    </div>
    <div class="col-md-4 mb-3">
      <label for="cpf">CPF:</label>
      <input type="text" class="form-control" id="cpf" placeholder="Ex: 000.000.000-00">
    </div>
    <div class="col-md-4 mb-3">
      <label for="data">Data nascimento:</label>
      <input type="date" class="form-control" id="zip" placeholder="Dia/Mês/Ano" required>
    </div>
    <div class="col mb-4">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="nome@exemplo.com">
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mb-4">
      <label for="password">Senha:</label>
      <input type="password" class="form-control" id="password">
    </div>
    <div class="col-md-6 mb-4">
      <label for="password">Confirmar senha:</label>
      <input type="password" class="form-control" id="password">
    </div>
  </div>
  <div class="row entrar2">
    <div class="col-md-6 mb-4">
      <button class="btn btn-lg btn-success btn-block entrar2" type="submit">Cadastro</button>
    </div>
  </div>
  </div>
</form>
@endsection