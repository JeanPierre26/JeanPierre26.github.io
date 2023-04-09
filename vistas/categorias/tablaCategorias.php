

	<?php 
			require_once "../../clases/Conexion.php";
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="SELECT id_categoria,nombreCategoria 
					FROM categorias";
			$result=mysqli_query($conexion,$sql);
	 ?>


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
	#boton1{
		float:right;
  		
	}
</style>
	<label>Categorias</label>
	<a href="categoriasadd.php">
	<button type="submit" class="btn btn-success" id="boton1">Agregar Categorias</button>
	</a>
	<br>
	<br>
	
	<thead>
	<tr>
		<td>Categoria</td>
		<td>Editar</td>
		<td>Eliminar</td>
	</tr>
    </thead>
	<?php
	while ($ver=mysqli_fetch_row($result)):
	 ?>

	<tr>
		<td><?php echo $ver[1] ?></td>
		<td>
			<span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#actualizaCategoria" onclick="agregaDato('<?php echo $ver[0] ?>','<?php echo $ver[1] ?>')">
				<span class="glyphicon glyphicon-pencil"></span>
			</span>
		</td>
		<td>
			<span class="btn btn-danger btn-xs" onclick="eliminaCategoria('<?php echo $ver[0] ?>')">
				<span class="glyphicon glyphicon-remove"></span>
			</span>
		</td>
	</tr>

<?php endwhile; ?>
</table>