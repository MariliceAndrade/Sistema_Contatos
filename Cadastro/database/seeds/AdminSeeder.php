<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $dados = [
            'name'=>"Admin FlexPeak",
            'email'=>"admin@mail.com",
            'password'=>bcrypt("123456")
        ];
        if(User::where('email','=',$dados['email'])->count()){
            $usuario = User::where('email','=',$dados['email'])->first();
            $usuario->update($dados);
        }else{
            User::create($dados);
        }
    }
}
