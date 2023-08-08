<?php
 $turno         = $_POST['turno'];
 $turno         = $_POST['turno'];
 $hoario         = $_POST['horario'];
 $turno         = $conexao->escape_string($turno);
 

 $sql = "INSERT $nomeDaTabela2 VALUES(
                 null,
                '$turno'
                        )";


 $conexao->query($sql) or die($conexao->error);

 echo "<p> Dados do horario cadastrados com sucesso no banco de dados. </p>";


