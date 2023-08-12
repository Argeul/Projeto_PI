<?php
   require "../includes/dados-conexao.inc.php";
   require "../includes/conectar.inc.php";
   require "../includes/criar-banco.inc.php";
   require "../includes/abrir-banco.inc.php";
   require "../includes/definir-charset.inc.php";
   require "../includes/criar-tabelas.inc.php";


    if(isset($_POST['cadastra-usuario']))
    {
    require "../includes/cadastrar-usuario.inc.php";
    session_start();
    $_SESSION['cadastro_sucesso'] = true;

    // Redireciona o usuário para outra página (substitua "outra_pagina.php" pelo nome da sua outra página)
    header("Location: sucesso.php");
    exit; // Certifique-se de fazer um "exit" após o redirecionamento
    }



  require "../includes/desconectar.inc.php";  
  ?>

<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Cadastro de usuário </title> 
  <link rel="stylesheet" href="../css/editar_cadastro.css">
</head> 

<body> 
  <h1 > Cadastrar usuário </h1>

  <form action="cadastro_usuario.php" method="post">
    <fieldset>
      <legend> Informe os dados</legend>
      
      <!-- Labels e inputs para os campos do formulário -->
      <label class="alinha"> Nome: </label>
      <input type="text" name="nome" required> <br>

      <label class="alinha"> Email: </label>
      <input type="email" name="email" required> <br>

      <label class="alinha"> Senha: </label>
      <input type="password" id="senha" name="senha" required>

      <label class="alinha">Telefone:</label>
      <input type="text" pattern="\(\d{2}\)\d{5}\d{4}" name="telefone" 
      required placeholder = "(xx)xxxxxxxxx">

      <button name="cadastra-usuario"> Cadastrar usuário </button>
    </fieldset>
  
    <?php
    // Exibir mensagens de erro, se houver
    if (!empty($erros)) {
        foreach ($erros as $erro) {
            echo "<p>$erro</p>";
        }
    }
    ?>
</body> 
</html>
