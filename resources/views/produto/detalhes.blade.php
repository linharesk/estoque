@extends('layout/principal')

@section('conteudo')
	<h1 class="card-header text-center">Detalhes do produto: <?= $p->nome ?> </h1>
	<table class="table table-striped">
		<tr>
			<td><b>Descrição: </b> <?= $p->descricao ?></td>
		</tr>
		<tr class="{{ $p->quantidade <= 1 ? 'alert-danger' : '' }}">
			<td><b>Quantidade em estoque: </b> <?= $p->quantidade ?></td>
		</tr>
		<tr>
			<td><b>Valor: </b> R$ <?= $p->valor ?></td>
		</tr>
	</table>
@stop