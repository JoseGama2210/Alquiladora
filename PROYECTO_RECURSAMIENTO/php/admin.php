<?php

if(!empty($_POST["reg"])){

    if(empty($_POST["usuario"]) and empty($_POST["password"])){
        echo '<div class="alert">No se a completado el registro</div>';
    }
    else{
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        $sql=$con->query("select * from admin where NOMBRE='$usuario' and CONTRASEÑA='$password'");
        if($datos=$sql->fetch_object()){
            header("location: ../views/admin.php");
        }else
        {
            echo '<div class="alert">Acceso denegado</div>';
        }
    }

}
else{


}
?>