@extends('layout.principal')

@section('conteudo')
@if(count($errors) > 0)
<div class ="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
       <li>{{$error}}</li>   
      @endforeach
    </ul>  
</div>
@endif
<h1>Novo Usuário</h1>
<form action="/usuarios/registrar" method="post">
<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
  <div class="form-group">
    <label>Nome</label>
    <input name="name" class="form-control" required placeholder="Nome" />
  </div>
  <div class="form-group">
    <label>Email</label>
    <input name="email" class="form-control" required placeholder="exemplo@exemplo.com.br" />
  </div>
  <div class="form-group">
    <label>Senha</label>
    <input name="password" class="form-control" type="password" required placeholder="******" />
  </div>
  <button type="submit" 
    class="btn btn-primary btn-block">Submit</button>
</form>

@stop