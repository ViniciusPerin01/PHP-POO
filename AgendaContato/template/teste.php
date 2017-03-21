<?php

    require_once '../classe/BancoDeDados.php';
    
    $bd = new BancoDeDados("localhost", "mdmdev", "root", "agenda");
    
    $bd->conexao();
    echo '<BR />';
    
    
    //$bd->insere("INSERT INTO contato(nome, email, celular, telefone, endereco)
    //VALUES ('Jorge Pedro Junior','jpj@hotmail.com','(41) 9876-6644', '(41) 3333-8888','Rua João Maranhão, numero 10. Jõao Pessoa');");
    
    echo '<BR/>';
    
    //$bd->atualiza("UPDATE contato SET nome = 'Maria do Rosario', email = 'maria@gmail.com', celular = '(41) 9876-1234', telefone = '(41) 3432-1234', endereco = 'Rua da Maria' WHERE id = '11';");
    
    echo '<BR />';
    
   //$bd->deleta("DELETE FROM contato WHERE id = '11';");
   
   $bd->fechaConexao();
    
    var_dump($bd);
    echo '<BR />';