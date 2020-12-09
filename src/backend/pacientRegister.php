<?php
    // Verifica e inclui o arquivo que faz a conexão com o banco de dados, caso nao houver, retorna um erro faltal
    require 'db.php';

    // Função para registrar um usuario
    function registerPacient($conection) {
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        (float)$peso = $_POST["peso"];
        (float)$altura = $_POST["altura"];

        $imc = ($peso / pow($altura,  2));
        $imc = number_format(ltrim($imc), 1,'.','.');

        // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
        if (empty($_POST['nome']) OR empty($_POST['idade'] OR empty($_POST['peso']) OR empty($_POST['altura']))) {
            echo '<br/><br/><br/><center><img class="alert" src="https://www.monetcasadefestas.com.br/wp-content/uploads/2020/02/icone-aten%C3%A7%C3%A3o-png.png">';
            echo "<center><p>Você deixou campos em branco, corrija-os para continuar!</p><center/><br/>";
            echo "<center><p>Voltando a página de cadastro...</p><center/><br/>";
            // Redireciona dentro de 5s para a página de cadastro se a condição acima for verdadeira
            header('refresh: 5; ../register.php');
        } else {
            // Querry armazenha o comando para inserir os dados no banco de dados
            $query = "INSERT INTO `pacientes` (`id`, `nome`, `idade`, `peso`, `altura`, `imc`) VALUES (NULL, '$nome', '$idade', '$peso', '$altura', '$imc')";
            // Envia o comando salvo em query para o banco de dados
            mysqli_query($conection, $query);

            
        }
    }
    // Chama a função
    registerPacient($conection);
?>