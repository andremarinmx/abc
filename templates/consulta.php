<?php

	include("../src/conexion.php");

  $result = mysqli_query($con, "SELECT * FROM usuarios");
?>

<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/consulta.css">
    <title>Base de Datos</title>
  </head>
  <body>
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
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
          <tbody>
            <?php
              if (is_array($result) || is_object($result)) {
                foreach ($result as $data) {
            ?>
              <tr>
                <td><?= $data['Ctrl'];?></td>
                <td><?= $data['Nombre'];?></td>
                <td><?= $data['ApellidoPaterno'];?></td>
                <td><?= $data['ApellidoMaterno'];?></td>
                <td><a id="editar" href="editar.php?id=<?= $data['Ctrl'];?>">Editar</a></td>
                <td><a id="eliminar" href="../src/eliminar.php?id=<?= $data['Ctrl'];?>">Eliminar</a></td>
                </tr>
            <?php
                }
              }
            ?>
        </tbody>
      </table>
    </div>
  </body>
</html>