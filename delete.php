<?php
include("conexion.php");
$con=conectar();

$clave=$_GET['id'];
$sql="DELETE FROM form5  WHERE clave='$clave'";
$query=mysqli_query($con,$sql);

if ($query){
    Header("Location: proveedores.php");
}
?>