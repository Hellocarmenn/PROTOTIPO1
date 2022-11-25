<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$clave=$_POST['clave'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$servicio=$_POST['servicio'];

$sql="UPDATE form5 SET clave='$clave', nombre='$nombre',correo='$correo', telefono='$telefono', servicio='$servicio' WHERE id='$id'";
//echo $sql;
//return(0);
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: proveedores.php");
}
?>