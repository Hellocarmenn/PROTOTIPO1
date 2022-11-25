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
                    <a class="navbar-brand" href="#">ID de proyecto</a>
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

    <div class="container">
        <form name="form3" action="datosTres.php" method="post">
            <div class="panel-body" style="background-color:#67AAD0;">
                <h1>Área</h1>
                <div class="panel-body" style="background-color:#C4CFD4;">

                    <div class="form-group row">
                        <div class="col-xs-1">
                            <input class="form-control" name="id" type="text" placeholder="No. Consecutivo">
                        </div>
                        <div class="col-xs-3">
                            <input class="form-control" name="nombreArea" type="text" placeholder="Nombre del área">
                        </div>
                        <div class="col-xs-3">
                            <input class="form-control" name="nombreResponsable" type="text" placeholder="Nombre del responsable">
                        </div>

                        <div class="col-sm-3">
                            <input class="form-control" name="actividad" type="text" placeholder="Actividad ">
                        </div>

                        <div class="col-sm-2">
                            <select name="estatus" class="form-control" style="background-color: white">
                                <option selected>Estatus</option>
                                <option value="Trabajando" style="background-color: #00007E ; color:white">Trabajando</option>
                                <option style="background-color: #CD0005;color: white;" value="En espera">En espera</option>
                                <option style="background-color: #127D03;color:Black" value="Hecho">Hecho</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sn-12" align="center">
                        <input type="submit" class="btn btn-primary" value="Agregar área">
                    </div>
                </div>
            </div>


<br></br>
            <div class="col-sm-12">
                <?php
                $con = mysqli_connect("localhost", "root", "", "datosUno");

                $sql = "select * from form3";
                $query = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($query)) {
                ?>
                    <div class="panel">
                        <div class="panel-body" style="background-color:#67AAD0;">
                            <div class="panel-body" style="background-color:#C4CFD4;">
                                <div class="col-sm-12">
                                    <div class="col-sm-1"><input type="text" value="<?php echo $row["id"] ?>" class="form-control" disabled></div>
                                    <div class="col-sm-3"><input type="text" value="<?php echo $row["nombreArea"] ?>" class="form-control" disabled></div>
                                    <div class="col-sm-3"><input type="text" value="<?php echo $row["nombreResponsable"] ?>" class="form-control" disabled></div>
                                    <div class="col-sm-3"><input type="text" value="<?php echo $row["actividad"] ?>" class="form-control" disabled></div>
                                    <div class="col-sm-2"><input type="text" value="<?php echo $row["estatus"] ?>" class="form-control" disabled></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </form>
    </div>
</body>

</html>