@extends('templates.template')

@section('content')
    <h1 class="text-center">Tem certeza em excluir este contato?</h1> <hr>

    <div class="col-8 m-auto">
        <form name="formCad" id="formCad" method="post" action="{{route('deletar', ['id' => $contatoDel->id])}}">
            
            @csrf
            <input class="form-control" type="text" name="nome" id="nome" value="{{$contatoDel->nome}}" placeholder="Nome:"><br>

            
            
            <input class="btn btn-danger" type="submit" value="Deletar">
        </form>
    </div>
@endsection