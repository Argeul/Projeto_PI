<?php
// Função para validar campos do aluno
function validarCamposAluno($campos)
{
    $mensagensErro = array();

    foreach ($campos as $nomeCampo => $valor) {
        $valor = trim($valor);
        if (empty($valor)) {
            $mensagensErro[] = "O campo $nomeCampo deve ser preenchido.";
        }
    }

    return $mensagensErro;
}

// Inicializar o array com os campos e seus respectivos valores
$campos = array(
    'nome' => isset($_POST['nome']) ? $_POST['nome'] : '',
    'email' => isset($_POST['email']) ? $_POST['email'] : '',
    'senha' => isset($_POST['senha']) ? $_POST['senha'] : '',
    'telefone' => isset($_POST['telefone']) ? $_POST['telefone'] : '',
);

$erros = array();

if (isset($_POST['cadastra-usuario'])) {
    $erros = validarCamposAluno($campos);

    // Fazer a validação do campo de telefone para aceitar somente números
    if (!empty($campos['telefone']) && !ctype_digit($campos['telefone'])) {
        $erros[] = "O campo telefone deve conter apenas números.";
    }

    if (empty($erros)) {
        // Se não houver erros, realizar o cadastro do usuário
        require "../includes/dados-conexao.inc.php";
        require "../includes/conectar.inc.php";
        require "../includes/criar-banco.inc.php";
        require "../includes/abrir-banco.inc.php";
        require "../includes/definir-charset.inc.php";
        require "../includes/criar-tabelas.inc.php";
        require "../includes/cadastrar-usuario.inc.php";
        require "../includes/desconectar.inc.php";
    
        // Define a variável de sessão para mostrar a mensagem de sucesso
        session_start();
        $_SESSION['cadastro_sucesso'] = true;
    
        // Redireciona o usuário para outra página (substitua "outra_pagina.php" pelo nome da sua outra página)
        header("Location: sucesso.php");
        exit; // Certifique-se de fazer um "exit" após o redirecionamento
    }
    
}
?>

<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Cadastro de usuário </title> 
  <link rel="stylesheet" href="../css/editar_cadastro.css">
</head> 

<body> 
  <h1 > Cadastrar usuário </h1>

  <form action="cadastro_usuario.php" method="post">
    <fieldset>
      <legend> Informe os dados</legend>
      
      <!-- Labels e inputs para os campos do formulário -->
      <label class="alinha"> Nome: </label>
      <input type="text" name="nome"> <br>

      <label class="alinha"> Email: </label>
      <input type="email" name="email"> <br>

      <label class="alinha"> Senha: </label>
      <input type="password" id="senha" name="senha">

      <label class="alinha">Telefone:</label>
      <input type="text" name="telefone">

      <button name="cadastra-usuario"> Cadastrar usuário </button>
    </fieldset>
  
    <?php
    // Exibir mensagens de erro, se houver
    if (!empty($erros)) {
        foreach ($erros as $erro) {
            echo "<p>$erro</p>";
        }
    }
    ?>
</body> 
</html>
