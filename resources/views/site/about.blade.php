@extends('site.master.layout')

@section('content')
<img class="img-fluid" src="../img/banner.png" alt="Banner">
<div class="container">
    <button type="button" class="btn btn-lg about">
        <a href="{{ route('site.sobre') }}">Pagina em português</a></button>
    <p style="margin: 44px 0 44px 0;">
        The BarberRio was made for you who want to receive care with
        best professionals, founded in 2002 in the city of São Paulo, resuming the old
        male guards drinking drinks at the barbershop.
    </p>
    <img class="img-fluid" src="../img/bannersobre.jpg" alt="Banner com uma gilete">

    <h3 class="txtbar">A little bit of our bar with the drinks offered.</h3>
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
</div>

@endsection