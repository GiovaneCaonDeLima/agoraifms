<?php 
	//pegar id da trilha que será removida
	$id = $_POST["id"];
	
    require_once('Conexao.php');

	$sql = "delete from trilhas where id = ?";
	$sqlprep = $conexao->prepare($sql);
	$sqlprep->bind_param("i", $id);            
	$sqlprep->execute();
    
?>
<?php header('location: FormTrilha.php'); ?>