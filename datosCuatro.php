<?php

$consecutivo = $_POST["consecutivo"];
$nombreResponsable = $_POST["nombreResponsable"];
$descripcion = $_POST["descripcion"];
$areaResponsable = $_POST["areaResponsable"];
$estatus= $_POST["estatus"]; 
$observaciones = $_POST["observaciones"];
$fechaEstimada1 = $_POST["fechaEstimada1"];
$fechaInicio1 = $_POST["fechaInicio1"];
$fechaEstimada2 = $_POST["fechaEstimada2"];
$fechaReal2 = $_POST["fechaReal2"];




echo "<h2>$consecutivo</h2>";
echo "<h2>$nombreResponsable</h2>";
echo "<h2>$descripcion</h2>";
echo "<h2>$areaResponsable</h2>";
echo "<h2>$estatus</h2>";
echo "<h2>$observaciones</h2>";
echo "<h2>$fechaEstimada1</h2>";
echo "<h2>$fechaInicio1</h2>";
echo "<h2>$fechaEstimada2</h2>";
echo "<h2>$fechaReal2</h2>";
$con = mysqli_connect("localhost","root","","datosUno");
$sql = "INSERT INTO form4(consecutivo, nombreResponsable,descripcion,areaResponsable,estatus,observaciones,fechaEstimada1,fechaInicio1,fechaEstimada2,fechaReal2)
VALUES('".$_POST["consecutivo"]."','".$_POST["nombreResponsable"]."','".$_POST["descripcion"]."','".$_POST["areaResponsable"]."','".$_POST["estatus"]."','".$_POST["observaciones"]."','".$_POST["fechaEstimada1"]."','".$_POST["fechaInicio1"]."','".$_POST["fechaEstimada2"]."','".$_POST["fechaReal2"]."')";

mysqli_query($con,$sql)or die(mysqli_error($con));
?>
<script language="javascript">window.location.href="descrActividad.php"</script>