@extends('layout.principal')


@section('conteudo')

@if(empty(@produtos))
	<div class="alert alert-danger">
	Você não tem nenhum produto cadastrado.
	</div>
@else
	<table class ="table table-striped table-bordered table-hover">
		<h1>Listagem de produtos</h1>
		@foreach($produtos as $p)
		<tr class="{{ $p->quantidade <= 1 ? 'danger':''}}">
			<td>{{$p->nome}}</td>
			<td>{{$p->valor}}</td>
			<td>{{$p->descricao or 'Não há descrição'}}</td>
			<td>{{$p->tamanho}}</td>
			<td>{{$p->quantidade}}</td>
			<td>
				<a href="/produtos/mostra/{{$p->id}}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
			</td>
			<td>
				<a href="/produtos/remove/{{$p->id}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
			</td>
			<td>
				<a href="/produtos/edita/{{$p->id}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
			</td>
		</tr>
		@endforeach
	</table>
@endif
<h4>
	<span class="label label-danger pull-right">
		Um ou menos itens no estoque
	</span>
</h4>

@if(old('nome'))
	<div class="alert alert-success">
    Produto {{old('nome')}} adicionado com sucesso
    </div>
@endif
@stop 