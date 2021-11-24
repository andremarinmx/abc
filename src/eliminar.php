<?php
    include("conexion.php");
    $id = $_GET["id"];
    echo $id;
    $result = mysqli_query($con, "DELETE FROM usuarios WHERE Ctrl = '$id'");
    if($result){
        echo "<script>alert('Registro eliminado correctamente'); window.location='../templates/consulta.php';</script>;";
        
    }
    else{
        echo "<script>alert('Error de eliminación');</script>;";
    }
?>