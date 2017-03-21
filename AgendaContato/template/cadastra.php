<?php
    require_once '../classe/BancoDeDados.php';
    $bd = new BancoDeDados("localhost", "mdmdev", "root", "agenda");
    $bd->conexao();
    
    if(isset($_POST['nome'], $_POST['email'], $_POST['celular'], $_POST['telefone'], $_POST['endereco'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        
        echo 'Nome: '. $nome;
         echo 'Email: '. $email;
          echo 'Celular: '. $celular;
           echo 'Telefone: '. $telefone;
            echo 'Endereco: '. $endereco;
        
        $bd->insere("INSERT INTO contato(nome, email, celular, telefone, endereco)VALUES('$nome', '$email', '$celular', '$telefone', '$endereco');");
        $bd->fechaConexao();
        header("Location: agenda.php");
    }
    

?>
