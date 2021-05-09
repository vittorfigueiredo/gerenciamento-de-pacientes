<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/responsive.css">
    <link rel="stylesheet" href="./styles/main.css">
    <title>Login - Total Care</title>
</head>
<body>
    <div class="container">
        <!-- Imagem dos profissionais de saúde -->
        <img src="./images/profissionais.jpg" alt="medicos">
        <!-- Formulário do login -->
        <form action="./backend/functionLogin.php" method="POST">
        <h1 class="titulo">Total Care</h1>

        <?php
            if (isset($_SESSION['nao_autenticado'])):
        ?>
        <!-- menssagem de email ou senha errados -->
        <p>ERRO: E-mail ou senha inválidos!</p>
        <?php
            endif;
            unset($_SESSION['nao_autenticado']);
        ?>

            <div class="email">
                <label>E-mail:</label>
                <input type="text" placeholder="Informe seu e-mail" name="email" required>
            </div>
            <div class="senha">
                <label>Senha:</label>
                <input type="password" placeholder="Informe sua senha" name="senha" required>
            </div>
            <!-- Botaão para realizar o login -->
            <button type="submit">Entrar</button>
            <div class="links" >
                <!-- Botaão para recuperar a senha -->
                <a href="forgetPassword.php">Esqueceu a senha?</a>
                <span>|</span>
                <!-- Botaão para ir para a página de cadastro -->
                <a href="register.php">Cadastre-se</a>
            </div>
        </form>
    </div>
    <footer class="footer">Created by <a href="https://www.linkedin.com/in/vitorfigueiredopb/">Vitor Figueiredo</a> ;D</footer>
</body>
</html>