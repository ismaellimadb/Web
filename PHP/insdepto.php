<?php
	require_once "config.php";
	$departamento=$_POST['departamento'];
	$sql=mysqli_query($conn,"insert into departamentos(nome_departamento) values('$departamento')");
?>