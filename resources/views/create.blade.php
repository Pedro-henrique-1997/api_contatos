@extends('templates.template')

@section('content')
    <h1 class="text-center">Cadastrar</h1> <hr>

    <div class="col-8 m-auto">
        <form name="formCad" id="formCad" method="post" action="{{route('validar_contato')}}">
            @csrf
            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome:"><br>

            <input class="form-control" type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome:"><br>

            <input class="form-control" type="date" name="data" id="data" placeholder="Data de nascimento:"><br>

            <input class="form-control" type="text" name="telefone" id="telefone" placeholder="Telefone:"><br>

            <input class="form-control" type="text" name="celular" id="celular" placeholder="Celular:"><br>

            <select class="form-control" name="id_empresa" id="id_empresa">
                <option value="">Empresa</option>
                @foreach($empDados as $emp)
                    <option value="{{$emp->id}}">{{$emp->nome}}</option>
                @endforeach
            </select><br>

            <input class="form-control" type="email" name="email" id="email" placeholder="Email:"><br>
            
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>
@endsection