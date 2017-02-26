<?php 
    
    class Luta{
        //Atributos
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;
        
        //Métodos Públicos
        
        function marcarLuta($l1, $l2){
            if($l1->getCategoria() == $l2->getCategoria() && ($l1 != $l2)){
                $this->aprovada = true;
                $this->desafiado = $l1;
                $this->desafiante = $l2;
            }else{
                $this->aprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;
            }
        }
        
        function lutar(){
            if($this->aprovada){
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0,2);
                switch($vencedor){
                    case 0: //Empatou
                    echo "A luta empatou!";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                    break;
                    case 1: // Desafiado ganhou
                        echo "O vencedor da luta foi " . $this->desafiado->getNome();
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                    break;
                    case 2: // Desafiante ganhou
                        echo "O vencedor da luta foi " . $this->desafiante->getNome();
                        $this->desafiado->perderLuta();
                        $this->desafiante->ganharLuta();
                    break;
                }
            }else{
                echo "Luta não pode acontecer!";
            }
        }
        
        
        //Métodos Especiais
        function getDesafiado(){
            return $this->dasafiado;
        }
        function setDesafiado($desafiado){
            $this->dasafiado = $desafiado;
        }
        
        function getDesafiante(){
            return $this->dasafiante;
        }
        function setDesafiante($desafiante){
            $this->desafiante = $desafiante;
        }
        
        function getRounds(){
            return $this->rounds;
        }
        function setRounds($rounds){
            $this->rounds = $rounds;
        }
        function isAprovada(){
            return $this->aprovada;
        }
        function setAprovada($aprovada){
            $this->aprovada = $aprovada;
        }
        
        
        
    }




?>