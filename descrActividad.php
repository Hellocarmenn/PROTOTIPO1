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
                        <a class="navbar-brand" href="generalidades.php"><span style="color:yellow">ID proyecto</span></a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <a class="navbar-brand" href="#"><span style="color:yellow">Descripcion de actividad</span></a>
                    </ul>
                </div>
            </nav>
    </div>
    <div class="container">
        <p>COM 0002-TECNOCAS-VENTA DE EQUIPO Y DATA CENTER</p>
    </div>
    <div class="container">
        <p align="right" style="color:#2603af;">Responsable de actividad</p>
    </div>

    <div class="container">
        <form name="form4" action="datosCuatro.php" method="post">
            <div class="panel">
                <div class="panel-body">
                    <form class="form-inline">
                        <div class="col-sm-6 ">
                            <label class="well well-sm" style="background-color:#99A1A3 ;" for="consecutivo">No.consecutivo:</label>
                            <input class="form-control required" type="text" name="consecutivo" />
                            <br></br>

                            <label class="well well-sm" style="background-color:#99A1A3;" for="nombreResponsable">Nombre del
                                responsable:</label>
                            <input class="form-control required" type="text" name="nombreResponsable" />
                            <br></br>

                            <label class="well well-sm" style="background-color:#99A1A3;" for="descripcion">Descripción de la
                                actividad</label>
                            <input class="form-control required" type="text" name="descripcion" />
                            <br></br>
                        </div>
                    </form>




                    <div class="col-sm-6 ">
                        <label class="well well-sm" style="background-color:#99A1A3;" for="areaResponsable"> Área responsable</label>
                        <select name="areaResponsable" class="form-control required" style="background-color: rgb(200, 202, 202);">
                            <option selected>Seleccionar</option>
                            <option value="Operaciones">Operaciones</option>
                            <option value="Implementación">Implementación</option>
                            <option value="Gobierno ">Gobierno</option>
                            <option value="Mesa de ayuda">Mesa de ayuda</option>
                            <option value="PMO">PMO</option>
                        </select>
                        <br></br>

                    </div>


                    
                        <div class="col-sm-6">
                            <label class="well well-sm" style="background-color:#99A1A3;"> Estatus de la actividad</label>
                            <select name="estatus" class="form-control required" style="background-color: white">
                                <option selected>Estatus</option>
                                <option value="Trabajando" style="background-color: #00007E ; color:white">Trabajando</option>
                                <option style="background-color: #CD0005;color: white;" value="En espera">En espera</option>
                                <option style="background-color: #127D03;color:Black" value="Hecho">Hecho</option>
                            </select>
                        </div>
                     
                        <div class="container">
                            <div class="col-sm-8">
                                <div class="panel">
                                    <div class="col-sm-2" class="panel panel-heading panel-title" style="background-color:#99A1A3;">
                                        <strong>Observaciones</strong>
                                    </div>
                                    <div clas="panel panel-body ">
                                        <textarea name="observaciones" class="form-control" style="background-color:#67AAD0" rows="8" required></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-12">
                            <div class="panel">
                                <div class="panel-body" style="background-color:#C4CFD4;">
                                    
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <label for="fechaEstimada1">Fecha de inico estimada</label>
                                                <input class="form-control" name="fechaEstimada1" type="date">
                                            </div>
                                            <div class="col-xs-6">
                                                <label for="fechaInicio1">Fecha de inicio real </label>

                                                <input class="form-control" name="fechaInicio1" type="date">
                                            </div>
                                        </div>
                                
                                </div>
                                <br></br>


                                <div class="panel">
                                    <div class="panel-body" style="background-color:#C4CFD4;">
                                        
                                            <div class="form-group row">
                                                <div class="col-xs-6">
                                                    <label for="fechaEstimada2">Fecha de término estimada</label>
                                                    <input class="form-control" name="fechaEstimada2" type="date">
                                                </div>
                                                <div class="col-xs-6">
                                                    <label for="fechaReal2">Fecha de termino real</label>
                                                    <input class="form-control" name="fechaReal2" type="date">
                                                </div>
                                            </div>
                                    
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sn-12" align="center">
                        <br></break>
                        <input type="submit" class="btn btn-primary" value="Guardar">
                    </div>
                </div>
        </form>
</body>

</html>