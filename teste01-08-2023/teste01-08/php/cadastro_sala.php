<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Banco de dados com PHP  </title> 
  <link rel="stylesheet" href="../css/editar_cadastro2.css">
</head>

<body> 

<div class="topnav" id="myTopnav">
<a href="inicio.php" class="active">Inicio</a>
  <a href="#news">News</a>
  <a href="#contact">contato</a>
  
  <div class="dropdown">
    <button class="dropbtn">Cadastros 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="cadastro_usuario.php"  > Cadastro de usuario </a>
      <a href="cadastro_sala.php">Cadastro de Sala</a>
      <a href="#">Cadastro de reserva</a>
    </div>
    
  </div> 
  <a href="login.php">Sair</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>


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
    }

    if(isset($_POST['cadastra-horario']))
    {
    require "../includes/cadastrar-horario.inc.php";
    }

    if(isset($_POST['cadastra-usuario']))
    {
    require "../includes/cadastrar-usuario.inc.php";
    }



  require "../includes/desconectar.inc.php";  
  ?>
</body> 
</html> 