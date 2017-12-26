<?php

namespace estoque\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function __construct(){

      $this->middleware('autorizador');
    }
    public function form(){
    	return view('form_login');
    }
    public function login(){
    $credenciais = Request::only('email','password');

     if(Auth::attempt($credenciais)) {
        return "Usuário ". 
            Auth::user()->name 
            ." logado com sucesso";
            }
            return 'Não Logou';
     }

    public function logout(){
        Auth::logout();
    	return'deslogou';
    }
}
