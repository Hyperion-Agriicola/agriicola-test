<?php
    header('Content-Type: application/json');
    $pdo = new PDO("mysql:dbname=agriicola;host=localhost","root","");

    $accion=(isset($_GET['accion']))?$_GET['accion']:'leer';

    switch($accion){
        case 'agregar':
            //Agrega un evento a la BD
            $sql = $pdo->prepare("INSERT INTO eventos(id_u, id_cultivo, titulo, descripcion, inicio, fin, text_color, color) VALUES(:id_u, :id_cultivo, :title, :descripcion, :start, :end, :textColor, :color)");

            $resultado = $sql->execute(array(
                "id_u" => '10',
                "id_cultivo" => '1',
                "title" => $_POST['title'],
                "descripcion" => $_POST['descripcion'],
                "start" => $_POST['start'],
                "end" => $_POST['end'],
                "textColor" => $_POST['textColor'],
                "color" => $_POST['color']
            ));
            echo json_encode($resultado);
            break;
        case 'modificar':
            //Modifica el evento en BD
            $sql = $pdo->prepare("UPDATE eventos SET
                titulo=:title,
                descripcion=:descripcion,
                inicio=:start,
                fin=:end,
                text_color=:textColor,
                color=:color
                WHERE id_evento=:id_evento
            ");

            $resultado = $sql->execute(array(
                "id_evento" => $_POST['id_evento'],
                "title" => $_POST['title'],
                "descripcion" => $_POST['descripcion'],
                "start" => $_POST['start'],
                "end" => $_POST['end'],
                "textColor" => $_POST['textColor'],
                "color" => $_POST['color']
            ));
            echo json_encode($resultado);
            break;
        case 'eliminar':
            $resultado = false;
            
            if(isset($_POST['id_evento'])){

                $sql = $pdo->prepare("DELETE FROM eventos WHERE id_evento=:id_evento");
                $resultado = $sql->execute(array("id_evento"=>$_POST['id_evento']));
            }
            echo json_encode($resultado);

            break;    
        default:
            //Consulta los eventos en la BD, y los convierte a json para mostrar en calendario
            $sql = $pdo->prepare("SELECT id_u, id_cultivo, id_evento, titulo as 'title', descripcion, inicio as 'start', fin as 'end', color, text_color as 'textColor' FROM eventos WHERE id_u=10 AND id_cultivo=1");
            $sql->execute();
            $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($resultado);  
            break;      
    }


    

    /*Al mismo tiempo de insertar un agroquimico, insertar la aplicacion y el nombre compercial como title,
        algunos parametros como descripcion, y las fechas.    
    */

?>