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

    <div class="container">
        <p>COM 0002-TECNOCAS-VENTA DE EQUIPO Y DATA CENTER</p>
    </div>
    <div class="container">
        <p style="color:black;">Generalidades</p>
    </div>


    <div class="container">
        <form name="form2" action="datosDos.php" method="post">

            <div class="panel">
                <div class="panel-body">
                    <form class="form-inline">
                        <div class="col-sm-5 ">
                            <label class="well well-sm" style="background-color:#99A1A3 ;" for="IDbitrix ">ID negociación Bitrix:</label>
                            <input class="form-control required" type="text" name="IDbitrix" />
                            <br></br>

                            <label class="well well-sm" style="background-color:#99A1A3;" for="noContrato">No. de contrato:</label>
                            <input class="form-control required" type="text" name="noContrato" />
                            <br></br>
                        </div>
                    </form>


                    <div class="col-sm-7 ">
                        <label class="well well-sm" style="background-color:#99A1A3 ;" for="IDnegociacion">ID negociación sistema comercial:</label>
                        <input class="form-control required" type="text" name="IDnegociacion" />
                        <br></br>

                        <label class="well well-sm" style="background-color:#99A1A3;" for="vigencia">Vigencia del contrato</label>
                        <input class="form-control required" type="text" name="vigencia" />
                        <br></br>
                    </div>


                    <div class="container">
                        <div class="col-sm-8 ">
                            <label><input name="tercero" type="checkbox"></input>&nbsp;Involucra un tercero para realizar el
                                trabajo de IMO </label>
                        </div>

                        <div class="col-sm-3">
                            <input class="form-control required" type="text" name="entrada" />
                        </div>
                    </div>
                    <br></br>


                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="col-sm-10" class="panel panel-heading panel-title" style="background-color:#99A1A3;">
                                <strong>Empresa con la que llevamos el proyecto o contrato</strong>
                            </div>
                            <div clas="panel panel-body ">
                                <textarea name="empresa" class="form-control" style="background-color:#67AAD0" rows="8" required></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="col-sm-10" class="panel panel-heading panel-title" style="background-color:#99A1A3;">
                                <strong>Listado de servicios que incluye el contrato</strong>
                            </div>
                            <div clas="panel panel-body ">
                                <textarea name="listado" class="form-control" style="background-color:#67AAD0" rows="8" required></textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sn-12" align="center">
                    <br></break>
                    <input type="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</body>

</html>