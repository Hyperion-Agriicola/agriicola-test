<?php
ob_start();
include('database.php');

class Functions{
    public function registerUser($userName, $userlastName, $phoneNumber,
        $userEmail, $userCompany, $userPass1, $userPass2) {
            $connection = new Database();

        if ($userPass1 == $userPass2) {
            $insert = "INSERT INTO users(nombre, apellido, telefono, correo, 
            acceso, empresa, fecha_registro) VALUES ('$userName', '$userlastName', 
            '$phoneNumber', '$userEmail', sha1('$userPass2'), '$userCompany', now())";
            
            $result = mysqli_query($connection, $insert);

            if ($result) {
                echo "
                    <div class='container mt-4'>
                        <div class='alert alert-success' role='alert'>
                            ¡Su cuenta ha sido registrada! Es hora de iniciar sesión
                        </div>
                    </div>";
            }
        } else {
            echo "
            <div class='container mt-4'>
                <div class='alert alert-danger' role='alert'>
                    Las contraseñas no coinciden, intente de nuevo
                </div>
            </div>
            ";
         }
    }

    public function userLogin($email, $password){
        $conexion = new Database();
        $query = "SELECT * FROM users WHERE correo = '$email' AND acceso = sha1('$password')";
        $row = $conexion->query($query);
        $user = $row->fetch_array();
        $checkUser = mysqli_num_rows($row);

        if($checkUser == 0){
            echo "
            <div class='container mt-4'>
                <div class='alert alert-danger' role='alert'>
                   Correo o contraseña incorrectos, intente de nuevo
                </div>
            </div>
            ";
        }else{
            session_start();
            $_SESSION['correo'] = $user['correo'];
            header('Location: views/user/dashboard.php');
            
        }
    }

    public function getUserProfile($email){
        $conexion = new Database();
        $query = "SELECT * FROM users WHERE correo = '$email'";

        $result = $conexion->query($query);
        $resultSet = array();
        if($result){

            while($row = $result->fetch_array()){
                $resultSet[0] = $row['nombre'];
                $resultSet[1] = $row['apellido'];
                $resultSet[2] = $row['telefono'];
                $resultSet[3] = $row['correo'];
                $resultSet[4] = $row['acceso'];
                $resultSet[5] = $row['empresa'];
                $resultSet[6] = $row['fecha_registro'];
            }

            return $resultSet;
        }

    }
    

    public function getCultivos(){

        $conexion = new Database();
        $query = "SELECT * FROM cultivos;";
        $result = $conexion->query($query);
        while($row = $result->fetch_array()){
            echo " <option value='" . $row['id_cultivo'] . "'>" . $row['nombre_predio'] . "</option>";
        }
    }

    public function getUserId($email){

        $conexion = new Database();
        $query = "SELECT id_u FROM users WHERE correo = '$email'";
        $result = $conexion->query($query);
        $id="";
        while($row = $result->fetch_array()){
           $id= $row['id_u'];
        }
        return $id;
    }



    public function insertNatural($type, $infra, $watering, $ph, $salinity, $conduc,
    $organic, $zinc, $nitra, $phosphore, $pota, $manga, $calc, $copper, $azu,
    $bor, $magne,$oxygen){

        $conexion = new Database();

        $query = "INSERT INTO suelo_natural VALUES (NULL, '".$type."', ".$salinity.", '".$watering."', '".$infra."' , ".$ph.", ".$conduc.", 1, ".$organic.", ".$nitra.", ".$pota.", ".$calc.", ".$azu.", ".$magne.", ".$zinc.", ".$phosphore.", ".$manga.", ".$copper.", ".$bor.",".$oxygen.", now());";

        $result = $conexion->query($query);

        if(!$result){
            die($query);
        }else{
            echo "
                <div class='container mt-4'>
                    <div class='alert alert-success' role='alert'>
                        El registro del suelo se realizo correctamente
                    </div>
                </div>";
        }

    }

    public function insertAgro($id_cultivo, $origen, $nom_comer, $cantidad, $unidad, $frecuencia,
    $periodo_ini, $periodo_fin, $precio, $moneda, $dosis, $tiempo, $tipo, $existencia, $id_u){

        $conexion = new Database();

        $query = "INSERT INTO agroquimicos VALUES (NULL, ".$id_cultivo.", '".$origen."', '".$nom_comer."', ".
        $cantidad." , '".$unidad."', '".$frecuencia."','".$periodo_ini."', '".$periodo_fin."', ".$precio.", '".
        $moneda."', ".$dosis.", '".$tiempo."', '".$tipo."', ".$existencia.", ".$id_u.", now());";

        $result = $conexion->query($query);
        
        if (!$result) {
            die($query);
        }else{
            echo "
                <div class='container mt-4'>
                    <div class='alert alert-success' role='alert'>
                        El registro del suelo se realizo correctamente
                    </div>
                </div>";
        }
    }

    public function insertArtificial($sustr, $infra, $watering){
        $conexion = new Database();

        $query = "INSERT INTO suelo_artificial VALUES (NULL, '" . $sustr . "', '" . $watering . "', '" . $infra . "' ,now(), 1);";

        $result = $conexion->query($query);
    
        if (!$result) {
            die($query);
        }else{
            echo "
                <div class='container mt-4'>
                    <div class='alert alert-success' role='alert'>
                        El registro del suelo se realizo correctamente
                    </div>
                </div>";
        }
    }
}

ob_end_flush();