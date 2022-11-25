<?php
$IDbitrix = $_POST["IDbitrix"];
$noContrato = $_POST["noContrato"];
$IDnegociacion = $_POST["IDnegociacion"];
$vigencia = $_POST["vigencia"];
$tercero = $_POST["tercero"];
$entrada = $_POST["entrada"];
$empresa =$_POST["empresa"];
$listado = $_POST["listado"];




echo "<h2>$IDbitrix</h2>";
echo "<h2>$noContrato</h2>";
echo "<h2>$IDnegociacion</h2>";
echo "<h2>$vigencia</h2>";
echo "<h2>$tercero</h2>";
echo "<h2>$entrada</h2>";
echo "<h2>$empresa</h2>";
echo "<h2>$listado</h2>";



$con = mysqli_connect("localhost","root","","datosUno");
$sql = "INSERT INTO form2(IDbitrix,noContrato,IDnegociacion,vigencia,tercero,entrada,empresa,listado)
VALUES('".$_POST["IDbitrix"]."','".$_POST["noContrato"]."','".$_POST["IDnegociacion"]."','".$_POST["vigencia"]."','".$_POST["tercero"]."','".$_POST["entrada"]."','".$_POST["empresa"]."','".$_POST["listado"]."')";

mysqli_query($con,$sql)or die(mysqli_error($con));
?>
<script language="javascript">window.location.href="contrato.php"</script>


