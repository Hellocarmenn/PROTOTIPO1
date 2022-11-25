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
<style>
    .mymenu{
        display: block;
        width: 200px;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 700;
        border-radius: 10px;
        margin: 130px 450px;
        padding: 15px 30px;
        background-color: #67AAD0; color:black;
    }

</style>

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

        <form name="form3" action="datosTres.php" method="post">


            <div class="panel-body">
                <div class="container">
                    <div class="col-sm-6 ">
                        <p>COM 0002-TECNOCAS-VENTA DE EQUIPO Y DATA CENTER</p>
                        <p style="color:black;">Generalidades</p>
                        <br></br>
                    </div>

                    <div class="col-sm-12">
                        <div class="col-sm-3">
                            <div class="well" style="background-color:#66EBE9;">Comercial 90%</div>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="well" style="background-color:#8C9D9C;">Operaciones 65%</div>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="well" style="background-color:#9A4950;">Implemantacón 45%</div>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="well" style="background-color:#A0F573">Mesa de Servicio 30%</div>
                        </div>
                        <br></br>
                        <div class="col text-center">
                            <a class="mymenu" href="area.php" class="col text-center" type="button" target="_black">Agregar Area</a>
                        </div>
                    </div>
                </div>

                <!--
                <div class="col-sm-6">
                    <div class="container">
                        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Agregar Area</button>
                        <br></br>
                        <div id="demo" class="collapse">

                            <div class="container">

                                <div class="panel-body" style="background-color:#67AAD0;">
                                    <h1>Nombre del área</h1>
                                    <div class="panel-body" style="background-color:#C4CFD4;">
                                        <form>
                                            <div class="form-group row">
                                                <div class="col-xs-3">
                                                    <input class="form-control" name="noConsecutivo1" type="text" placeholder="No. Consecutivo">
                                                </div>
                                                <div class="col-xs-3">
                                                    <input class="form-control" name="nombreResponsable1" type="text" placeholder="Nombre del responsable">
                                                </div>

                                                <div class="col-sm-3">
                                                    <input class="form-control" name="actividad1" type="text" placeholder="Actividad ">
                                                </div>

                                                <div class="col-sm-3">
                                                    <select name="estatus1" class="form-control required" style="background-color: white">
                                                        <option selected>Estatus</option>
                                                        <option value="Trabajando" style="background-color: #00007E ; color:white">Trabajando</option>
                                                        <option style="background-color: #CD0005;color: white;" value="En espera">En espera</option>
                                                        <option style="background-color: #127D03;color:Black" value="Hecho">Hecho</option>
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                </div>

                                <p style="color: #808080 ;" align="CENTER">Cuando la fecha de termino estimada sea anterior al día de
                                    hoy y su estatus sea <br></br> diferente a Hecho, habrá que marcar en color rojo el estatus para
                                    alertar al <br></br>responsable.
                                </p>

                                <div class="panel-body" style="background-color:#67AAD0;">
                                    <h1>Nombre del área</h1>
                                    <div class="panel-body" style="background-color:#C4CFD4;">

                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <input class="form-control" name="noConsecutivo2" type="text" placeholder="No.Consecutivo">
                                            </div>
                                            <div class="col-sm-3">
                                                <input class="form-control" name="nombreResponsable2" type="text" placeholder="Nombre del responsable">
                                            </div>
                                            <div class="col-sm-3">
                                                <input class="form-control" name="actividad2" type="text" placeholder="Actividad">
                                            </div>

                                            <div class="col-sm-3">
                                                <select name="estatus2" class="form-control required" style="background-color: white">
                                                    <option selected>Estatus</option>
                                                    <option value="Trabajando" style="background-color: #00007E ; color:white">Trabajando</option>
                                                    <option style="background-color: #CD0005;color: white;" value="En espera">En espera</option>
                                                    <option style="background-color: #127D03;color:Black" value="Hecho">Hecho</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sn-12" align="center">
                                <br></break>
                                <input type="submit" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
-->

</body>

</html>