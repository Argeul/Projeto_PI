<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/inicio.css">
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="inicio.php" class="active">Inicio</a>
  <a href="inicio.php">News</a>
  <a href="#contact">contato</a>
  
  <div class="dropdown">
    <button class="dropbtn">Cadastros 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="cadastro_usuario.php"> Cadastro de usuario </a>
      <a href="cadastro_sala.php">Cadastro de Sala</a>
      <a href="#">Cadastro de reserva</a>
    </div>
    
  </div> 
  <a href="login.php">Sair</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div style="padding-left:16px">
  <h2>Bem vindo</h2>
  <p>Ao nosso sistema de reserva de salas</p>
  <p>Hover over the dropdown button to open the dropdown menu.</p>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
