<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css">
    <title>Registrar Paciente</title>
</head>
<body>

    <header>
        <h1 class="titulo">Registrar Paciente</h1>

        <nav>
            <a href="#">Cadastrar Paciente</a>
            <a href="#">Listar Pacientes</a>
            <a href="#">Logout</a>
        </nav>
    </header>

    <div class="container">

        <form action="form" method="POST">
            <div class="nome">
                <label>Nome:</label>
                <input type="text">
            </div>
            <div class="idade">
                <label>Idade:</label>
                <input type="number">
            </div>
            <div class="peso">
                <label>Peso:</label>
                <input type="number">
            </div>
            <div class="altura">
                <label>Altura:</label>
                <input type="number">
            </div>

            
            <button type="submit"> <?php echo "<a href='login.php'>Registrar</a>"; ?> </button>
            
        </form>
    </div>

    <footer>©Copyright 2020 - Todos os direitos reservados!</footer>

</body>
</html>