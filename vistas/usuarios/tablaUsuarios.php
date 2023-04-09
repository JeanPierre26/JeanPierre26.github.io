<?php 
	
	require_once "../../clases/Conexion.php";
	$c= new conectar();
	$conexion=$c->conexion();

	$sql="SELECT id_usuario,
					nombre,
					apellido,
					email
			from usuarios";
	$result=mysqli_query($conexion,$sql);

 ?>
<style>

    body{
		background-color :#5499C7;
		
	}


    table{
		text-align:left;
		background-color: white;
        width: 100%;
		border-collapse: collapse;
		
}
     th,td{
		
		padding: 20px;
    }
	thead{
		background-color: #246355;
		border-bottom: solid 5px #0F362D;
		color: white;
    }
	tr:nth-child(even){
		background-color: #ddd;
	}
	tr:hover {
		background-color: #369681;
		color: white;
    }
	#boton1{
		float:right;
  		
	}
</style>

<table  style="text-align: center;">
	<caption><label>Usuarios</label></caption>
	<thead>
	<tr>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Usuario</td>
		<td>Editar</td>
		<td>Eliminar</td>
	</tr>
	</thead>
	<?php while($ver=mysqli_fetch_row($result)): ?>

	<tr>
		<td><?php echo $ver[1]; ?></td>
		<td><?php echo $ver[2]; ?></td>
		<td><?php echo $ver[3]; ?></td>
		<td>
			<span data-toggle="modal" data-target="#actualizaUsuarioModal" class="btn btn-warning btn-xs" onclick="agregaDatosUsuario('<?php echo $ver[0]; ?>')">
				<span class="glyphicon glyphicon-pencil"></span>
			</span>
		</td>
		<td>
			<span class="btn btn-danger btn-xs" onclick="eliminarUsuario('<?php echo $ver[0]; ?>')">
				<span class="glyphicon glyphicon-remove"></span>
			</span>
		</td>
	</tr>
<?php endwhile; ?>
</table>