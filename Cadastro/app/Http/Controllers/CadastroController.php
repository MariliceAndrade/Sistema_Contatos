<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller{
    // public function __construct(){ //autenticação para acesso
    //     $this->middleware('auth');
    // }
    
    public function index(){
        //$registros = Contato::all(); //buscando tudo da tabela de contatos
        return view('cadastros.index');//, compact('registros')); //enviando a lista para a view
    }

    public function adicionar(){
        return view('admin.cadastros.adicionar');
    }

    public function salvar(Request $req){
        $dadosProd = $req->all();
        //dd($dadosProd); //testando dados
        
        Produto::create($dadosProd); //registrando dados no banco
        return redirect()->route('admin.cadastros');
    }

    public function editar($id){
        $registro = Produto::find($id);
        return view('admin.cadastros.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id){
        $dadosProd = $req->all();
        
        Produto::find($id)->update($dadosProd); //alterando os dados no banco
        return redirect()->route('admin.cadastros');
    }

    public function deletar($id){
        Produto::find($id)->delete(); //deletando os dados no banco
        return redirect()->route('admin.cadastros');
    }
}
