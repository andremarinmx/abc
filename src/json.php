<?php
    include("conexion.php");
    $result = mysqli_query($con, "SELECT * FROM usuarios");
    $datos = mysqli_fetch_all($result, MYSQLI_ASSOC);
    if(!empty($datos)){
        echo json_encode($datos);
    }
    else{
        echo json_encode(null);
    }
?>