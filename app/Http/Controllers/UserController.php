<?php

namespace estoque\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Request;
use estoque\User;
class UserController extends Controller
{
	public function form(){
		return view('usuarios.cadastro');
	}
    public function registrar(){
    	User::create(Request::all());
		return view('form_login');
    }
}
