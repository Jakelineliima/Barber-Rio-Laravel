@extends('site.master.layout')

@section('content')

<div class="container" >
<form class="login">
  <h3>Entre na sua conta</h3>
  <div class="form-group">   
    <label for="exampleInputEmail1">Endereço de email</label>
    <input type="email" class="form-control preencher" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control preencher" id="exampleInputPassword1" placeholder="Senha">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Lembrar senha</label>
  </div>
  <button type="submit" class="btn btn-success entrar">Entrar</button>
</form>
<hr class="hrform">
<p style="margin-top: 30px">Ainda não possui conta ? <a class="criarconta" href="{{ route('site.cadastro') }}">Crie uma conta</a></p>

</div>
@endsection