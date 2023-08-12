
<link rel="stylesheet" href="../css/editar_cadastro.css">

<fieldset>
  <form action="cadastro_reserva.php" method="post">
    <label class="alinha">Data:</label>
    <input type="date" name="data_reserva"> <br>

    <label class="alinha">Usuário:</label>
    <select name="usuario">
      <option value="">Selecione o usuário</option>
      <?php
      require "../includes/dados-conexao.inc.php";
      require "../includes/conectar.inc.php";
      require "../includes/abrir-banco.inc.php";

      $query = "SELECT id, nome FROM usuario";
      $resultado = mysqli_query($conexao, $query);

      if ($resultado) {
        while ($row = mysqli_fetch_assoc($resultado)) {
          echo '<option value="' . $row['id'] . '">' . $row['nome'] . '</option>';
        }
      }
      require "../includes/desconectar.inc.php";
      ?>
    </select> <br>

    <label class="alinha">Espaço:</label>
    <select name="espaco">
      <option value="">Selecione o espaço</option>
      <?php
      require "../includes/dados-conexao.inc.php";
      require "../includes/conectar.inc.php";
      require "../includes/abrir-banco.inc.php";

      $query = "SELECT id, nome FROM espaco";
      $resultado = mysqli_query($conexao, $query);

      if ($resultado) {
        while ($row = mysqli_fetch_assoc($resultado)) {
          echo '<option value="' . $row['id'] . '">' . $row['nome'] . '</option>';
        }
      }
      require "../includes/desconectar.inc.php";
      ?>
    </select>

    <button type="submit" name="cadastrar-reserva">Cadastrar reserva</button> <!-- Adiciona o botão do tipo "submit" -->
  </form>
</fieldset>

<?php
require "../includes/dados-conexao.inc.php";
require "../includes/conectar.inc.php";
require "../includes/criar-banco.inc.php";
require "../includes/abrir-banco.inc.php";
require "../includes/definir-charset.inc.php";
require "../includes/criar-tabelas.inc.php";

if(isset($_POST['cadastrar-reserva']))
{
  require "../includes/cadastrar-reserva.inc.php";

    session_start();
    $_SESSION['cadastro_sucesso'] = true;

    // Redireciona o usuário para outra página (substitua "outra_pagina.php" pelo nome da sua outra página)
    header("Location: sucesso.php");
    exit; // Certifique-se de fazer um "exit" após o redirecionamento
}

require "../includes/desconectar.inc.php";
?>
