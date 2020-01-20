<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller{

    public function index(){
        return view('login');
    }

    public function login(Request $req){
        $dados = $req->all();
        if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['senha']])){
            return redirect()->route('admin.contatos');
        }else{
            //return redirect()->route('login')->with('warning', 'Dados inválidos. Insira os dados de Admin corretamente!');
            return redirect()->back()->with('warning', 'Dados inválidos. Insira os dados de Admin corretamente!');
         }
    }

    public function sair(){
        Auth::logout();
        return redirect()->route('login');
    }
}
