<?php
    // Verifica e inclui o arquivo que faz a conexão com o banco de dados, caso nao houver, retorna um erro faltal
    require 'db.php';

    // Função para registrar um usuario
    function register($conection) {
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $senhaConfirm = $_POST["senhaConfirm"];

        // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
        if (empty($_POST['email']) OR empty($_POST['senha'] OR empty($_POST['senhaConfirm']))) {
            echo '<br/><br/><br/><center><img class="alert" src="https://www.monetcasadefestas.com.br/wp-content/uploads/2020/02/icone-aten%C3%A7%C3%A3o-png.png">';
            echo "<center><p>Você deixou campos em branco, corrija-os para continuar!</p><center/><br/>";
            echo "<center><p>Voltando a página de cadastro...</p><center/><br/>";
            // Redireciona dentro de 5s para a página de cadastro se a condição acima for verdadeira
            header('refresh: 5; ../register.php');
        } else {
            // Verifica se a senha é igual a confirmção da senha
            if ($senha == $senhaConfirm) {
                // Querry armazenha o comando para inserir os dados no banco de dados
                $query = "INSERT INTO usuarios (id, email, senha) VALUES (null, '$email', md5('$senha'))";
                // Envia o comando salvo em query para o banco de dados
                mysqli_query($conection, $query);

                // Verifica se não houve nehum problema ao inserir no banco
                if (mysqli_affected_rows($conection) > 0) {
                    echo "Usuario inserido com sucesso!<br/>";
                    echo '<a href="../login.php">Ir para o login</a>';
                    // Redireciona dentro de 5s para a página de login se a condição acima for verdadeira
                    header('Location: ../login.php');
                } else {
                    // Mostra mensagem de erro se a condição for falsa
                    echo "Erro ao inserir usuario!";
                }
                // Fecha o comando 'mysli_close'
                mysqli_close($conection);
            } else {
                // Mostra mensagem informando que as senhas digitadas não conferem
                echo "AS SENHAS NÃO CONFEREM!";
            }
        }
    }
    // Chama a função
    register($conection);
?>