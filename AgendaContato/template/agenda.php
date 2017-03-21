<html>
  <head>
    <title>Agenda de Contatos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="agenda.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="agenda.php">Agenda</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="index.html">Página Inicial</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="section section-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 contenteditable="true" class="text-center">Agenda de Contatos</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <a class="btn btn-block btn-lg btn-primary" id="btnCadastrar" href="#painelNovoUsuario">Novo Contato</a>
          </div>
        </div>
      </div>
    </div>
    <!-- aqui vem o formulario-->
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 contenteditable="true" class="text-center text-danger">Contatos Cadastrados</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th>Nome</th>
                  <th>e-mail</th>
                  <th>Celular</th>
                  <th>Telefone</th>
                  <th>Endereço</th>
                </tr>
              </thead>
              <tbody>
                <?php
                require_once '../classe/BancoDeDados.php';
                $bd = new BancoDeDados("localhost", "mdmdev", "root", "agenda");
                $bd->conexao();
                $sql = "SELECT * FROM contato;";
                $sth = $bd->conexao->prepare($sql);
                $sth->execute();
                
                while ($row = $sth->fetch(PDO::FETCH_ASSOC)){
                  echo '<tr>';
                  echo '<td>' . $row["id"] . '</td>';
                  echo '<td>' .  $row["nome"] . '</td>';
                  echo '<td>' .  $row["email"] . '</td>';
                  echo '<td>' .  $row["celular"] . '</td>';
                  echo '<td>' .  $row["telefone"] .  '</td>';
                  echo '<td>' .  $row["endereco"] . '</td>';
                  echo '<td>';
                  //echo '<a name="btnEditar" class="btn btn-block btn-success" id="' . $row["id"] . '">Editar</a>';
                  echo '<form action="editar.php" method="post">';
                  echo '<input type="hidden" name="valorId" value="' . $row["id"] . ' ">';
                  echo '<input type="submit" class="btn btn-block btn-info" value="Editar">';
                  echo '</form>';
                  echo '</td>';
                  echo '<td>';
                  echo '<form action="excluir.php" method="post">';
                  echo '<input type="hidden" name="valorId" value="' . $row["id"] . ' ">';
                  echo '<input type="submit" class="btn btn-block btn-danger" value="Excluir">';
                  echo '</form>';
                  //echo '<a action="excluir.php" method="post" name="btnExcluir" class="btn btn-block btn-danger" id="' . $row["id"] . '">Excluir</a>';
                  echo '</td>';
                  echo '</tr>';
                }
                $bd->fechaConexao();
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <hr>
          </div>
        </div>
      </div>
    </div>
    <div class="section" name="painelNovoUsuario">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title" id="painelNovoUsuario">Novo Usuário</h3>
              </div>
              <div class="panel-body">
                <div class="section">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-11">
                        <form action="cadastra.php" method="post" class="form-horizontal" role="form">
                          <div class="form-group" id="formCadastro">
                            <div class="col-sm-2">
                              <label for="lblnome" class="control-label" id="btnSalvar">Nome</label>
                            </div>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="lblnome" name="nome" placeholder="Nome do Contato">
                            </div>
                            <div class="col-sm-2">
                              <label for="lblEmail" class="control-label">Email</label>
                            </div>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="lblEmail" name="email" placeholder="seuemail@seudominio.com">
                            </div>
                            <div class="col-sm-2">
                              <label for="lblCelular" class="control-label">Celular</label>
                            </div>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="lblCelular" name="celular" placeholder="(DD) 1234-5678">
                            </div>
                            <div class="col-sm-2">
                              <label for="lblTelefone" class="control-label">Telefone</label>
                            </div>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="lblTelefone" name="telefone" placeholder="(DD) 1234-5678">
                            </div>
                            <div class="col-sm-2">
                              <label for="lblEndereco" class="control-label">Endereço</label>
                            </div>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="lblEndereco" name="endereco" placeholder="Rua exemplo, 123, cidade.">
                            </div>
                            <div class="col-sm-offset-6 col-sm-10">
                              <br>
                              <input type="submit"  class="btn btn-primary" value="Salvar Contato">
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <footer class="section">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="text-primary">Agenda em PHP</h1>
            <p class="text-primary">Criado por Maycon de Moraes, para demonstrar orientação a
              <br>objetos com php, conexão com mysql e criação de templates com pigento.
              <br>demonstração feita para o grupo de estudos da UNICESUMAR Curitiba.</p>
          </div>
          <div class="col-sm-6">
            
            <div class="row">
              <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
              </div>
            </div>
            <a href="https://www.linkedin.com/in/maycon-de-moraes-a76240116" target="_blank" class="btn btn-block btn-lg btn-li btn-primary"><i class="fa fa-linkedin left"></i>Linkedin</a>
            <a href="https://github.com/mayconmoraes-dm/PHP-POO" target="_blank" class="btn btn-block btn-lg btn-li btn-primary"><i class="fa fa-linkedin left"></i>GitHub</a>
            <a href="https://unicesumarctba.slack.com" target="_blank" class="btn btn-block btn-lg btn-li btn-primary"><i class="fa fa-linkedin left"></i>Slack</a>
          </div>
          
        </div>
      </div>
    </footer>

</body>
</html>