<!DOCTYPE html>
<html>
    <head>
       
        <title>PHP-POO Livro e Pessoa</title>
    </head>
    <body>
        <?php
            require_once 'Pessoa.php';
            require_once 'Livro.php';
            
            $p = new Pessoa("João Pedro", 25, true);
            $l = new Livro("PHP POO", "João Batista", 380, $p);
            
            $p->apresentarPessoa();
            $l->emprestarLivro($p);
            $l->detalhes();
            $l->devolverLivro($p);
            $l->detalhes();
            
        
        
        ?>
    </body>
</html>