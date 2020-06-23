@extends('site.master.layout')

@section('content')

<div class="container">

    <h4>COMENTÁRIO DOS CLIENTES</h4>
    <table>

        <tbody>

            @foreach ($comentarios as $comentario)
            <dt>{{ $comentario->name }}</dt>
            <dd>{{ $comentario->mensagem }}</dd>
            @endforeach

        </tbody>
    </table>
</div>

@endsection