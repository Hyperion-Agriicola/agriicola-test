<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AGRIICOLA</title>
</head>

<body class="bg-light">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

    <?php  
        include('navbar.php');
    ?>


    <div class="container">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="">
                <h1>Panel de ayuda</h1>
                <h4 class="text-success mt-4 mb-2 ">Preguntas frecuentes</h4>
                <div class="accordion" id="accordionExample">

                    <div class="card">
                        <div class="card-header" id="questionOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-decoration-none text-muted col-lg-12" type="button" data-toggle="collapse" data-target="#answerOne" aria-expanded="true" aria-controls="answerOne" id="boto">
                                    ¿Cómo recupero mi contraseña?
                                </button>
                            </h2>
                            <div id="answerOne" class="collapse" aria-labelledby="questionOne" data-parent="#accordionExample">
                                <div class="card-body bg-white">
                                    Acceda al registro, y de clic sobre el enlace <b>Recupérala aquí</b>, mostrará la página en la que tenemos que ingresar la nueva contraseña.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="questionTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-decoration-none text-muted col-lg-12" type="button" data-toggle="collapse" data-target="#answerTwo" aria-expanded="true" aria-controls="answerTwo">
                                    ¿Cómo puedo cambiar mi contraseña?
                                </button>
                            </h2>
                            <div id="answerTwo" class="collapse" aria-labelledby="questionTwo" data-parent="#accordionExample">
                                <div class="card-body bg-white">
                                    Para cambiar la contraseña es necesario iniciar sesión. En la página principal, de clic en <b>Editar cuenta</b>,en la nueva página hay un formulario para poder editar los campos donde puede editar su contraseña. Una vez que haya realizado los cambios deseados seleccione <b>Guardar</b>.
                                </div>
                            </div>
                        </div>
                    </div>
                       

                <h4 class="text-success mt-4 mb-2 ">Cultivos</h4>
                <div class="accordion" id="accordionExample">
                
                    <div class="card">
                        <div class="card-header" id="questionSix">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-decoration-none text-muted col-lg-12" type="button" data-toggle="collapse" data-target="#answerSix" aria-expanded="true" aria-controls="answerSix">
                                    ¿Cómo puedo visualizar los cultivos registrados?
                                </button>
                            </h2>
                            <div id="answerSix" class="collapse" aria-labelledby="questionSix" data-parent="#accordionExample">
                                <div class="card-body bg-white">
                                    En la página principal, aparece la sección <b>Mis cultivos</b> donde se le mostrarán todos los cultivos registrados.
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header" id="questionSeven">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-decoration-none text-muted col-lg-12" type="button" data-toggle="collapse" data-target="#answerSeven" aria-expanded="true" aria-controls="answerSeven">
                                    Si considero que un registro de cultivo ya no es necesario ¿puedo eliminarlo?
                                </button>
                            </h2>
                            <div id="answerSeven" class="collapse" aria-labelledby="questionSeven" data-parent="#accordionExample">
                                <div class="card-body bg-white">
                                    Es posible eliminar un cultivo si lo desea. Para ello, en la sección de <b>Mis cultivos</b> dentro de la página principal, debe seleccionar el ícono localizado en la parte superior derecha del cultivo representado con una <b>x</b> y aceptar en el mensaje de confirmación.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="questionEight">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-decoration-none text-muted col-lg-12" type="button" data-toggle="collapse" data-target="#answerEight" aria-expanded="true" aria-controls="answerEight">
                                    Al registrar un cultivo me equivoqué en el ingreso de los datos ¿cómo puedo modificarlo?
                                </button>
                            </h2>
                            <div id="answerEight" class="collapse" aria-labelledby="questionEight" data-parent="#accordionExample">
                                <div class="card-body bg-white">
                                    En la sección <b>Mis cultivos</b> dentro de la página principal, seleccione el cultivo que desea modificar, en la nueva página, seleccione el ícono de editar representado con lápiz que se encuentra en la parte superior derecha. Se mostrará un formulario con los datos registrados del cultivo, actualice los campos que desee y de clic en <b>Guardar</b>.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="questionSeventeen">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-decoration-none text-muted col-lg-12" type="button" data-toggle="collapse" data-target="#answerSeventeen" aria-expanded="true" aria-controls="answerSeventeen">
                                    Necesito saber cuáles son las fechas o eventos importantes en relación a mi cultivo ¿dónde puedo consultarlos?
                                </button>
                            </h2>
                            <div id="answerSeventeen" class="collapse" aria-labelledby="questionSeventeen" data-parent="#accordionExample">
                                <div class="card-body bg-white">
                                    En la página principal, en la sección <b>Mis cultivos</b>, seleccione el nombre del cultivo del que desea ver los eventos. Dentro de la nueva página seleccione <b>Seguimiento</b>. Posteriormente, seleccione <b>Calendario</b>, de esta manera podrá ver un calendario donde se muestran todas las fechas o eventos referentes al cultivo seleccionado.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="questionTwentytwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-decoration-none text-muted col-lg-12" type="button" data-toggle="collapse" data-target="#answerTwentytwo" aria-expanded="true" aria-controls="answerTwentytwo">
                                    ¿Dónde puedo ver el resumen en relación a mi cultivo?
                                </button>
                            </h2>
                            <div id="answerTwentytwo" class="collapse" aria-labelledby="questionTwentytwo" data-parent="#accordionExample">
                                <div class="card-body bg-white">
                                    Debe de encontrarse en la página pricipal, en la sección <b>Mis cultivos</b> seleccione el cultivo correspondiente. En la nueva página seleccione <b>Seguimiento</b>, al cargar la nueva página seleccione <b>Resumen</b> y a continuación le aparecerá una sección con un resumen del cultivo seleccionado.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="text-success mt-4 mb-2">Suelos</h4>
                <div class="accordion" id="accordionExample">
                    
                    <div class="card">
                        <div class="card-header" id="questionThirteen">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-decoration-none text-muted col-lg-12" type="button" data-toggle="collapse" data-target="#answerThirteen" aria-expanded="true" aria-controls="answerThirteen">
                                    ¿Cómo puedo visualizar los suelos registrados de mis cultivos?
                                </button>
                            </h2>
                            <div id="answerThirteen" class="collapse" aria-labelledby="questionThirteen" data-parent="#accordionExample">
                                <div class="card-body bg-white">
                                    En la página principal, dentro de la sección <b>Mis cultivos</b> seleccione el cultivo del que desea visualizar los suelos, dentro de la opción <b>Datos</b> se mostrarán los datos del cultivo, del suelo y de agroquímicos. Seleccione <b>Datos del suelo</b>. 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="questionSixteen">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-decoration-none text-muted col-lg-12" type="button" data-toggle="collapse" data-target="#answerSixteen" aria-expanded="true" aria-controls="answerSixteen">
                                    La infraestructura del suelo ha sido mejorada ¿tengo que eliminar el registro?
                                </button>
                            </h2>
                            <div id="answerSixteen" class="collapse" aria-labelledby="questionSixteen" data-parent="#accordionExample">
                                <div class="card-body bg-white">
                                    No, no es necesario eliminar el registro, bastará con actualizarlo. Para ello, en la sección de <b>Mis cultivos</b> dentro de la página principal, seleccione el cultivo donde desea modificar el suelo. Seleccione <b>Editar</b>. Modifique los datos necesarios y seleccione <b>Guardar</b>.
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="text-success mt-4 mb-2">Agroquímicos</h4>
                <div class="accordion" id="accordionExample">

                    
                    <div class="card">
                        <div class="card-header" id="questionTwentyone">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-decoration-none text-muted col-lg-12" type="button" data-toggle="collapse" data-target="#answerTwentyone" aria-expanded="true" aria-controls="answerTwentyone">
                                    ¿Cómo puedo editar un agroquímico?
                                </button>
                            </h2>
                            <div id="answerTwentyone" class="collapse" aria-labelledby="questionTwentyone" data-parent="#accordionExample">
                                <div class="card-body bg-white">
                                    En la página principal, dentro de la sección de <b>Mis cultivos</b>, seleccione el cultivo donde desea actualizar los agroquímicos. En la nueva página se mostrarán los datos del cultivo, seleccione los datos de agroquímicos y posteriormente el ícono del lápiz, dentro del formulario realice las modificaciones deseadas y seleccione <b>Guardar</b>.
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="card">
                        <div class="card-header" id="questionTwentythree">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-decoration-none text-muted col-lg-12" type="button" data-toggle="collapse" data-target="#answerTwentythree" aria-expanded="true" aria-controls="answerTwentythree">
                                    ¿Cómo puedo agregar un nuevo agroquímico?
                                </button>
                            </h2>
                            <div id="answerTwentythree" class="collapse" aria-labelledby="questionTwentythree" data-parent="#accordionExample">
                                <div class="card-body bg-white">
                                    En la página principal, dentro de la sección de <b>Mis cultivos</b>, seleccione el cultivo donde desea agregar los agroquímicos. En la nueva página se mostrarán los datos del cultivo, seleccione los datos de agroquímicos y posteriormente <b>Editar</b>, dentro del formulario llene los datos y seleccione <b>Guardar</b>.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---->

                <h4 class="text-success mt-4 mb-2">Gastos</h4>
                <div class="accordion mb-5" id="accordionExample">
            
                    <div class="card">
                        <div class="card-header" id="questionTwentyfour">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-decoration-none text-muted col-lg-12" type="button" data-toggle="collapse" data-target="#answerTwentyfour" aria-expanded="true" aria-controls="answerTwentyfour">
                                    ¿Cómo puedo visualizar los gastos registrados de un cultivo? 
                                </button>
                            </h2>
                            <div id="answerTwentyfour" class="collapse" aria-labelledby="questionTwentyfour" data-parent="#accordionExample">
                                <div class="card-body bg-white">
                                    En la página principal, dentro de la sección de <b>Mis cultivos</b>, seleccione el cultivo del que desea visualizar los gastos. En la nueva página, seleccione <b>Gastos</b>. Se mostrarán todos los gastos registrados del cultivo seleccionado
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="questionTwentyfive">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-decoration-none text-muted col-lg-12" type="button" data-toggle="collapse" data-target="#answerTwentyfive" aria-expanded="true" aria-controls="answerTwentyfive">
                                    ¿Cómo puedo registrar un nuevo gasto?
                                </button>
                            </h2>
                            <div id="answerTwentyfive" class="collapse" aria-labelledby="questionTwentyfive" data-parent="#accordionExample">
                                <div class="card-body bg-white">
                                    En la página principal, dentro de la sección de <b>Mis cultivos</b>, seleccione el cultivo donde desea agregar un gasto. En la nueva página seleccione <b>Gastos</b>, seleccione el ícono <b>+</b> en la parte de la derecha. Se mostrará un formulario, llene los campos y seleccione <b>Guardar</b>.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="questionTwentysix">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-decoration-none text-muted col-lg-12" type="button" data-toggle="collapse" data-target="#answerTwentysix" aria-expanded="true" aria-controls="answerTwentysix">
                                    ¿Cómo puedo eliminar los gastos registrados anteriormente? 
                                </button>
                            </h2>
                            <div id="answerTwentysix" class="collapse" aria-labelledby="questionTwentysix" data-parent="#accordionExample">
                                <div class="card-body bg-white">
                                    En la sección de <b>Mis cultivos</b> dentro de la página principal, seleccione el cultivo donde desea eliminar un gasto. En la nueva página seleccione <b>Gastos</b> y posteriormente seleccione el ícono localizado en la parte superior derecha del cultivo representado con una <b>x</b> y aceptar en el mensaje de confirmación.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row mb-4">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <h6>¿No encuentras lo que estás buscando? Envíanos un email a <h6 class="text-success">hyperionagriicola@gmail.com</h6>
                        </h6> 
                    </div>   
                </div>

            </div>

            

        </div>

        


    </div>


            
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>