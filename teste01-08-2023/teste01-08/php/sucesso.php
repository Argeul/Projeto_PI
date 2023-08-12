<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Resposta do Cadastro</title>
    <link rel="stylesheet" href="../css/sucesso.css">
</head>
<body>
    <div class="container">
        <h1>Resposta do Cadastro</h1>
        <?php
        if (isset($_SESSION['cadastro_sucesso']) && $_SESSION['cadastro_sucesso']) {
            echo "<p class='success-message'>Cadastro realizado com sucesso!</p>";
            unset($_SESSION['cadastro_sucesso']); // Limpa a variável de sessão
        } else {
            echo "<p class='error-message'>Não foi possível realizar o cadastro.</p>";
        }
        ?>
    </div>
</body>
</html>
