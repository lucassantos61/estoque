
<!DOCTYPE html>
<html>
<h	ead>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="/css/app.css" rel="stylesheet">
<link href="/css/custom.css" rel="stylesheet">

	<title>Controler de estoque</title>
</head>
<body>
	<div class="container">

		<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">      
				<a class="navbar-brand" href="/produtos">Estoque Laravel</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/produtos">Listagem</a></li>
				<li><a class ="teste" href="/produtos/novo">Novo</a></li>
				  @if (Auth::guest())
				    <li><a href="/login">Login</a></li>
				    <li><a href="/register">Registrar</a></li>
				  @else
				    <li>{{ Auth::user()->name }} </li>
				    <li><a href="/logout">Logout</a></li>
				  @endif
			</ul>	
		</div>
	</nav>
	@yield('conteudo')
	<footer class="footer">
		<p>Controle de estoque</p>
	</footer>
	</div>
</body>
</html>