@extends('site.master.layout')

@section('content')

<img src="../img/banner-inicial.jpg" class="img-fluid" alt="Banner inicial de homens fazendo cortes de cabelo">

<div class="container" style="margin-top: 39px;">
  <p class="font-weight-bold d-flex justify-content-center txt0home">Bem Vindo a BarberRio</p>
  <div class="row home" style="margin-top: 39px;">
    <div class="col">
      <p class="txt1home">
        Inspirada nas antigas barbearias nova-iorquinas típicas de filmes da máfia das décadas de 40, 50 e 60, a
        Barbearia Baber Rio chega com a intenção de resgatar a cultura masculina, perdida ao longo dos anos, em que os
        homens se encontravam para fazer a barba à navalha e cortar os cabelos enquanto fumavam seus charutos, bebiam e
        conversavam.
      </p>
    </div>

    <img class="rounded float-right imgmeio" src="../img/inicial.jpg"
      alt="Imagen de um barbeiro fazendo barba de um cliente">

    <p style="margin: 42px auto" class="txt2home d-flex justify-content-center"> Na Barber Rio você pode se cuidar da
      melhor
      forma, com os melhores profissionais
      para cuidar de você como merece!</p>
  </div>
  <h1 class=" d-flex justify-content-center comentarios">COMENTÁRIO DOS CLIENTES</h1>



  <!-----
  <div id="carouselExampleControls" class="carousel slide container" data-ride="carousel">

    <div class="carousel-inner" style="width: 67%">
      <div class="carousel-item active">
        <p class="font-weight-bold">Rafael Ferreira</p>
        <p> Barbearia de ótima qualidade, melhor atendimento que já tive quando fui cortar o meu cabelo.
        </p>
      </div>
      <div class="carousel-item">

        <p class="font-weight-bold ">Iago Guimarães</p>
        <p style="text-align: center"> Todos os profissionais são excelentes, adorei.
        </p>
      </div>

      <div class="carousel-item">
        <p class="font-weight-bold">Gabi freitas</p>
        <p> Adorei meu cabelo novo.
        </p>
      </div>
    </div>
    <a style="color:#000;left: -39px" class="carousel-control-prev" href="#carouselExampleControls" role="button"
      data-slide="prev">
      <img src="../img/seta esquerda.svg" alt="seta para a esquerda">
      <span class="sr-only text-dark">Anterior</span>
    </a>
    <a style="color:#000;right:39px;" class="carousel-control-next" href="#carouselExampleControls" role="button"
      data-slide="next">
      <img src="../img/seta direita.svg" alt="seta para a direita">
      <span class="sr-only text-dark">Próximo</span>
    </a>
  </div>--->
  <ul>
   @foreach ($comentarios as $comentario)
    <li>{{ $comentario->name }}</li>
   @endforeach 
  </ul>
  
  <h2 style="text-align: center; font-size:30px; margin-top:39px">Envie sua opinião sobre nossos serviços</h2>

  <form action="{{ route('comentario.store') }}" method="post">
    @csrf

    <div class="form-group">
      <label for="exampleFormControlInput1">
        <h4>Nome:</h4>
      </label>
      <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ex: Alex Augusto">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">
        <h4>Endereço de email</h4>
      </label>
      <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
        placeholder="Ex: alex@gmail.com">
    </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">
        <h4>Mensagem:</h4>
      </label>
      <textarea name="mensagem" class="form-control" id="exampleFormControlTextarea1" rows="3"
        placeholder="Digite sua mensagem"></textarea>
    </div>
    <button class="btn btn-lg btn-success" style="float: inline-end" type="submit">Enviar</button>
</div>

@endsection