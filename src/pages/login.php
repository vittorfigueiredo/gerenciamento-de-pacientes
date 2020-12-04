<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Login</title>
</head>
<body>

    <header>
        <h1 class="titulo">Fazer Login</h1>
    </header>

    <div class="container">

        <form action="">
            <div class="email">
                <label>Email:</label>
                <input type="text">
            </div>
            <div class="senha">
                <label>Senha:</label>
                <input type="password">
            </div>

            <button type="button"> <?php echo "<a href='register.php'>Registrar</a>"; ?> </button>
        </form>

    </div>

    <footer>©Copyright 2020 - Todos os direitos reservados!</footer>

</body>
</html>