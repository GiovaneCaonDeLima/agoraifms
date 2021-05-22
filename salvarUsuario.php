<?php 
	//pegar valores do formulário (indice do vetor eh igual ao atributo name no form)
    $perfil = $_POST["perfil"];
    $nome = $_POST["nome"];
	$email = $_POST["email"];
    $senhaa = $_POST["senha"];
	$senha_confirm = $_POST["senha2"];
    require_once('Conexao.php');

	$sql = "select * from usuario where email=?";
	$sqlprep = $conexao->prepare($sql);
	$sqlprep->bind_param("s", $email);
	$sqlprep->execute();
	$resultadoSql = $sqlprep->get_result();
	$vetorRegistros = $resultadoSql->fetch_all(MYSQLI_ASSOC);
	
	if(count($vetorRegistros)>0) { // se tem algo, email já cadastrado
		$status = "1";
	}else{
		if ($senhaa == $senha_confirm){
			$sql = "INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `perfil`, `pontos`) 
			VALUES (NULL, ?, ?, ?, ?, '0');";
			$sqlprep = $conexao->prepare($sql);
			$sqlprep->bind_param("ssss", $nome, $email, $senhaa, $perfil);            
			$sqlprep->execute();
			$status = "2";
		}
		else{
			$status = "3";
		}
	}

?>
<?php header('location: FormLogin.php?status='.$status); ?>