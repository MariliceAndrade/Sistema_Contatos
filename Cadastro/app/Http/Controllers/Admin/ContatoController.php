<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contato; //declaração do Model

class ContatoController extends Controller{
    // public function __construct(){ //autenticação para acesso
    //     $this->middleware('auth');
    // }
    
    public function index(){
        $registros = Contato::all(); //buscando tudo da tabela de contatos
        return view('admin.contatos.index', compact('registros')); //enviando a lista para a view
    }

    public function adicionar(){
        return view('admin.contatos.adicionar');
    }

    public function salvar(Request $req){
        $dadosProd = $req->all();
        //dd($dadosProd); //testando dados
        
        Produto::create($dadosProd); //registrando dados no banco
        return redirect()->route('admin.contatos');
    }

    public function editar($id){
        $registro = Produto::find($id);
        return view('admin.contatos.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id){
        $dadosProd = $req->all();
        
        Produto::find($id)->update($dadosProd); //alterando os dados no banco
        return redirect()->route('admin.contatos');
    }

    public function deletar($id){
        Produto::find($id)->delete(); //deletando os dados no banco
        return redirect()->route('admin.contatos');
    }
}
