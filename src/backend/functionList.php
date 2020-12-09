<?php

    require ('db.php');

    $consulta = "SELECT * FROM pacientes";

    $con = mysqli_query($conection, $consulta);

?>