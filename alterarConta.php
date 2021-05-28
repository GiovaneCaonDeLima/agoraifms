<?php 
require_once('Conexao.php');

$id = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$senha_confirm = $_POST["senha2"];

if ($senhaa == $senha_confirm){
    $sql = "update usuario set nome=?, email=?, senha=? where id=?";
    $sqlprep = $conexao->prepare($sql);
    $sqlprep->bind_param("sssi", $nome, $email, $senha, $id);            
    $sqlprep->execute();
    $msg = "1";
}
else{
    $msg = "2";
}

header('location: Conta.php?msg='.$msg);
?>