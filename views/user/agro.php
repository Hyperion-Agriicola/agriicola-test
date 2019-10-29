<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../css/main.css">
        <link rel="stylesheet" href="../../css/animate.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
        <title>AGRIICOLA</title>
    </head>


    <body class="bg-white">

        <?php
            include('navbar.php')
        ?>
        

        <header class="bg-light p-4" >
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <a href="dashboard.php" class="close" >
                            <img src="../../img/svg/close-24px.svg" class="close" alt="">
                        </a>   
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <img src="../../img/svg/add.svg" style="height:60px;">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="text-muted">
                                Nuevo registro
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="container pt-4">
        <div class="row col-sm-12 col-md-12 col-lg-12 text-center mb-4">
                <span class="col-sm-2 col-md-3 col-lg-3"></span>

                <span class="col-4 col-sm-3 col-md-2 col-lg-2 text-center text-decoration-none">
                    <a href="cultivos.php">
                    <img src="../../img/svg/grain.svg" alt="" style="height:35px"><p class="text-muted">Cultivo</p>
                    </a>
                </span>
               
                <span class="col-4 col-sm-3 col-md-2 col-lg-2 text-center text-decoration-none">
                    <a href="suelo.php">
                    <img src="../../img/svg/growing-plant-green.svg" alt="" style="height:35px; color: green;" ><p class="text-muted">Suelo</p>
                    </a>
                </span>

                <span class="col-4 col-sm-3 col-md-2 col-lg-2 text-center text-decoration-none">
                    <a href="agro.php">
                    <img src="../../img/svg/plant-sample-green.svg" alt="" style="height:60px"><p class="text-muted">Agroquímico</p>
                    </a>
                </span>

                <span class="col-sm-2 col-md-3 col-lg-3"></span>
            </div>

            <form action="" method="post">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputAplicacion">Aplicación</label>
                            <select class="form-control" id="inputAplicacion" name="aplicacion">
                                <option>Nutriente</option>
                                <option>Enfermedad</option>
                                <option>Plaga</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputNombreComercial">Nombre comercial</label>
                            <input type="text" placeholder="Nutriplant" class="form-control" id="inputNombreComercial" name="nombre_comercial">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="inputPrecio">Precio</label>
                            <input type="number" placeholder="700" class="form-control" id="inputPrecio" name="precio">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="inputMoneda">Moneda</label>
                            <select class="form-control" id="inputMoneda" name="moneda">
                                <option>Pesos</option>
                                <option>Euro </option>
                                <option>Soles</option>
                                <option>Dolar</option>
                            </select>
                        </div>
                     </div>

                     <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="inputCantidad">Cantidad</label>
                            <input type="number" placeholder="700" class="form-control" id="inputCantidad" name="cantidad">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="inputUnidad">Unidad</label>
                            <select class="form-control" id="inputUnidad" name="unidad">
                                <option>Mililitros</option>
                                <option>Litros</option>
                            </select>
                        </div>
                     </div>


                     <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="inputDosis">Dosis</label>
                            <input type="number" placeholder="700" class="form-control" id="inputDosis" name="dosis">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="inputTiempo">Tiempo</label>
                            <select class="form-control" id="inputTiempo" name="tiempo">
                                <option>Semanas</option>
                                <option>Dias</option>
                            </select>
                        </div>
                     </div>

                    
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                        <!--Si el campo aplicacion es Nutriente-->
                            <div id="inputTipo">
                                <label for="inputTipo">Tipo</label>
                                <select class="form-control" name="nutricion">
                                    <option>Micronutrientes</option>
                                    <option>Macronutrientes</option>
                                </select>
                            </div>
                        <!--Si el campo aplicacion es Enfermedad-->   
                            <div id="inputCausaE">
                                <label for="inputTipo">Causa</label>
                                <select class="form-control" name="enfermedad">
                                    <option>Bacteria</option>
                                    <option>Hongo</option>
                                </select>
                            </div>
                        <!--Si el campo aplicacion es Plaga-->    
                            <div id="inputCausaP">
                                <label for="inputTipo">Causa</label>
                                <select class="form-control" name="plaga">
                                    <option>Gusanito</option>
                                    <option>Mosquita</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputFrecuencia">Frecuencia</label>
                            <select class="form-control" id="inputFrecuencia" name="frecuencia">
                                <option>Diario</option>
                                <option>Cada 2 dias</option>
                                <option>Cada 3 dias</option>
                            </select>
                        </div>
                     </div>

                     <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="inputFechaInicio">Fecha de inicio</label>
                            <input type="date" placeholder="Fecha" class="form-control" id="inputFechaInicio" name="fecha_inicio">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="inputFechaFinal">Fecha de fin</label>
                            <input type="date" placeholder="Fecha" class="form-control" id="inputFechaFinal" name="fecha_fin">
                        </div>
                     </div>

                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputExistencia">Existencia</label>
                            <input type="number" placeholder=10 class="form-control" id="inputExistencia" name="existencia">
                        </div>
                    </div>

                    </div>
                </div>
            </form>       
        </main>
        <div class="text-center pt-3">
                <a href="suelo_art.php" class="btn btn-success" role="button" style="width:230px;"><i class="fas fa-save"></i> Guardar</a>
            </div>
        <footer class="footer bg-white col-lg-12 col-md-4 col-sm-12" style="position:relative;">
            <div class="container text-center">
                <span class="text-muted">Todos los derechos reservados 2019
                    &copy; Desarrollado por Hyperion</span>
            </div>
        </footer>

        

        <script src="../../js/jquery-3.4.1.min.js"></script>
        <script src="../../js/jquery-ui.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="../../js/main.js"></script>
    </body>
</html>    
    