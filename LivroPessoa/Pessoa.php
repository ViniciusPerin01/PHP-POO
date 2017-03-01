<?php 
    class Pessoa{
        // Atributos da pessoa
        private $nome;
        private $idade;
        private $sexo; // True = Masculino | False = Feminino
        
        
        //Métodos da pessoa
        function fazerAniver(){
            setIdade(getIdade() + 1);
        } 
        
        function apresentarPessoa(){
            echo "--------Pessoa----------\n";
            echo "Nome: " . $this->getNome() . "\n";
            echo "Idade: " . $this->getIdade() . "\n";
            echo "Sexo: " . $this->getSexo() . "\n";
            echo "-------------------------\n";
        }
        
        
        // Métodos Especiais
        
        function __construct($nome, $idade, $sexo){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }
        
        
        function getNome(){
            return $this->nome;
        }
        function setNome($nome){
            $this->nome = $nome;
        }
        
        function getIdade(){
            return $this->idade;
        }
        function setIdade($idade){
            $this->idade = $idade;
        }
        
        function getSexo(){
            if($this->sexo == true){
                return "Masculino";
            }else{
                return "Feminino";
            }
        } 
        function setSexo($sexo){
            $this->sexo = $sexo;
        }
        
        
        
    }

?>