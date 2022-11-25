<?php
include("conexion.php");
$con=conectar();

$id=rand(10000000,999999999);
$clave=$_POST['clave'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$servicio=$_POST['servicio'];

echo "<h2>$clave</h2>";
echo "<h2>$nombre</h2>";
echo "<h2>$correo</h2>";
echo "<h2>$telefono</h2>";
echo "<h2>$servicio</h2>";
echo "<h2>$id</h2>";



$sql="INSERT TO form5 VALUES('$id','$clave','$nombre','$correo','$telefono','$servicio')";
$query=mysqli_query($con,$sql);

if($query){
   Header("Location: proveedores.php");
}
?>