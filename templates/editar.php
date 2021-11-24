<?php
    include("../src/conexion.php");
    $id = $_GET["id"];
    $result = mysqli_query($con, "SELECT * FROM usuarios WHERE Ctrl = '$id'");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/editar.css">
        <title>Base de Datos</title>
    </head>
    <body>
        <form action="../src/process_edit.php" method="POST">
            <nav>
                <ul> 	
                    <li>
                        <a href="../index.html"> Inicio</a>
                    </li>
                    <li>
                        <a href="registro.html">Registro</a>
                    </li>
                    <li>
                        <a href="consulta.php"> Consultas</a>
                    </li>
                </ul>
            </nav>
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>Matrícula</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if (is_array($result) || is_object($result)) {
                                foreach ($result as $data) {
                        ?>
                            <tr>
                                <td><?= $data['Ctrl'];?><input class="atributos"  name="Ctrl" maxlength="8" type="hidden" value="<?= $data['Ctrl'];?>"></td>
                                <td><input class="atributos" name="Nombre" maxlength="30" type="text" value="<?= $data['Nombre'];?>"></td>
                                <td><input class="atributos" name="ApellidoPaterno" maxlength="30" type="text" value="<?= $data['ApellidoPaterno'];?>"></td>
                                <td><input class="atributos" name="ApellidoMaterno" maxlength="30" type="text" value="<?= $data['ApellidoMaterno'];?>"></td>
                            </tr>
                            <input id="submit" type="submit" value="Editar">
                        <?php 
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>  
        </form>
    </body>
</html>