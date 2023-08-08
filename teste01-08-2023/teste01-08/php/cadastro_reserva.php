<fieldset>
  <legend>Módulo 3 - cadastro de reservas...</legend>
  <form action="processar_reserva.php" method="post"> <!-- Adiciona o formulário e define o script para processar os dados -->
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
