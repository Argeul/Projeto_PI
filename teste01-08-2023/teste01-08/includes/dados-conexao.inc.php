<?php
$servidor = "localhost";
$usuario  = "root";
$senha    = "";
$nomeDoBanco = "test2";

$conn = new mysqli($servidor, $usuario, $senha, $nomeDoBanco);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

 
 $nomeDaTabela1 = "espaco";
 $nomeDaTabela2 = "horario";
 $nomeDaTabela3 = "reservas";
 $nomeDaTabela4 = "usuario";
