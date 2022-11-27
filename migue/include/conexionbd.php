<?php

$servidor= "localhost";
$usuario="root";
$pass="";
$bd="conexiones";

$connect=mysqli_connect($servidor, $usuario, $pass, $bd);
if($connect -> connect_error){
    die ('error al conectar la base de datos'.$connect->connect_erron);
 
}
else{
    //echo"conexion exitosa";
}
    

?>

