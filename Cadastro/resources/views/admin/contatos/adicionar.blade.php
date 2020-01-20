@extends('layout.site')

@section('titulo', 'Contatos')

@section('conteudo')
    <div class="flex-center position-ref" style="height: 70vh;">
        <div class="container">
            <div class="row">
                <h2 class="center">Adicionar Contato</h2>
            </div>   
            <div class="row">
                <form class="form-group" action="{{ route('admin.contatos.salvar') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }} <!-- verificação do token -->
                        @include('admin.contatos.form')
                        <button class="btn btn-outline-success">Salvar</button>
                        
                        <a class="btn btn-outline-danger" href="{{ route('admin.contatos') }}">Cancelar</a>
                </form>
            </div>
            <!-- <div class="row">
                <button class="btn btn-outline-danger">Cancelar</button>
            </div> -->
        </div>
    </div>
@endsection