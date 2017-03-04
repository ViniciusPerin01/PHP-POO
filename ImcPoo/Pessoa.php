<?php
    /*
    *
    * Autor: Maycon de Moraes
    * Date: 03/03/2017
    */
    
    class Pessoa {
        //Atributos
        private $nome;
        private $idade;
        private $altura;
        private $peso;
        private $sexo; // Utilizar F ou M
        
        
        // Método que calcula o IMC
        function imc(){
            $imc = $this->peso / ($this->altura * $this->altura);
            
            return number_format($imc, 2);
        }
        
        function tabelaImc($imc){
            if($this->sexo == "F"){
                if($imc < 19.1){
                    return "Peso baixo, seu imc é de " . $imc;
                }elseif($imc < 25.8){
                    return "Peso ideal, seu imc é de " . $imc;
                }elseif($imc < 27.3){
                    return "Peso acima do normal, seu imc é de " . $imc;
                }elseif($imc < 32.3){
                    return "Cuidado! obsidade, seu imc é de " . $imc;
                }elseif($imc >32.3){
                    return "Cuidado! Obsidade morbida, imc é de " . $imc;
                }
            }elseif($this->sexo == "M"){
                if($imc < 20.7){
                    return "Peso baixo, seu imc é de " . $imc;
                }elseif($imc < 26.4){
                    return "Peso ideal, seu imc é de " . $imc;
                }elseif($imc < 27.8){
                    return "Peso acima do normal, seu imc é de " . $imc;
                }elseif($imc < 31.1){
                    return "Cuidado! obsidade, seu imc é de " . $imc;
                }elseif($imc > 31.1){
                    return "Cuidado! Obsidade morbida, imc é de " . $imc;
                }
            }
        }
        
    
        //  Métodos especiais
        
        // Construtor
        
        function __construct($nome, $idade, $altura, $peso, $sexo){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->altura = $altura;
            $this->peso = $peso;
            $this->sexo = $sexo;
        }
        
        // Setters And Getters
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
        
        function getAltura(){
            return $this->altura;
        }
        function setAltura($altura){
            $this->altura = $altura;
        }
        
        function getPeso(){
            return $this->peso;
        }
        function setPeso($peso){
            $this->peso = $peso;
        }
        
        function getSexo(){
            return $this->sexo;
        }
        function setSexo($sexo){
            $this->sexo = $sexo;  
        }
        
        
    }
    
    
?>