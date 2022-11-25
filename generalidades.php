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
        <form name="form1" action="datosUno.php" method="post">
            <div class="panel">
                <div class="panel-body">

                    <div class="container">
                        <form class="form-inline">
                            <div class="col-sm-6 ">
                                <label class="well well-sm" style="background-color:#99A1A3 ;" for="namePro">Nombre del
                                    proyecto:</label>
                                <input class="form-control " type="text" name="namePro" />
                                <br></br>

                                <label class="well well-sm" style="background-color:#99A1A3;" for="IDcliente">ID del
                                    cliente:</label>
                                <input class="form-control " name="IDcliente" type="text" />
                                <br></br>

                                <label class="well well-sm" style="background-color:#99A1A3;" for="contactos">Contactos por parte
                                    del cliente:</label>
                                <input class="form-control " type="text" name="contactos" />
                                <br></br>
                            </div>
                        </form>



                        <!-- <form class="form-inline"> -->
                        <div class="col-sm-6 ">
                            <label class="well well-sm" style="background-color:#99A1A3;" for="procedencia"> Procedencia del proyecto</label>
                            <select name="procedencia" class="form-control " style="background-color: rgb(200, 202, 202);">
                                <option selected>Seleccionar el origen IP/gobierno</option>
                                <option value="Operaciones">Operaciones</option>
                                <option value="Implemetancion">Implementación</option>
                                <option value="Gobierno">Gobierno</option>
                                <option value="Mesa de ayuda">Mesa de ayuda</option>
                                <option value="PMO">PMO</option>
                            </select>
                            <br></br>
                            <label class="well well-sm" style="background-color:#99A1A3;" for="nombreCliente">Nombre del
                                cliente:</label>
                            <input class="form-control" type="text" name="nombreCliente" />
                            <br></br>

                            <label class="well well-sm" style="background-color:#99A1A3;" for="ubi">Ubicación donde se
                                brinda el servicio:</label>
                            <input class="form-control " type="text" name="ubi" />
                            <br></br>
                        </div>



                        <div class="col-sm-8">
                            <div class="container">
                                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Editar contacto 1</button>
                                <div id="demo" class="collapse">
                                    <div class="form-group">
                                        <label for="nameformulario1">Nombre:</label>
                                        <input type="text" class="form-control " name="nameformulario1" class="col-sm-4">

                                        <label for="ac">Área/cargo:</label>
                                        <input type="text" class="form-control" name="area1">

                                        <label for="email">Correo electronico:</label>
                                        <input type="email" class="form-control" name="email1">

                                        <label for="num">Teléfono:</label>
                                        <input type="number" class="form-control" name="num1">




                                    </div>
                                </div>
                                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2">Editar contacto 2</button>
                                <div id="demo2" class="collapse">

                                    <div class="form-group">
                                        <label for="nameformulario2">Nombre:</label>
                                        <input type="text" class="form-control " name="nameformulario2" class="col-sm-4">

                                        <label for="ac">Área/cargo:</label>
                                        <input type="text" class="form-control" name="area2">

                                        <label for="email">Correo electronico:</label>
                                        <input type="email" class="form-control" name="email2">

                                        <label for="num">Teléfono:</label>
                                        <input type="number" class="form-control" name="num2">
                                    </div>



                                </div>
                                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo3">Agregar contacto</button>
                                <div id="demo3" class="collapse">
                                    <div class="form-group">
                                        <label for="nameformulario3">Nombre:</label>
                                        <input type="text" class="form-control " name="nameformulario3" class="col-sm-4">

                                        <label for="ac">Área/cargo:</label>
                                        <input type="text" class="form-control" name="ac">

                                        <label for="email">Correo electronico:</label>
                                        <input type="email" class="form-control" name="email">

                                        <label for="num">Teléfono:</label>
                                        <input type="number" class="form-control" name="num">
                                    </div>
                                </div>
                            </div>
                            <br></br>
                        </div>
                        <div class="container">
                            <div class="col-sm-6 ">

                                <label class="well well-sm" style="background-color:#99A1A3;" for="responsableComercial">Responsable
                                    comercial:</label>
                                <input class="form-control " name="responsableComercial" type="text" />
                                <br></br>
                            </div>

                            <div class="col-sm-6 ">
                                <label class="well well-sm" style="background-color: #99A1A3;" for="responsableOperativo">Responsable
                                    operativo:</label>
                                <input class="form-control 
                                " name="responsableOperativo" type="text" />
                                <br></br>
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <label>Subir Archivo SOW</label>
                            <input type="file" class="form-control">
                            <br></br>
                            <center><a href="miarchivo.pdf" class="btn btn-danger">Archivo SOW</a></center>
                            <br></br>
                        </div>
                        <div class="panel-body" style="background-color:#67AAD0">

                            <div class="col-sm-4">
                                <div class="panel">
                                    <div class="panel panel-heading" style="background-color: rgb(156, 158, 158); color:black">
                                        <strong>Alcance del proyecto</strong>
                                    </div>
                                    <div clas="panel panel-body">

                                        <textarea name="alcanceProyecto" class="form-control" rows="8"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="panel">
                                    <div class="panel panel-heading" style="background-color:rgb(156, 158, 158); color:black">
                                        <strong>Ampliación del alcance </strong>
                                    </div>
                                    <div clas="panel panel-body">

                                        <textarea name="ampliacionAlcance" class="form-control" rows="8"></textarea>
                                    </div>
                                </div>
                            </div>



                            <div class="col-sm-4">
                                <div class="panel">
                                    <div class="panel panel-heading" style="background-color: rgb(156, 158, 158); color:black">
                                        <strong3>Extras al alcance(servicio que no se cobrara)</strong>
                                    </div>
                                    <div clas="panel panel-body">

                                        <textarea name="extrasAlcance" class="form-control" rows="8"></textarea>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div>
                            <div class="col-sn-12" align="center">
                                <br></break>
                                <input type="submit" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>