
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/custom.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Controler de estoque</title>
</head>
<body>
	<div class="container">

		<nav class="navbar navbar-default">
		<div class="container-fluid">/
			<div class="navbar-header">      
				<a class="navbar-brand" href="/produtos">Estoque Laravel</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/produtos">Listagem</a></li>
				<li><a href="/produtos/novo">Novo</a></li>
			</ul>	
		</div>
	</nav>
	@yield('conteudo')
	<footer class="footer">
		<p>Curso Alura</p>
	</footer>
	</div>
</body>
</html>