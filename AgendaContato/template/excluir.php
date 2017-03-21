<?php
    require_once '../classe/BancoDeDados.php';
    $bd = new BancoDeDados("localhost", "mdmdev", "root", "agenda");
    $bd->conexao();
    
    if(isset($_POST['valorId'])){
        $id = $_POST['valorId'];
        $bd->deleta("DELETE FROM contato WHERE id = $id;");
        $bd->fechaConexao();
        header("Location: agenda.php");
    }
    

?>
