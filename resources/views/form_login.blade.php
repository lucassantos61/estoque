@extends('layout.principal')

@section('conteudo')
@if(isset($info))
<div class ="alert alert-danger">
        {{$info}}
</div>
@endif
{{isset($p)?$p->nome:old('nome')}}
<form action="/login" method="post">
<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
  <div class="form-group">
    <label>Email</label>
    <input name="email" class="form-control" required placeholder="exemplo@exemplo.com.br" />
  </div>
  <div class="form-group">
    <label>Senha</label>
    <input name="password" class="form-control" type="password" required placeholder="*******"/>
  </div>
  <button type="submit" 
    class="btn btn-primary btn-block">Submit</button>
</form>

@stop