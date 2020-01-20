@extends('layout.site')

@section('titulo', 'Contatos')

@section('conteudo')
    <div class="flex-center"> 
        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <h2 class="center col" style="padding-left: 0;">Lista de contatos cadastrados</h2>
                <a class="btn btn-outline-info col col-lg-2" href="{{ route('admin.contatos.adicionar') }}">Adicionar</a>
            </div>
            <div class="row">
                <div class="table-responsive">
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
                        
                        <tbody>
                        @foreach($registros as $registro)
                            <tr>
                                <td>{{ $registro->id }}</td>
                                <td> <img width="50" src="{{ asset($registro->imagem) }}" /> </td>
                                <td>{{ $registro->nome }}</td>
                                <td>{{ $registro->email }}</td>
                                <td>{{ $registro->telefone }}</td>
                                <td> <a class="btn btn-warning" href="{{ route('admin.contatos.editar', $registro->id) }}">Editar</a> </td>
                                <td> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Deletar</button> </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Excluir Contato</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Você tem certeza que deseja excluir este contato?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                <a class="btn btn-danger" href="{{ route('admin.contatos.deletar', $registro->id) }}">Excluir</a>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                <!-- Modal -->
            </div> 
        </div>
    </div>
@endsection
