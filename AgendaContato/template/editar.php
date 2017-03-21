<html>
  
  <head>
    <title>Agenda de Contatos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
    rel="stylesheet" type="text/css">
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
            <h1 class="text-primary">Edição</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- aqui vem o formulario-->
    <div class="section" name="painelNovoUsuario">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title" id="painelNovoUsuario">Editar Contato</h3>
              </div>
              <div class="panel-body">
                <div class="section">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-11">
                          <?php
                          require_once '../classe/BancoDeDados.php';
                        if(isset($_POST['valorId'])){
                        $id = $_POST['valorId'];
                        
                        $bd = new BancoDeDados("localhost", "mdmdev", "root", "agenda");
                        $bd->conexao();
                        $sql = "SELECT * FROM contato where id = '$id';";
                        $sth = $bd->conexao->prepare($sql);
                        $sth->execute();
                
                        $row = $sth->fetch(PDO::FETCH_ASSOC);
                        
                        echo '<form action="salvarEdicao.php" method="post" class="form-horizontal" role="form">';
                        echo ' <div class="form-group" id="formCadastro">';
                        echo ' <div class="col-sm-2">';
                        echo '<input type="hidden" name="valorId" value="' . $row["id"] . ' ">';
                        echo '<label for="lblNome" class="control-label" id="btnSalvar">Nome</label>';
                        echo '</div>';
                        echo '<div class="col-sm-10">';
                        echo '<input type="text" class="form-control" id="lblNome" name="nome" value="' . $row["nome"] . '">';
                        echo '</div>';
                        echo '<div class="col-sm-2">';
                        echo '<label for="lblEmail" class="control-label">Email</label>';
                        echo '</div>';
                        echo '<div class="col-sm-10">';
                        echo '<input type="email" class="form-control" id="lblEmail" name="email" value="' . $row["email"] . '">';
                        echo '</div>';
                        echo '<div class="col-sm-2">';
                        echo '<label for="lblCelular" class="control-label">Celular</label>';
                        echo '</div>';
                        echo '<div class="col-sm-10">';
                        echo '<input type="text" class="form-control" id="lblCelular" name="celular" value="' . $row["celular"] . '">';
                        echo '</div>';
                        echo '<div class="col-sm-2">';
                        echo '<label for="lblTelefone" class="control-label">Telefone</label>';
                        echo '</div>';
                        echo '<div class="col-sm-10">';
                        echo '<input type="text" class="form-control" id="lblTelefone" name="telefone" value="' . $row["telefone"] . '">';
                        echo '</div>';
                        echo '<div class="col-sm-2">';
                        echo '<label for="lblEndereco" class="control-label">Endereço</label>';
                        echo '</div>';
                        echo '<div class="col-sm-10">';
                        echo '<input type="text" class="form-control" id="lblEndereco" name="endereco" value="' . $row["endereco"] . '">';
                        echo '</div>';
                        echo '<div class="col-sm-offset-6 col-sm-10">';
                        echo '<br>';
                        echo '<input type="submit"  class="btn btn-primary" value="Salvar Contato">';
                        
                $bd->fechaConexao();
            }
                ?>
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
  </body>

</html>