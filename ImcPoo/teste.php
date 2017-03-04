<!DOCTYPE html>
<html>
    <!-- Autor: Maycon de Moraes, data 03/03/2017 -->
    <head>
        <meta charset="UTF-8">
        <title>Teste IMC - PHP</title>
    </head>
    <body>
        <?php
            require_once 'Pessoa.php';
            
            $pessoa = new Pessoa("João", 25, 1.83, 80, "M");
            //var_dump($pessoa);
            $imc = $pessoa->imc();
            echo "----->  " . $pessoa->tabelaImc($imc);
        
        ?>

    </body>
</html>