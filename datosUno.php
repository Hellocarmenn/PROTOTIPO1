<?php
$namePro = $_POST["namePro"];
$IDcliente = $_POST["IDcliente"];
$contactos = $_POST["contactos"];
$procedencia = $_POST["procedencia"];
$nombreCliente = $_POST["nombreCliente"]; 
$ubi = $_POST["ubi"];
$responsableComercial = $_POST["responsableComercial"];
$responsableOperativo = $_POST["responsableOperativo"];
$alcanceProyecto = $_POST["alcanceProyecto"];
$ampliacionAlcance = $_POST["ampliacionAlcance"];
$extrasAlcance = $_POST["extrasAlcance"];



echo "<h2>$namePro</h2>";
echo "<h2>$IDcliente</h2>";
echo "<h2>$contactos</h2>";
echo "<h2>$procedencia</h2>";
echo "<h2>$nombreCliente</h2>";
echo "<h2>$ubi</h2>";
echo "<h2>$responsableComercial</h2>";
echo "<h2>$responsableOperativo</h2>";
echo "<h2>$alcanceProyecto</h2>";
echo "<h2>$ampliacionAlcance</h2>";
echo "<h2>$extrasAlcance</h2>";
$con = mysqli_connect("localhost","root","","datosUno");
$consulta = "INSERT INTO form1(namePro,IDcliente,contactos,procedencia,nombreCliente,ubi,responsableComercial,responsableOperativo,alcanceProyecto,ampliacionAlcance,extrasAlcance,nameformulario1,area1,email1,num1,nameformulario2,area2,email2,num2,nameformulario3,ac,email,num)
VALUES('".$_POST["namePro"]."','".$_POST["IDcliente"]."','".$_POST["contactos"]."','".$_POST["procedencia"]."','".$_POST["nombreCliente"]."','".$_POST["ubi"]."','".$_POST["responsableComercial"]."','".$_POST["responsableOperativo"]."','".$_POST["alcanceProyecto"]."','".$_POST["ampliacionAlcance"]."','".$_POST["extrasAlcance"]."','".$_POST["nameformulario1"]."','".$_POST["area1"]."','".$_POST["email1"]."','".$_POST["num1"]."','".$_POST["nameformulario2"]."','".$_POST["area2"]."','".$_POST["email2"]."','".$_POST["num2"]."','".$_POST["nameformulario3"]."','".$_POST["ac"]."','".$_POST["email"]."','".$_POST["num"]."')";
$resultado = mysqli_query($con,$consulta)or die(mysqli_error($con));
?>
<script language="javascript">window.location.href="generalidades.php"</script> 