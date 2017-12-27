<?php 
 /**
 * 
 */
namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Validator;
use Request;
use estoque\Produto;
use estoque\Categoria;
use estoque\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller
 {
 	public function __construct(){

 	  $this->middleware('autorizador');
 	}
 	
 	public function lista(){

 		$produtos = Produto::all();
 		
 			if (view()->exists('produtos.listagem')){
 			return view('produtos.listagem')->withProdutos($produtos);
 			}
 			return view('error.404');	
 			
 	}
 		
	public function mostra($id){
		$produtos = Produto::find($id);
		if($produtos)
 			return view('produtos.detalhes')->withDetalhes($produtos);	
		return view('error.404');
	 }
	 
	 public function novo(){
		return view('produtos.formulario')->with('categorias',Categoria::all());
	 }

	 public function adiciona(ProdutoRequest $request){
		// $params = Request::all();
		// $produto = new Produto($params);

	 	Produto::create($request->all());
	 	return redirect('/produtos')->withInput();
	 }
	 public function remove($id){
		$produto = Produto::find($id);
		$produto->delete();
		return redirect()->action('ProdutoController@lista');
	 }

	 public function atualiza($id){
		$produto = Produto::find($id);
		if($produto->update(Request::all())){
			die("Atualizou!!!!!!!!!!!!");
		}
		die("Não foi porra ");
		
		return redirect()->action('ProdutoController@lista');
	 }
	 public function edita($id){
		$produto = Produto::find($id);
		if($produto){
			return view('produtos.formulario')->withP($produto);
		}
	 }
	 public function returnJson(){
		$produtos = Request::all();
		return response()->json($produtos);
	}
 } 	
