@extends('site.master.layout')

@section('content')
<main>
    <img src="../img/banner.png" class="img-fluid">

    <div class="container">
        <h6 class="card-title text-center pt-3 txtwork">Aqui você pode encontrar alguns trabalhos com cabelos</h6>
        <hr class="hrwork">
        <div class="row row-cols-2 imgwork">
            <img src="../img/hair/man hair 6-min.jpg" alt="homem com um corte de cabelo bonito"
                class="col pb-3 tamanho">
            <img src="../img/hair/man hair 7-min.jpg" alt="homem com um corte de cabelo bonito"
                class="col pb-3 tamanho">
            <img src="../img/hair/man hair 3-min.jpg" alt="homem com um corte de cabelo bonito"
                class="col pb-3 tamanho">
            <img src="../img/hair/man hair 4-min.jpg" alt="homem com um corte de cabelo bonito"
                class="col pb-3 tamanho">
        </div>

        <div class="card cardwork text-white text-center mx-auto">
            <div class="card-body">
                <h5 class="card-title">Agende seu horário com nossa equipe.</h5>
                <button type="button" class="btn btn-light mt-3 btnwork"
                    href="{{ route('site.agendar') }}">Agendar</button>
            </div>
        </div>
        <!---
    <h3 class="text-center mt-5 mb-5">Deseja conhecer nossa equipe?
        <button type="button" style="background: #000" class="btn rounded-pill text-light">clique aqui para
            conhecer</button></h3>--->
    </div>
</main>
@endsection