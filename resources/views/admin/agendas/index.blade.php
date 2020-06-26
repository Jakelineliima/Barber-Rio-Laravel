@extends('site.master.layout')

@section('content')

<div class="container">

    <h4>Sua agenda</h4>
    <table>
        <tbody>
            @foreach ($agendas as $agenda)
            <dt>{{ $agenda->date }}</dt>
            <dd>{{ $agenda->hora }}</dd>


            <a href="{{ route('agenda.edit' ,['agenda'=>$agenda->id]) }}" class="btn">Editar</a>
            <form action="{{ route('agenda.destroy',['agenda'=>$agenda->id]) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit">
                    Excluir
                </button>

            </form>
            @endforeach

        </tbody>
    </table>
</div>

@endsection