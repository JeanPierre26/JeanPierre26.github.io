<?php 

	session_start();
	//print_r($_SESSION['tablaComprasTemp']);
 ?>


 <h4><strong><div id="nombreclienteVenta"></div></strong></h4>
 <table>
 <style>
    body{
		background-color :#5499C7;
		
	}


    table{
		text-align:center;
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
 	<caption>
 		<span class="btn btn-success" onclick="crearVenta()"> Generar venta
 			<span class="glyphicon glyphicon-usd"></span>
 		</span>
 	</caption>
	<thead>
 	<tr>
 		<td>Nombre</td>
 		<td>Descripcion</td>
 		<td>Precio</td>
 		<td>Cantidad</td>
 		<td>Quitar</td>
 	</tr>
	</thead>
 	<?php 
 	$total=0;//esta variable tendra el total de la compra en dinero
 	$cliente=""; //en esta se guarda el nombre del cliente
 		if(isset($_SESSION['tablaComprasTemp'])):
 			$i=0;
 			foreach (@$_SESSION['tablaComprasTemp'] as $key) {

 				$d=explode("||", @$key);
 	 ?>

 	<tr>
 		<td><?php echo $d[1] ?></td>
 		<td><?php echo $d[2] ?></td>
 		<td><?php echo $d[3] ?></td>
 		<td><?php echo 1; ?></td>
 		<td>
 			<span class="btn btn-danger btn-xs" onclick="quitarP('<?php echo $i; ?>')">
 				<span class="glyphicon glyphicon-remove"></span>
 			</span>
 		</td>
 	</tr>

 <?php 
 		$total=$total + $d[3];
 		$i++;
 		$cliente=$d[4];
 	}
 	endif; 
 ?>

 	<tr>
 		<td>Total: <?php echo "S/.".$total; ?></td>
 	</tr>

 </table>


 <script type="text/javascript">
 	$(document).ready(function(){
 		nombre="<?php echo @$cliente ?>";
 		$('#nombreclienteVenta').text("Nombre de cliente: " + nombre);
 	});
 </script>