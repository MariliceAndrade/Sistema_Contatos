<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contato; //declaração do Model

class ContatoController extends Controller{
    public function __construct(){ //autenticação para acesso
        $this->middleware('auth');
    }
    
    public function index(){
        $registros = Contato::all(); //buscando tudo da tabela de contatos
        return view('admin.contatos.index', compact('registros')); //enviando a lista para a view
    }

    public function adicionar(){
        return view('admin.contatos.adicionar');
    }

    public function salvar(Request $req){
        $dadosCont = $req->all();
        //dd($dadosCont); //testando dados
        
        if($req->hasFile('imagem')){ //tratamento da imagem
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $diretorio = "img/contatos";
            $extensao = $imagem->guessClientExtension();
            $nomeImagem = "img_".$num.".".$extensao;
            $imagem->move($diretorio, $nomeImagem);
            $dadosCont['imagem'] = $diretorio."/".$nomeImagem;
        }

        Contato::create($dadosCont); //registrando dados no banco
        return redirect()->route('admin.contatos');
    }

    public function editar($id){
        $registro = Contato::find($id); //buscando o registro do id
        return view('admin.contatos.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id){
        $dadosCont = $req->all();

        if($req->hasFile('imagem')){ //tratamento da imagem
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $diretorio = "img/contatos";
            $extensao = $imagem->guessClientExtension();
            $nomeImagem = "img_".$num.".".$extensao;
            $imagem->move($diretorio, $nomeImagem);
            $dadosCont['imagem'] = $diretorio."/".$nomeImagem;
        }
        
        Contato::find($id)->update($dadosCont); //alterando os dados no banco
        return redirect()->route('admin.contatos');
    }

    public function deletar($id){
        Contato::find($id)->delete(); //deletando os dados no banco
        return redirect()->route('admin.contatos');
    }
}
