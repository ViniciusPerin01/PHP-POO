<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculadora IMC - PHP</title>
    </head>
    <body>
         <form action="index.php" method="post">
            Nome:  <input type="text" name="nome" /><br />
            Idade: <input type="numeric" name="idade" /><br />
            Altura: <input type="text" name="altura" /><br />
            Peso: <input type="text" name="peso" /><br />
            <input type="radio" name="sexo" value="M"> Masculino<br>
            <input type="radio" name="sexo" value="F"> Feminino<br>
            <input type="submit" name="submit" value="Calcular IMC" />
        </form>
        <?php
            require_once 'Pessoa.php';
        
        if(isset($_POST['nome'], $_POST['idade'], $_POST['altura'], $_POST['peso'],$_POST['sexo'])){
            // Instancioando o objeto pessoa
            $p = new Pessoa($_POST['nome'], $_POST['idade'], $_POST['altura'], $_POST['peso'],$_POST['sexo'] );
            //var_dump($p);
            $imc = $p->imc();
            echo $p->tabelaImc($imc);
        }else{
            echo 'Preencha todos os campos!';
        }
        
        
        /*
          echo $_POST['nome'];
          echo $_POST['idade'];
          echo $_POST['altura'];
          echo $_POST['peso'];
          echo $_POST['sexo'];
        
        */
        ?>
    </body>
</html>