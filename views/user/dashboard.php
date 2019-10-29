
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
            include('navbar.php');

            if (isset($_GET['cultivos'])) {
                include('cultivos.php');
            } else if (isset($_GET['suelos'])) {
                include('suelos.php');
            } else if (isset($_GET['agroquimicos'])) {
                include('agroquimicos.php');
                //echo "Agroquímicos";
            } else if (isset($_GET['gastos'])) {
                include('gastos.php');
                //echo "Gastos";
            } else if (isset($_GET['seguimiento'])) {
                echo "Seguimiento";
            } else if (isset($_GET['natural'])) {
                include('suelo_natural.php');
            } else if (isset($_GET['artificial'])) {
                include('suelo_artificial.php');
            } else if (isset($_GET['userProfile'])) {
                include('profile.php');
            } else {
                include('profile.php');
            }
            ?>

        <div class="container">
            <div class="text-center text-success">
                <h1 class="mt-4">Mis cultivos</h1>
            </div>
            <div class="row p-3">
                <a href="cultivos.php" class="btn btn-success ml-auto rounded-circle" role="button"><i class="fas fa-plus"></i></a>

            <!-- Paste here your fuck code! -->
            </div>
            
            <div class="row">
                <div class="col-md-4 col-sm-12 pb-4">  
                    <div class="card bg-light p-1 shadow p-0 mb-0 bg-light" style="Border-Radius: 10px;"> 
                        <div class="card-header bg-light">
                            <img src="../../img/svg/grain.svg" style="height:35px" class="mb-2" alt="">
                            <a href="" data-toggle="modal" data-target="#modalEliminar">
                                <img src="../../img/svg/close-24px.svg" class="close" alt="">
                            </a>
                            <br>
                            <a href="select_cultivo.php"  class="text-decoration-none text-body">
                                <h4>Nombre del predio</h4>
                        </div>

                        <div class="card-body pt-3">Esta es información del cultivo, esta es más información
                        </div>
                            </a>    
                    </div>      
                </div>

                <div class="col-md-4 col-sm-12 pb-4">  
                    <div class="card bg-light p-1 shadow p-0 mb-0 bg-light" style="Border-Radius: 10px;"> 
                        <div class="card-header bg-light">
                            <img src="../../img/svg/grain.svg" style="height:35px" class="mb-2" alt="">
                            <a href="" data-toggle="modal" data-target="#modalEliminar">
                                <img src="../../img/svg/close-24px.svg" class="close" alt="">
                            </a>
                            <br>
                            <a href="select_cultivo.php"  class="text-decoration-none text-body">
                                <h4>Nombre del predio</h4>
                        </div>

                        <div class="card-body pt-3">Esta es información del cultivo, esta es más información
                        </div>
                            </a>    
                    </div>      
                </div>

                <div class="col-md-4 col-sm-12 pb-4">  
                    <div class="card bg-light p-1 shadow p-0 mb-0 bg-light" style="Border-Radius: 10px;"> 
                        <div class="card-header bg-light">
                            <img src="../../img/svg/grain.svg" style="height:35px" class="mb-2" alt="">
                            <a href="" data-toggle="modal" data-target="#modalEliminar">
                                <img src="../../img/svg/close-24px.svg" class="close" alt="">
                            </a>
                            <br>
                            <a href="select_cultivo.php" class="text-decoration-none text-body">
                                <h4>Nombre del predio</h4>
                        </div>

                        <div class="card-body pt-3">Esta es información del cultivo, esta es más información
                        </div>
                            </a>    
                    </div>      
                </div>
            </div>       
        </div>          

         
        <footer class="footer bg-white col-lg-12 col-md-4 col-sm-12" style="position:relative;">
            <div class="container text-center">
                <span class="text-muted">Todos los derechos reservados 2019
                    &copy; Desarrollado por Hyperion</span>
            </div>
        </footer>

        <!--Modales-->
    <!--Modal eliminar--> 
    <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¡Atención!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Estas seguro de eliminar este cultivo?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    

        <script src="../../js/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="../../js/main.js"></script>
    </body>

    </html>
