<?php
	
	session_start();
	
	if(!isset($_SESSION['logado'])|| ($_SESSION['logado']==false)){
	$_SESSION['erro']=2;
	header("location:f_login.php");
	}
	else{
	?>
	<p>Olá<?php echo$_SESSION['nome'];?>(<a href="logout.php">Sair</a>)
	<h2>Conteudo restito</h2>
	<?php
	}
	?>