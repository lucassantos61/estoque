<?php 
 /**
 * 
 */
 namespace estoque\Http\Controllers;

 use Illuminate\Support\Facades\DB;
  use Request;
 class ProdutoController extends Controller
 {
 	
 	public function lista(){

 		$produtos = DB::select('select * from  produtos');	 
 		if (view()->exists('produtos.listagem')){
 			return view('produtos.listagem')->withProdutos($produtos);
 			}
 			return view('error.404');
 	}
 		
	public function mostra(){
		$id = Request::route('id','0');
		$produtos = DB::select('select * from  produtos where id = ? ',[$id]);
		if($produtos)
 			return view('produtos.detalhes')->withDetalhes($produtos[0]);	
		return view('error.404');
	 }
	 
	 public function novo(){
		return view('produtos.formulario');
	 }

	 public function adiciona(){
		$nome = Request::input('nome');
		$quantidade =  Request::input('quantidade');
		$valor = Request::input('valor');
		$descricao = Request::input('descricao');
		
			if(DB::insert('insert into produtos values (null, ?, ?, ?, ?)',
			array($nome,$valor,$descricao,$quantidade))){
				return redirect('/produtos')->withInput(Request::only('nome'));
			}

	 }
	 public function returnJson(){
		 $produtos = DB::select('select * from produtos');
		 return response()->json($produtos);
	 }
 } 	
