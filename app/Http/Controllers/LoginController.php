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
        return redirect()->action('ProdutoController@lista');
     }
     $message = 'Verifique o usuário ou senha';
     return view('form_login')->withInfo($message);
    }

    public function logout(){
        Auth::logout();
        $message = 'Deslogado';
        return view('form_login')->withInfo($message);
    }
}
