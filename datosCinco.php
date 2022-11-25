<?php

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


$con = mysqli_connect("localhost","root","","datosUno");
$sql = "INSERT INTO form5(id,clave,nombre,correo,telefono,servicio)
VALUES('$id','".$_POST["clave"]."','".$_POST["nombre"]."','".$_POST["correo"]."','".$_POST["telefono"]."','".$_POST["servicio"]."')";

mysqli_query($con,$sql)or die(mysqli_error($con));
?>
<script language="javascript">window.location.href="proveedores.php"</script>