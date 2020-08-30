<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
	<link href="/css/custom.css" rel="stylesheet">
	<style type="text/css">
		.jumbotron{
			margin: 20px auto;
		}
	</style>
	<title>Controle de estoque</title>
</head>
<body class="container">
	<div class="jumbotron">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header float-left">
					<a class="navbar-brand" href="/produtos">
						Estoque Laravel
					</a>
				</div>
				<ul class="nav navbar float-right">
					<li><a href="/produtos">Listagem</a></li>
				</ul>
			</div>
		</nav>
		@yield('conteudo')
		<footer>
			<p>&copy; Marcos Reis</p>
		</footer>
	</div>
</body>
</html>