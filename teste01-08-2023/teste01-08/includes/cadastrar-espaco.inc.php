<?php
 $nome          = $_POST['nomeEspaco'];
 $descricao     = $_POST['descricao'];
 $capacidade    = $_POST['capacidade'];

 $nome         = $conexao->escape_string($nome);
 $descricao    = $conexao->escape_string($descricao);
 $capacidade   = $conexao->escape_string($capacidade);

 $sql = "INSERT $nomeDaTabela1 VALUES(
                 null,
                '$nome', 
                '$descricao',
                 $capacidade
                            )";


 $conexao->query($sql) or die($conexao->error);

 echo "<p> Dados do espaço cadastrados com sucesso no banco de dados. </p>";


