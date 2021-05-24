<?php
//pegar valores do formulário (indice do vetor eh igual ao atributo name no form)
$id = $_POST["id"];
$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];
//$ativa = $_POST["ativa"];
require_once('Conexao.php');

//upload do arquivo com data e hora no nome do arquivo
date_default_timezone_set('America/Campo_Grande'); // definir fuso horario
$dataEHora = date('dmYHi'); // pegar data e hora do servidor
$nome_arquivo = "fotos/" . $dataEHora . $_FILES["foto"]["name"]; // definir pasta e nome do arquivo no servidor
$nome_arquivo_tmp = $_FILES["foto"]["tmp_name"]; // pegar nome do arquivo temporario no servidor
$msgErroArquivo = ""; // definir msg de erro vazia
if(move_uploaded_file($nome_arquivo_tmp, $nome_arquivo)==false){ // se ocorrer erro...
    $msgErroArquivo = "Arquivo de foto não pode ser enviado."; // define msg de erro
}
//fim upload do arquivo

if ($id == 0) { // se o id for 0 eh um novo registro (insert)
    $sql = 'insert into trilhas (id, titulo, foto, descricao, ativa) values (NULL, ?, ?, ?, false);';
    $sqlprep = $conexao->prepare($sql);
    $sqlprep->bind_param("sss", $titulo, $nome_arquivo, $descricao);
    $sqlprep->execute();
} else { // ser o id nao for 0 eh um atualizacao (update)
    $sql = "update trilhas set titulo=?, foto=?, descricao=? where id=?";
    $sqlprep = $conexao->prepare($sql);
    $sqlprep->bind_param("sssi", $titulo, $nome_arquivo, $descricao, $id);
    $sqlprep->execute();
}

?>
<?php header('location: FormTrilha.php'); ?>