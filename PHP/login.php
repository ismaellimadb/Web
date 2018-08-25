<?php	
	session_start();
	$user=$_POST['user'];
	$pass=$_POST['pass'];
		if (($user=="Joao")&&($pass==123)){
			$_SESSION['logado']="true";
			$_SESSION['nome']="Joao";
			$_SESSION['erro']=0;
			header("location:pagina.php");
		}
		else{
			$_SESSION['logado']=false;
			$_SESSION['erro']=1;
			header("location:f_login.php");
		}
		echo $pass;
		die();
		?>