<?php 
require("../../php/Conexion.php");
if(isset($_POST['idProductoTemp'])){

	$idProducto = $_POST['idProductoTemp'];
	$result     = $_POST['result'];

	$consultProductoPrecio = mysqli_query($connect, "SELECT * FROM productos WHERE Id_Producto = '$idProducto' ");
	$dataArrayPrecio = mysqli_fetch_array($consultProductoPrecio);

	$precioP = $dataArrayPrecio['Precio_producto'];

	$precioPNew = $result * $precioP;

	$insert = mysqli_query($connect, "INSERT INTO venta_temporal (`Id_venta_Temp`, `New_Cantidad_Temp`, `Precio_Final`, `Id_Producto`) VALUES (NULL, '$result', '$precioPNew', '$idProducto')");

}
 ?>