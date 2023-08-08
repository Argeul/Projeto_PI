<?php
 //aqui, vamos criar as quatro tabelas usadas no modelo

 /* tabela de espaço  */
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela1(
    `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` text,
  `capacidade` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;";

/* tabela de turno  */
  $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela2 (
    `id` int NOT NULL AUTO_INCREMENT,
    `turno` enum('MATUTINO','VESPERTINO','NOTURNO') NOT NULL DEFAULT 'MATUTINO',
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;";


 /* tabela de reserva  */
  $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela3 (
    `id` int NOT NULL AUTO_INCREMENT,
    `espaco_id` int NOT NULL,
    `horario_id` int NOT NULL,
    `usuario_id` int NOT NULL,
    `data` date NOT NULL,
    PRIMARY KEY (`id`,`espaco_id`,`horario_id`,`usuario_id`),
    KEY `fk_espaco_has_horario_horario1_idx` (`horario_id`),
    KEY `fk_espaco_has_horario_espaco1_idx` (`espaco_id`),
    KEY `fk_reservas_usuario1_idx` (`usuario_id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;";


//usuario
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela4 (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;";
  


 $conexao->query($sql) or die($conexao->error);