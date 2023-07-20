<?php

$conexion = mysqli_connect("localhost", "root", "", "benjamin") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into usuario(nombre,email) values 
                       ('$_REQUEST[nombre]','$_REQUEST[mail]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El usuario fue dado de alta.";
 ?>