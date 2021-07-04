<?php
require_once('Conexao.php');
require_once('Cabeçalho.php'); // session_start()

// Receber dados preenchidos por POST 
$email = $_POST['email'];
$senha = $_POST['senha'];
$perfil = $_POST['perfil'];

printf("%s\n", $email);
printf("%s\n", $senha);
printf("%s\n", $perfil);

$sql = "select * from usuario where email=? and senha=? and perfil=?";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("sss", $email, $senha, $perfil);
$sqlprep->execute();
$resultadoSql = $sqlprep->get_result();
$vetorRegistros = $resultadoSql->fetch_all(MYSQLI_ASSOC);
// pega todos os registros e coloca em um vetor de registros

if (count($vetorRegistros) > 0) { // se tem algo, usuario ok
  require_once('Conexao.php');
  
  foreach ($vetorRegistros as $Registro) :
    $_SESSION["id"] = $Registro["id"];
    $_SESSION["nome"] = $Registro["nome"];
    $_SESSION["email"] = $Registro["email"];
    $_SESSION["senha"] = $Registro["senha"];
    $_SESSION["perfil"] = $Registro["perfil"];
    $_SESSION["pontos"] = $Registro["pontos"];
  endforeach;

  header("location: TrilhasDeAprendizagem.php"); //Redirecionamento login sucesso
} else {
  $_SESSION["erroLogin"] = "Login ou senha inválidos."; //Redirecionamento login falhou, Retorna com erroLogin na Sessão
  header("location: FormLogin.php");
} 
?>
