
<?php 
	require_once "../../clases/Conexion.php";

	$obj= new conectar();
	$conexion= $obj->conexion();

	$sql="SELECT id_cliente, 
				nombre,
				apellido,
				direccion,
				email,
				telefono
		from clientes";
	$result=mysqli_query($conexion,$sql);
 ?>

<div class="">
	 <table>
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
</style>
	 	<caption><label>Tabla Clientes</label></caption>
		<thead>
	 	<tr>
	 		<td>Nombre</td>
	 		<td>Apellido</td>
	 		<td>Direccion</td>
	 		<td>Email</td>
	 		<td>Telefono</td>
	 		<td>Editar</td>
	 		<td>Eliminar</td>
	 	</tr>
		</thead>

	 	<?php while($ver=mysqli_fetch_row($result)): ?>

	 	<tr>
	 		<td><?php echo $ver[1]; ?></td>
	 		<td><?php echo $ver[2]; ?></td>
	 		<td><?php echo $ver[3]; ?></td>
	 		<td><?php echo $ver[4]; ?></td>
			<td><?php echo $ver[5]; ?></td>
	 		<td>
				<span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#abremodalClientesUpdate" onclick="agregaDatosCliente('<?php echo $ver[0]; ?>')">
					<span class="glyphicon glyphicon-pencil"></span>
				</span>
			</td>
			<td>
				<span class="btn btn-danger btn-xs" onclick="eliminarCliente('<?php echo $ver[0]; ?>')">
					<span class="glyphicon glyphicon-remove"></span>
				</span>
			</td>
	 	</tr>
	 <?php endwhile; ?>
	 </table>
</div>