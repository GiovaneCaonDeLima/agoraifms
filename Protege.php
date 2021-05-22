<?php
    require_once('Cabeçalho.php'); // abrir o session_start()

    // Se o perfil logado não é de professor, ou se não estiver logado 
    if($_SESSION["perfil"] != "professor" || isset($_SESSION["email"])==false) {
        // redirecionar para a home 
        header("location: TrilhasDeAprendizagem.php");
    }

?>