@extends('templates.template')

@section('content')
<h1 class="text-center">Lista de contatos</h1>

<div class="text-center mt-3 mb-4">
    <a href="{{route('cadastrar')}}">
        <button class="btn btn-success">Cadastrar</button>
    </a>
</div>

<div class="col-10 m-auto">
    @csrf

    <table class="table text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Data</th>
                <th scope="col">Telefone</th>
                <th scope="col">Celular</th>
                <th scope="col">Empresa</th>
                <th scope="col">Email</th>
                <th scope="col" >Acões</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listar as $contato)
            @php
            $empresa = $contato->find($contato->id)->dadosEmp
            @endphp

            <tr>
                <td>{{$contato->nome}}</td>
                <td>{{$contato->sobrenome}}</td>
                <td>{{$contato->data}}</td>
                <td>{{$contato->telefone}}</td>
                <td>{{$contato->celular}}</td>
                <td>{{$empresa->nome}}</td>
                <td>{{$contato->email}}</td>
                <td></td>
                <td>
                                       

                    <a href="{{route('editar_contato', ['id' => $contato->id])}}">
                        <button class="btn btn-primary">Editar</button>
                    </a>

                    <a href="{{route('deletar_contato', ['id' => $contato->id])}}">
                        <button  class="btn btn-danger">Deletar</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


@endsection