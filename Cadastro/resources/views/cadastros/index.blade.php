@extends('layout.site')

@section('titulo', 'Contatos')

@section('conteudo')
    <div class="flex-center position-ref full-height">
        <div class="container">
            <div class="row">
                <h2 class="center col" style="padding-left: 0;">Lista de contatos cadastrados</h2>
                <a class="btn btn-outline-info col col-lg-2" href="{{ route('admin.cadastros.adicionar') }}">Adicionar</a>
            </div>
            <!-- <div class="row">
                <a class="btn btn-outline-info" href="{{ route('admin.cadastros.adicionar') }}">Adicionar</a>
            </div> -->
            <div class="row">
                <table class="table table-striped">
                    <thead> 
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Data de Criação</th>
                            <th scope="col">Data Alteração</th>
                        </tr>
                    </thead>
                    <hr>
                    <tbody>
                    
                        <tr>
                            <td>Marilice</td>
                            <td>mariliceandrade@gmail.com</td>
                            <td>(92)99165-0740</td>
                            <td>19/01/2020</td>
                            <td>19/01/2020</td>
                            <td> <a class="btn btn-warning" href="/">Editar</a> </td>
                            <td> <a class="btn btn-danger" href="/">Deletar</a> </td>
                        </tr>
                        <tr>
                            <td>Marilice</td>
                            <td>mariliceandrade@gmail.com</td>
                            <td>(92)99165-0740</td>
                            <td>19/01/2020</td>
                            <td>19/01/2020</td>
                            <td> <a class="btn btn-warning" href="/">Editar</a> </td>
                            <td> <a class="btn btn-danger" href="/">Deletar</a> </td>
                        </tr>
                        <tr>
                            <td>Marilice</td>
                            <td>mariliceandrade@gmail.com</td>
                            <td>(92)99165-0740</td>
                            <td>19/01/2020</td>
                            <td>19/01/2020</td>
                            <td> <a class="btn btn-warning" href="/">Editar</a> </td>
                            <td> <a class="btn btn-danger" href="/">Deletar</a> </td>
                        </tr>
                    
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
@endsection