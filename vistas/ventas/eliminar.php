<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "ventas");

// Verificar la conexión
if (!$conexion) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}

// Obtener el ID del registro a eliminar
$id = $_POST['id'];

// Consulta para eliminar el registro de la tabla
$query = "DELETE FROM ventas WHERE id_venta = $id";

// Ejecutar la consulta
if (mysqli_query($conexion, $query)) {
    echo "El registro ha sido eliminado correctamente.";
} else {
    echo "Error al eliminar el registro: " . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);

header('Location: ../ventas.php');
exit;

?>
