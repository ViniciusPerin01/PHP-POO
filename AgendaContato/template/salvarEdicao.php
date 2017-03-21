<?php
    require_once '../classe/BancoDeDados.php';
    $bd = new BancoDeDados("localhost", "mdmdev", "root", "agenda");
    $bd->conexao();
    
    if(isset($_POST['valorId'], $_POST['nome'], $_POST['email'], $_POST['celular'], $_POST['telefone'], $_POST['endereco'])){
        $id = $_POST['valorId'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        
        $bd->atualiza("UPDATE contato SET nome = '$nome', email = '$email', celular = '$celular', telefone = '$telefone', endereco = '$endereco' WHERE id = '$id';");
        $bd->fechaConexao();
        header("Location: agenda.php");
    }
    

?>
