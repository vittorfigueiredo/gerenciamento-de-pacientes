<?php

require ('./backend/verificaLogin.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="./styles/responsive.css">
    <link rel="stylesheet" href="./styles/main.css">
    <title>Total Care - Cadastrar paciente</title>
</head>
<body>

    <header>
        
        <nav>
            <a href="#">Cadastrar Paciente</a>
            <a href="#">Listar Pacientes</a>
            <a href="#">Logout</a>
        </nav>
    </header>
    
    <div class="container">
        
        <form action="./backend/pacientRegister.php" method="POST">
            <h1 class="titulo">Cadastrar paciente</h1>
            <div class="nome">
                <label>Nome:</label>
                <input type="text" name="nome" placeholder="Informe seu nome" required>
            </div>
            <div class="idade">
                <label>Idade:</label>
                <input type="text" name="idade" placeholder="Informe sua idade" required>
            </div>
            <div class="peso">
                <label>Peso:</label>
                <input type="text" name="peso" placeholder="Exemplo: 65" required>
            </div>
            <div class="altura">
                <label>Altura:</label>
                <input type="text" name="altura" placeholder="Exemplo: 1.75" required>
            </div>

            
            <button type="submit">Cadastrar</button>
            
        </form>
    </div>

    <footer>©Copyright 2020 - Todos os direitos reservados!</footer>

</body>
</html>