<?php
	require_once "config.php";
	$produto=$_POST['produto'];
	$preco=$_POST['preco'];
	$preco=$_POST['nome_imagem'];
	$sql=mysqli_query($conn,"insert into produto(nome_produto,preco_produto,imagem_produto) values('$produto','$preco','')");
	header("location:lista_departamento.php");
?>