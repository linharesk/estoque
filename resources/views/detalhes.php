<html>
	<head>
		<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
		<style type="text/css">
			.jumbotron{
				margin: 20px auto;
			}
			.table{
				margin: 10px auto;
			}
		</style>
		<title>Detalhes do Produto</title>
	</head>
	<body class="container">
		<div class="jumbotron">
			<h1 class="card-header text-center">Detalhes do produto: <?= $p->nome ?> </h1>
			<table class="table table-striped">
				<tr>
					<td><b>Descrição: </b> <?= $p->descricao ?></td>
				</tr>
				<tr>
					<td><b>Quantidade em estoque: </b> <?= $p->quantidade ?></td>
				</tr>
				<tr>
					<td><b>Valor: </b> R$ <?= $p->valor ?></td>
				</tr>
			</table>
		</div>
	</body>
</html>