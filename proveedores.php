<?php
include("conexion.php");
$con = conectar();


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Prototipo
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <div class="barra">
    <nav class="navbar navbar-inverse" style="background-color: #2603af;">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="descrActividad.php">ID de proyecto</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="generalidades.php">Generalidades</a></li>
          <li><a href="contrato.php">Contrato</a></li>
          <li><a href="avance.php">Avance</a></li>
          <li><a href="proveedores.php">Proveedores</a></li>
          <li><a href="resultados.php">Resultados</a></li>
          <li><a href=""><span class="glyphicon glyphicon-user"></span></a></li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="container mt-5">
    <form name="form5" action="datosCinco.php" method="post">
      <div class="row">
        <div class="panel">
          <div class="col-sm-6" class="panel-body" style="background-color:#A1D9F3">
            <div align="center">
              <h1>Ingresa datos</h1>
              <input type="text" class="form-control " name="clave" placeholder="Clave">
              <br></br>
              <input type="text" class="form-control " name="nombre" placeholder="Nombre">
              <br></br>
              <input type="text" class="form-control " name="correo" placeholder="Correo electronico">
              <br></br>
              <input type="text" class="form-control " name="telefono" placeholder="Clave">
              <br></br>
              <input type="text" class="form-control " name="servicio" placeholder="Servicio/función">
              <br></br>
              <input type="submit" class="btn btn-primary">
            </div>
          </div>
        </div>

        <div class="col-sm-6" align="center">
          <br></br>
          <br></br>
          <table class="table" style="background-color:#67AAD0">
            <thead class="table-success table-striped" style="background-color:gray;color:white">
              <tr>
                <th>Clave</th>
                <th>Nombre</th>
                <th>Correo electronico</th>
                <th>Telefono</th>
                <th>Servicio/función</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <?php
            $sql = "SELECT * FROM form5";
            $query = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($query)) {
            ?>
              <tr>
                <th><?php echo $row['clave'] ?></th>
                <th><?php echo $row['nombre'] ?></th>
                <th><?php echo $row['correo'] ?></th>
                <th><?php echo $row['telefono'] ?></th>
                <th><?php echo $row['servicio'] ?></th>
                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Eliminar</a></th>

              </tr>
            <?php
            }
            ?>
          </table>
        </div>
      </div>
    </form>
  </div>
</body>

</html>