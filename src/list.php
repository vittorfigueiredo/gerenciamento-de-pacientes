<?php

require ('./backend/verificaLogin.php');
require ('./backend/functionList.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="./styles/responsive.css">
    <link rel="stylesheet" href="./styles/main.css">
    <title>Lista de Pacientes</title>
</head>
<body>

    <header>
        <h1 class="titulo">Lista de Pacientes</h1>

        <nav class="menu">
            <a href="pacientRegister.php">Cadastrar Paciente</a>
            <a href="list.php">Listar Pacientes</a>
            <a href="./backend/logout.php">Logout</a>
        </nav>
    </header>

    <div class="container">

        <div class="list-pacients">
            <table>
                <tr>
                    
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Peso</th>
                    <th>Altura</th>
                    <th>IMC</th>

                </tr>
                <?php while($dado = $con->fetch_array()) { ?>
                <tr>

                    <td><?php echo $dado['nome']; ?></td>
                    <td><?php echo $dado['idade']; ?></td>
                    <td><?php echo $dado['peso']; ?></td>
                    <td><?php echo $dado['altura']; ?></td>
                    <td><?php echo $dado['imc']; ?></td>

                </tr>
                <?php } ?>

            </table>
        </div>    

    </div>

    <footer>©Copyright 2020 - Todos os direitos reservados!</footer>

</body>

</html>