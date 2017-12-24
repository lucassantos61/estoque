@extends('layout.principal')

@section('conteudo')

<form action="/login" method="post">
<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
  <div class="form-group">
    <label>Email</label>
    <input name="email" class="form-control" required/>
  </div>
  <div class="form-group">
    <label>Senha</label>
    <input name="password" class="form-control" type="password" required/>
  </div>
  <button type="submit" 
    class="btn btn-primary btn-block">Submit</button>
</form>

@stop