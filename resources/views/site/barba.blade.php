@extends('site.master.layout')

@section('content')
<main>
    <img src="../img/banner.png" class="img-fluid">

    <div class="container">
        <h6 class="card-title text-center pt-3 txtwork">Aqui você pode encontrar alguns trabalhos nosso com barbas</h6>
        <hr class="hrwork">
        <div class="row row-cols-2 imgwork">
            <img src="../img/beard/man beard 1-min.jpg" alt="homem com uma barba bonita" class="col pb-3 tamanho">
            <img src="../img/beard/man beard 2-min.jpg" alt="homem com uma barba bonita" class="col pb-3 tamanho">
            <img src="../img/beard/man beard 3-min.jpg" alt="homem com uma barba bonita" class="col pb-3 tamanho">
            <img src="../img/beard/man beard 4-min.jpg" alt="homem com uma barba bonita" class="col pb-3 tamanho">
        </div>


        <div class="card cardwork text-white text-center mx-auto">
            <div class="card-body">
                <h5 class="card-title">Agende seu horário com nossa equipe.</h5>
                <button type="button" class="btn btn-light mt-3 btnwork"><a style="color: #000"
                        href="{{ route('site.agendar') }}">Agendar</a></button>
            </div>
        </div>
        <!---
    <h3 class="text-center mt-5 mb-5">Deseja conhecer nossa equipe?
        <button type="button" style="background: #000" class="btn rounded-pill text-light">clique aqui para
            conhecer</button></h3>--->
    </div>
</main>
@endsection