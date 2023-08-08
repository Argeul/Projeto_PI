<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Resposta do Cadastro</title>
</head>
<body>
    <h1>Resposta do Cadastro</h1>
    <?php
    if (isset($_SESSION['cadastro_sucesso']) && $_SESSION['cadastro_sucesso']) {
        echo "<p>Usuário cadastrado com sucesso!</p>";
        // Após exibir a mensagem, limpe a variável de sessão para que ela não apareça novamente na próxima vez que o usuário acessar a página
        unset($_SESSION['cadastro_sucesso']);
    } else {
        echo "<p>Não foi possível cadastrar o usuário.</p>";
    }
    ?>
</body>
</html>
