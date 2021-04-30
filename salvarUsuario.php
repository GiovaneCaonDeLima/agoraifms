<?php 
	//pegar valores do formulário (indice do vetor eh igual ao atributo name no form)
    $perfil = $_POST["perfil"];
    $nome = $_POST["nome"];
	$email = $_POST["email"];
    $senha = $_POST["senha"];
    require_once('Conexao.php');

		$sql = "INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `perfil`, `pontos`) 
        VALUES (NULL, ?, ?, ?, ?, '0');";
		$sqlprep = $conexao->prepare($sql);
		$sqlprep->bind_param("ssss", $nome, $email, $senha, $perfil);            
		$sqlprep->execute();
		$msgOk = "Conta criada com sucesso.";
    
?>
<?php header('location: FormLogin.php?msgOk='.$msgOk); ?>