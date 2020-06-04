@extends('site.master.layout')

@section('content')
<img class="img-fluid" src="../img/banner.png" alt="Banner">
<div class="container">
    <p style="margin: 44px 0 44px 0;">
        <font color="#000" class="txtsobre">BarberRio</font> foi feita pra você que deseja receber cuidados com os melhores
        profissionais, fundada em 2002 na cidade de São Paulo, retomando os antigos
        custumes dos homens de tomar bebidas no barbeiro.
    </p>
    <img class="img-fluid" src="../img/bannersobre.jpg" alt="Banner com uma gilete">

    <h3 class="txtbar">Um pouco do nosso bar com as bebidas oferecidas.</h3>
    <div class="bar">
        <div class="row baralign">
            <img src="../img/jack.jpg" class="rounded float-left" alt="...">
            <img src="../img/corona.jpg" class="rounded float-right" alt="...">
            <img src="../img/extradrink.jpg" class="rounded float-right" alt="...">
        </div>
        <div class="row baralign barimgmeio">
            <img src="../img/chandow.jpg" class="rounded float-left" alt="...">
            <img src="../img/cervejahe.jpg" class="rounded float-right" alt="...">
            <img src="../img/gleen.jpg" class="rounded float-right" alt="...">
        </div>
        <div class="row baralign barimgmeio">
            <img src="../img/imperial.jpg" class="rounded float-left" alt="...">
            <img src="../img/bombay.jpg" class="rounded float-right" alt="...">
            <img src="../img/lyres.jpg" class="rounded float-right" alt="...">
        </div>
    </div>

    <hr class="hrsobre">

    <h5 style="text-align: center;">Aqui você pode conhecer um pouco dos nosso profissionais.</h5>

    <div class="row equipesobre">
        <div class="equipeid">
            <img src="../img/Jorge.jpg" class="rounded float-left" alt="...">
            <p>Jorge Alves, 25 anos <br>
                barbeiro há 2 anos.
            </p>
        </div>
        <div class="equipeid">
            <img src="../img/fabiano.jpg" class="rounded float-right" alt="...">
            <p>Fabiano Colombo,35 anos<br>
                cabeleleiro há 6 anos.</p>
        </div>
        <div class="equipeid">
            <img src="../img/thiago.jpg" class="rounded float-right" alt="...">
            <p>Thiago Gomes,31 anos<br>
                barbeiro há 4 anos.</p>
        </div>
    </div>
<!---
    <p class="equipeconhecer">Para ver nossa equipe e conhecer mais, <a class="criarconta" href="#">clique aqui!</a></p>-->


</div>

@endsection