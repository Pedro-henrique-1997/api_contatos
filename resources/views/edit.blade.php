@extends('templates.template')

@section('content')
    <h1 class="text-center">Editar</h1> <hr>

    <div class="col-8 m-auto">
        <form name="formCad" id="formCad" method="post" action="{{route('valEdit_contato', ['id' => $contatoEdit->id]) }}">
            
            @csrf
            <input class="form-control" type="text" name="nome" id="nome" value="{{$contatoEdit->nome}}" placeholder="Nome:"><br>

            <input class="form-control" type="text" name="sobrenome" id="sobrenome" value="{{$contatoEdit->sobrenome}}" placeholder="Sobrenome:"><br>

            <input class="form-control" type="date" name="data" id="data" value="{{$contatoEdit->data}}" placeholder="Data de nascimento:"><br>

            <input class="form-control" type="text" name="telefone" id="telefone" value="{{$contatoEdit->telefone}}" placeholder="Telefone:"><br>

            <input class="form-control" type="text" name="celular" id="celular" value="{{$contatoEdit->celular}}" placeholder="Celular:"><br>

            <select class="form-control" name="id_empresa" id="id_empresa">                
                @foreach($empEdit as $emp)
                <option value="{{$contatoEdit->id_empresa}}">{{$emp->nome}}</option>
                @endforeach

            </select><br>

            <input class="form-control" type="email" name="email" id="email" value="{{$contatoEdit->email}}" placeholder="Email:"><br>
            
            <input class="btn btn-primary" type="submit" value="Editar">
        </form>
    </div>
@endsection