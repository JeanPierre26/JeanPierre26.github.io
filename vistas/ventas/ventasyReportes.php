<?php 

	require_once "../../clases/Conexion.php";
	require_once "../../clases/Ventas.php";

	$c= new conectar();
	$conexion=$c->conexion();

	$obj= new ventas();

	$sql="SELECT id_venta,
				fechaCompra,
				id_cliente 
			from ventas group by id_venta";
	$result=mysqli_query($conexion,$sql); 



	?>


<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-10">
	<form method="post" action="eliminar.php">
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

    .boton{
		background-color: #f44336; /* Color de fondo */
		border: none; /* Sin borde */
		color: white; /* Color de texto */
		padding: 10px 10px; /* Padding (relleno) interno */
		text-align: center; /* Centrado de texto */
		text-decoration: none; /* Sin decoración de texto */
		display: inline-block; /* Como elemento en línea */
		font-size: 16px; /* Tamaño de fuente */
		margin: 10px; /* Margen */
		cursor: pointer; /* Cursor al pasar por encima */
		border-radius: 5px; /* Radio de borde */
	}

	

	</style>
	            
				<caption><label>Ventas</label></caption>
				<thead>
				<tr>
					<td>#</td>
					<td>Fecha</td>
					<td>Cliente</td>
					<td>Total de compra</td>
					<td>Borrar</td>
				</tr>
				</thead>
		<?php while($ver=mysqli_fetch_row($result)): ?>
				<tr>
					<td><?php echo $ver[0];?></td>
					<td><?php echo $ver[1]; ?></td>
					<td>
						<?php
							if($obj->nombreCliente($ver[2])==" "){
								echo "S/C";
							}else{
								echo $obj->nombreCliente($ver[2]);
							}
						 ?>
					</td>
					<td>
						<?php 
							echo "S/.".$obj->obtenerTotal($ver[0]);
						 ?>
					</td>
					
					<td>
				    <form method="post" action="ventas/eliminar.php">
					<input type="hidden" name="id" value="<?php echo $ver[0]; ?>">
					<input type="submit" value="Eliminar" class="boton">
					</form>
					</td>
				    
	</tr>
					
				</tr>
		<?php endwhile; ?>
		</form>
			</table>
		</div>
	</div>
	<div class="col-sm-1"></div>
</div>
