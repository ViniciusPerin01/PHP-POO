<?php

    class Contato{
        private $id;
        private $nome;
        private $email;
        private $celular;
        private $telefone;
        private $endereco;
        
        
        
        // Método construtor do contato
        function __construct($nome, $email, $celular, $telefone, $endereco){
            $this->nome = $nome;
            $this->email = $email;
            $this->celular = $celular;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }
        
        
        
        
        // Métodos mutantes e acessores
        public function getId(){
            return $this->id;
        }
        
        public function setId($id){
            $this->id = $id;
        }
        
        
        public function getNome(){
            return $this->nome;
        }
        
        public function setNome($nome){
            $this->nome = $nome;
        }
        
        
        public function getEmail(){
            return $this->email;
        }
        
        public function setEmail($email){
            $this->email = $email;
        }
        
        
        public function getCelular(){
            return $this->celular;
        }
        
        public function setCelular($celular){
            $this->celular = $celular;
        }
        
        
        public function getTelefone(){
            return $this->telefone;
        }
        
        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }
        
        
        public function getEndereco(){
            return $this->endereco;
        }
        
        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }
        
        
        
        
    }