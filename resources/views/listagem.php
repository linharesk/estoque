<html>
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
	<style type="text/css">
		.jumbotron{
			margin: 20px auto;
		}
	</style>
	</head>
	<body class="container">
		<div class="jumbotron">
		<h1 class="card-header text-center">Listagem de produtos</h1>
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">Produto</th>
					<th scope="col">Preco</th>
					<th scope="col">Descricao</th>
					<th scope="col">Quantidade</th>
				</tr>
			</thead>
			<?php foreach ($produtos as $p): ?>
			<tr>
				<td><?= $p->nome ?></td>
				<td><?= $p->valor ?></td>
				<td><?= $p->descricao ?></td>
				<td><?= $p->quantidade ?></td>
				<td><a href="/produtos/mostra/<?= $p->id ?>">
					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
					  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
					</svg>
				</a></td>
			</tr>
			<?php endforeach ?>
		</table>
	</body>
</html>