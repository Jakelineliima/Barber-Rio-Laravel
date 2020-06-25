@extends('site.master.layout')

@section('content')
<div class="container">

    <h4>COMENTÁRIO DOS CLIENTES</h4>
    <table>

        <tbody>

            @foreach ($cadastros as $cadastro)
            <dt>{{ $cadastro->name }}</dt>
            <dd>{{ $cadastro->surname }}</dd>
            <dd>{{ $cadastro->rg }}</dd>
            <dd>{{ $cadastro->cpf }}</dd>
            <dd>{{ $cadastro->phone }}</dd>
            <dd>{{ $cadastro->email }}</dd>
            <dd>{{ $cadastro->password }}</dd>

            <a href="{{ route('cadastro.edit' ,['cadastro'=>$cadastro->id]) }}" class="btn">Editar</a>
            <form action="{{ route('cadastro.destroy',['cadastro'=>$cadastro->id]) }}" method="POST">
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