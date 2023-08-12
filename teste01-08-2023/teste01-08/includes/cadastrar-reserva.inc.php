<?php
$data = $_POST['data_reserva'];
$usuario = $_POST['usuario'];
$espaco = $_POST['espaco'];

// Validando os campos antes da inserção
if (empty($data) || empty($usuario) || empty($espaco)) {
  die("<p>Preencha todos os campos obrigatórios.</p>");
}

// Escapando os valores para prevenir SQL injection
$data = $conexao->escape_string($data);
$usuario = $conexao->escape_string($usuario);
$espaco = $conexao->escape_string($espaco);

$sql = "INSERT INTO $nomeDaTabela3 (data_reserva, usuario, espaco) VALUES ('$data', '$usuario', '$espaco')";

if ($conexao->query($sql)) {
  echo "<p>Dados da reserva cadastrados com sucesso no banco de dados.</p>";
} else {
  echo "<p>Erro ao cadastrar a reserva: " . $conexao->error . "</p>";
}


