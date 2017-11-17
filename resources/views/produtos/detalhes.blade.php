@extends('layout.principal')

@section('conteudo')
	<table class ="table table-striped table-bordered table-hover">
		<h1>Detalhes do  produto {{$detalhes->nome}}</h1>
		<ul>
			<li>
				<b>Valor: </b>{{$detalhes->valor}}
			</li>
			<li>
				<b>Descrição: </b>{{$detalhes->descricao or 'Não há descrição'}}
			</li>
			<li>
				<b>Qauntidade: </b>{{$detalhes->quantidade}}
			</li>
		</ul>
	</table>
@stop