<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

<div id="container">
	<h1>Insira um </h1>
	<a href="/index.php/Welcome/listar">Listar</a>
	<form action="/index.php/Welcome/inserir" method="post">
		<label for="">Descrição</label>
		<input name="descricao">
		<label for="">Foto</label>
		<input name="foto">
		<label for="">Tipo de operação</label>
		<select name="tipo_operacao" id="">
			<option value="aluguel">Aluguel</option>
			<option value="venda">Venda</option>
		</select>
		<label for="">Número de dormitórios</label>
		<input type="number" name="dormitorios">
		<label for="">Preço</label>
		<input type="number" step="0.01"name="preco">
		<button type="submit">Enviar</button>
	</form>
</div>

</body>
</html>