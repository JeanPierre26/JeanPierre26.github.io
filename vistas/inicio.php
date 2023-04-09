<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>inicio</title>
	<?php require_once "menu.php"; ?>
	<h1 class="fw-bold">Hola de nuevo, Jean Pierre!</h1>
</head>
<body>
<style>
    body{
		background-color :#5499C7;
		
	}
</style>

</body>
</html>
<?php 
	}else{
		header("location:../index.php");
	}
 ?>