<?php
	session_start();
	if(!isset($_SESSION['logado'])){
		$_SESSION['logado']=false;
	}
		if($_SESSION['logado']==false){
	?>
	<form method="post" action="login.php">
	User: <input type="text" name="user"/><br/>
	Pass: <input type="password" name="pass"></br>
	<input type="submit" value="login"/>
	</form>
	<?php }
		else{
		?>
	<p>Olá <?php echo $_SESSION['nome'];?>(<a href="logout.php">Sair</a>)
	<?php	
		}
		if(isset($_SESSION['erro'])){
			if($_SESSION['erro']==1){
				echo"Usuario e/ou senha incorretas";
			}
			else{
				if($_SESSION['erro']==2){
					echo "Página restria, efetue login.";
				}
			}
	}
	?>