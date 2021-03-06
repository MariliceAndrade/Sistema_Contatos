@extends('layout.site')

@section('titulo', 'Contatos')

@section('conteudo')
    <div class="flex-center position-ref" style="height: 70vh;">
        <div class="container">
            <div class="row">
                <h2 class="center">Editar Contato</h2>
            </div>
            <div class="row">
                <form class="form-group" action="{{ route('admin.contatos.atualizar', $registro->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="put">
                    @include('admin.contatos.form')
                    <button class="btn btn-outline-success">Atualizar</button>
                        
                    <a class="btn btn-outline-danger" href="{{ route('admin.contatos') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection