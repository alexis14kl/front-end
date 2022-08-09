<?php 
require("../../php/Conexion.php");

if(isset($_POST['id'])){
	$idProducto = $_POST['id'];
	$consultProductoX_Id = mysqli_query($connect, "SELECT * FROM productos WHERE Id_Producto = '$idProducto'");
	$dataNumberProduct = mysqli_num_rows($consultProductoX_Id);
	if($dataNumberProduct){
		$dataArrayProduct = mysqli_fetch_array($consultProductoX_Id);
		echo  json_encode($dataArrayProduct);
	}
}

 ?>