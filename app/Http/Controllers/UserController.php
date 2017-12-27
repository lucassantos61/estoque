<?php

namespace estoque\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Request;
use estoque\User;
use estoque\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
	public function form(){
		return view('usuarios.cadastro');
	}
    public function registrar(UserRequest $request){
		$user = $request->all();
		$user['password'] = Hash::make($user['password']);
		User::create($user);
		return redirect('/login');
    }
}
