<?php
	$servidor="localhost";//127.0.0.1
	$usuario="root";
	$senha="";
	$banco="teste";
	$conn=mysqli_connect($servidor,$usuario,$senha,$banco);
	if(!$conn){
		die("Erro ao conectar com o DB");
	}
	?>