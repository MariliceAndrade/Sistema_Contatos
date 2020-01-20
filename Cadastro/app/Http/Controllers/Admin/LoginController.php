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
            return redirect()->route('login');
        }

        // return redirect()->route('login');
    }

    public function sair(){
        Auth::logout();
        return redirect()->route('login');
    }
}
