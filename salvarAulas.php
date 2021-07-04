<?php

$id = $_POST["titulo"];
$id_trilha = $_POST["id_trilha"];

//Criando uma nova aula
$sql = 'insert into aulas (id, id_trilha, posicao, titulo, pontos, ativa, id_origem) 
values (NULL, ?, ?, ?, 0, true, ?);';
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("iisi", $id_trilha);
$sqlprep->execute();

header('location: FormAulas.php');