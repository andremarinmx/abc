<?php
    include("conexion.php");
    $ctrl = $_POST["Ctrl"];
    $nombre = $_POST["Nombre"];
    $apellidoPaterno = $_POST["ApellidoPaterno"];
    $apellidoMaterno = $_POST["ApellidoMaterno"];
    $actualizar = "UPDATE usuarios SET Ctrl='$ctrl', Nombre='$nombre', ApellidoPaterno='$apellidoPaterno', ApellidoMaterno='$apellidoMaterno' WHERE Ctrl='$ctrl'";
    $result = mysqli_query($con, $actualizar);
    if($result){
        echo "<script>alert('Registro se ha editado correctamente'); window.location='../templates/consulta.php';</script>;";
        
    }
    else{
        echo "<script>alert('Error de edición');</script>;";
    }
?>