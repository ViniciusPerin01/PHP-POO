<?php

    class BancoDeDados{
        // Atributos
        private $servername;
        private $username;
        private $password;
        private $dbname;
        
        public $conexao;
        
        // Método Construtor
        function __construct($servername, $username, $password, $dbname){
            $this->servername = $servername;
            $this->username = $username;
            $this->password = $password;
            $this->dbname = $dbname;
        }
        
        // Método que  cria uma conexao PDO e adciona ela ao atributo conexao.
        public function conexao(){
            try { 
                  $conexao = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
                  $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  //echo "Conectado com sucesso!";
                  $this->conexao = $conexao;
                  
            } catch(PDOException $e){
                echo "Conexão falhou! Erro: " . $e->getMessage();
            }
        }
        
        // Método que insere dados no banco
        public function insere($sql){
            $conexao = $this->conexao;
            if($conexao->query($sql) == true){
                //echo 'Dados inseridos com sucesso!';
            }else{
                echo 'Erro: ' . $sql . "<br />" . $this->conexao->error;
            }
        }
        
        
        // Método de atualiza dados no banco
        public function atualiza($sql){
             $conexao = $this->conexao;
            if($conexao->query($sql) == true){
                //echo 'Dados atualizados com sucesso!';
            }else{
                echo 'Erro: ' . $sql . "<br />" . $this->conexao->error;
            }
             
        }
        
        // Método que deleta no banco de dados
        public function deleta($sql){
            $conexao = $this->conexao;
            if($conexao->query($sql) == true){
                echo '<script>alert("Contato excluido com sucesso!")</script>';
            }else{
                echo 'Erro: ' . $sql . "<br />" . $this->conexao->error;
            }
        }
        
        // Método que faz o select no banco
        public function preencheTabela($sql){
            $conexao = $this->conexao;
            $result = $conexao->query($sql);
            
            if($result->num_rows > 0){
                
                while($row = $result->fetch_assoc()){
                  echo '<tr>';
                  echo '<td>' . $row["id"] . '</td>';
                  echo '<td>' .  $row["nome"] . '</td>';
                  echo '<td>' .  $row["email"] . '</td>';
                  echo '<td>' .  $row["celular"] . '</td>';
                  echo '<td>' .  $row["telefone"] .  '</td>';
                  echo '<td>' .  $row["endereco"] . '</td>';
                  echo '<td>';
                  echo '<a class="btn btn-block btn-success" id="btnEditar">Editar</a>';
                  echo '</td>';
                  echo '<td>';
                  echo '<a class="btn btn-block btn-danger" id="btnExcluir">Excluir</a>';
                  echo '</td>';
                  echo '</tr>';
                }
            }
            
        }
        
        public function fechaConexao(){
            $this->conexao = null;
        }
        
        
    }