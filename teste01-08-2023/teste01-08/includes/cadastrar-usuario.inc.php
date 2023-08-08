<?php
 $nome     = $_POST['nome'];
 $email    = $_POST['email'];
 $senha    = $_POST['senha'];
 $telefone = $_POST['telefone'];

 $nome      = $conexao->escape_string($nome);
 $email     = $conexao->escape_string($email);
 $senha     = $conexao->escape_string($senha);
 $telefone  = $conexao->escape_string($telefone);
 

 $sql = "INSERT $nomeDaTabela4 VALUES(
                 null,
                '$nome', 
                '$email',
                 '$senha',
                 '$telefone'
                            )";


 $conexao->query($sql) or die($conexao->error);

 echo "<p> Dados do usuario cadastrados com sucesso no banco de dados. </p>";


