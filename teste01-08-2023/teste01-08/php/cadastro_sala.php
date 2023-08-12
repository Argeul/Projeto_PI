<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Banco de dados com PHP  </title> 
  <link rel="stylesheet" href="../css/editar_cadastro.css">
</head>

<body>

<h1> Cadastrar Espaço </h1>

  <form action="cadastro_sala.php" method="post">
   <fieldset>
    <legend> Módulo 1 - cadastro de espacos </legend>

    <label class="alinha"> Nome: </label>
      <input type="text" name="nomeEspaco"> <br>

    <label class="alinha"> Descrição: </label>
    <input type="text" name="descricao"> <br>

    <label class="alinha"> Capacidade: </label>
    <input type="number" name="capacidade"> <br>


    <button name="cadastra-espaco"> Cadastrar espacos </button>
   </fieldset>
    
  
  <?php
   require "../includes/dados-conexao.inc.php";
   require "../includes/conectar.inc.php";
   require "../includes/criar-banco.inc.php";
   require "../includes/abrir-banco.inc.php";
   require "../includes/definir-charset.inc.php";
   require "../includes/criar-tabelas.inc.php";

   if(isset($_POST['cadastra-espaco']))
{
    require "../includes/cadastrar-espaco.inc.php";

    session_start();
    $_SESSION['cadastro_sucesso'] = true;

    // Redireciona o usuário para outra página (substitua "outra_pagina.php" pelo nome da sua outra página)
    header("Location: sucesso.php");
    exit; // Certifique-se de fazer um "exit" após o redirecionamento
}

  require "../includes/desconectar.inc.php";  
  ?>
</body> 
</html> 