<?php
    include('bd.php');

    mysqli_query($conexion2, "insert into tbdocente(NOMBRED, APELLIDO_PD, APELLIDO_MD,  DIRECCIOND, TELEFONOD, EMAILD, CODIGO_P, KEY_PROF)
    values ('$_REQUEST[NOMBRED]','$_REQUEST[APELLIDO_PD]','$_REQUEST[APELLIDO_MD]','$_REQUEST[DIRECCIOND]','$_REQUEST[TELEFONOD]','$_REQUEST[EMAILD]','$_REQUEST[COD_P]','$_REQUEST[KEY]')") or die("Problemas en el select".mysqli_error($conexion2));   
    mysqli_close($conexion2);

    header("location:regis_al_do.php");
?>