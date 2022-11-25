<?php
include("conexion.php");
$con = conectar();
$id = $_GET['id'];


$sql = "SELECT * FROM form5 WHERE ID='$id'";
$query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($query)) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">

    </head>

    <body>

        <div class="container mt-5">
            <form action="updete.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                <input type="text" class="form-control " name="clave" placeholder="Clave" value="<?php echo $row['clave'] ?>">
                <input type="text" class="form-control " name="nombre" placeholder="Nombre" value="<?php echo $row['nombre'] ?>">
                <input type="text" class="form-control " name="correo" placeholder="Correo electronico" value="<?php echo $row['correo'] ?>">
                <input type="text" class="form-control " name="telefono" placeholder="Telefono" value="<?php echo $row['telefono'] ?>">
                <input type="text" class="form-control " name="servicio" placeholder="Servicio/función" value="<?php echo $row['servicio'] ?>">
                <input type="submit" class="btn btn-primary btn-block " value="Actualizar">
            </form>
        </div>
    <?php
}
    ?>
    </body>

    </html>