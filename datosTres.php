<?php

$id = $_POST["id"];
$nombreArea= $_POST["nombreArea"];
$nombreResponsable= $_POST["nombreResponsable"];
$actividad = $_POST["actividad"];
$estatus = $_POST["estatus"];



echo "<h2>$id</h2>";
echo "<h2>$nombreArea</h2>";
echo "<h2>$nombreResponsable</h2>";
echo "<h2>$actividad</h2>";
echo "<h2>$estatus</h2>";


$con = mysqli_connect("localhost","root","","datosUno");
$sql = "INSERT INTO form3(id,nombreArea,nombreResponsable,actividad,estatus)
VALUES('".$_POST["id"]."','".$_POST["nombreArea"]."','".$_POST["nombreResponsable"]."','".$_POST["actividad"]."','".$_POST["estatus"]."')";

mysqli_query($con,$sql)or die(mysqli_error($con));
?>
<script language="javascript">window.location.href="area.php"</script>