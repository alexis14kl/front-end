<?php 
session_start();
require("../../php/Conexion.php");
if(isset($_POST['email'])){
     $correo = $_POST['email'];
     $pass   = $_POST['passLogin'];
     $consulta = mysqli_query($connect,"SELECT * from usuarios where Email_User = '$correo' and  Password_User = '$pass' ");
     $datos = mysqli_num_rows($consulta);
     
     if($datos > 0){
          $data = mysqli_fetch_array($consulta);
     	echo "yes";
     	             $_SESSION['active'] = true;
                       $_SESSION['service'] = "service";
                        $_SESSION['Id_User'] = $data['Id_User'];
                         $_SESSION['Name_User'] = $data['Name_User'];
                         $_SESSION['Id_Rol_User'] = $data['Id_Rol_User'];
                          // $_SESSION['LastName_User'] = $datos['LastName_User'];
                          // $_SESSION['Email_User'] = $datos['Email_User'];
                         exit();
                         mysqli_close();
     }else{
     	echo "No";
     }
 }
 ?>