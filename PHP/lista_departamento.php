<?php
	require_once "config.php";
	$sql = mysqli_query($conn, "select * from departamentos order by nome_departamento");
?>
<ul>
<?php
		while($rs=mysqli_fetch_array($sql)){
?>	
	<li><?php echo $rs['nome_departamento'];?> </li>
	<?php
		}
	?>