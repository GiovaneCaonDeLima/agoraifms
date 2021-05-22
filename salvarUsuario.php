<?php 
	//pegar valores do formulário (indice do vetor eh igual ao atributo name no form)
    $perfil = $_POST["perfil"];
    $nome = $_POST["nome"];
	$email = $_POST["email"];
    $senhaa = $_POST["senha"];
	$senha_confirm = $_POST["senha2"];
    require_once('Conexao.php');

	if ($senhaa == $senha_confirm){
		$sql = "INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `perfil`, `pontos`) 
        VALUES (NULL, ?, ?, ?, ?, '0');";
		$sqlprep = $conexao->prepare($sql);
		$sqlprep->bind_param("ssss", $nome, $email, $senhaa, $perfil);            
		$sqlprep->execute();
		$msg = "Conta criada com sucesso";
	}else{
		$msg = "Falha ao criar a conta";
	}
    
?>
<?php header('location: FormLogin.php?msg='.$msg); ?>