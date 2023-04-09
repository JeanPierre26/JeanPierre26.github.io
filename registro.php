<?php 
	
	require_once "clases/Conexion.php";
	$obj= new conectar();
	$conexion=$obj->conexion();

	$sql="SELECT * from usuarios where email='admin'";
	$result=mysqli_query($conexion,$sql);
	$validar=0;
	if(mysqli_num_rows($result) > 0){
		header("location:index.php");
	}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>registro</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.2.1.min.js"></script>
	<script src="js/funciones.js"></script>

</head>
<body style="background-color: gray">
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-primary">
					<div class="panel panel-heading">Registrar </div>
					<div class="panel panel-body">
						<center>
							<img src="img/agregar.png"  height="100" >
						</center>
						<form id="frmRegistro">
							<label>Nombre:</label>
							<input type="text" class="form-control input-sm" name="nombre" id="nombre">
							<label>Apellido:</label>
							<input type="text" class="form-control input-sm" name="apellido" id="apellido">
							<label>Usuario:</label>
							<input type="text" class="form-control input-sm" name="usuario" id="usuario">
							<label>Contraseña:</label>
							<input type="text" class="form-control input-sm" name="password" id="password">
							<p></p>
							<span class="btn btn-primary" id="registro">Registrar</span>
							<a href="index.php" class="btn btn-danger">Regresar </a>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registro').click(function(){

			vacios=validarFormVacio('frmRegistro');

			if(vacios > 0){
				alert("Relleanr Campos");
				return false;
			}

			datos=$('#frmRegistro').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/regLogin/registrarUsuario.php",
				success:function(r){
					alert(r);

					if(r==1){
						alert("Agregado con exito");
						window.location="index.php";
					}else{
						alert("Error al agregar");
					}
				}
			});
		});
	});
</script>

