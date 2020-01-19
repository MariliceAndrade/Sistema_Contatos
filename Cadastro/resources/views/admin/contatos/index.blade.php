@extends('layout.site')

@section('titulo', 'Contatos')

@section('conteudo')
    <div class="flex-center position-ref full-height">
        <div class="container">
            <div class="row">
                <h2 class="center col" style="padding-left: 0;">Lista de contatos cadastrados</h2>
                <a class="btn btn-outline-info col col-lg-2" href="{{ route('admin.contatos.adicionar') }}">Adicionar</a>
            </div>
            <div class="row">
                <table class="table table-striped">
                    <thead> 
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Imagem</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Telefone</th>
                        </tr>
                    </thead>
                    <hr>
                    <tbody>
                    @foreach($registros as $registro)
                        <tr>
                            <td>{{ $registro->id }}</td>
                            <td> <img width="50" src="{{ asset($registro->imagem) }}" /> </td>
                            <td>{{ $registro->nome }}</td>
                            <td>{{ $registro->email }}</td>
                            <td>{{ $registro->telefone }}</td>
                            <td> <a class="btn btn-warning" href="{{ route('admin.contatos.editar', $registro->id) }}">Editar</a> </td>
                            <td> <a class="btn btn-danger" href="{{ route('admin.contatos.deletar', $registro->id) }}">Deletar</a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
@endsection