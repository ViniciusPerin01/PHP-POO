<?php
    require_once 'Publicacao.php';
    require_once 'Pessoa.php';
    
    
    
    class Livro implements Publicacao{
        // Atributos de um Livro
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto; // true = aberto, false = fechado
        private $leitor;
        
        
        
        //Métodos do Livro
        function detalhes(){
            echo "-----------------Livro-------------------------------\n";
            echo "\nTitulo do livro: " . $this->getTitulo() . "\n";
            echo "\nNome do autor: " . $this->getAutor() . "\n";
            echo "\nNúmeros de pagina: " . $this->getTotPaginas() . "\n";
            echo "\nQuem está lendo: " .  $this->leitor->getNome() . "\n";
            echo "-----------------------------------------------\n";
        }
        
        function emprestarLivro($leitor){
            echo "\nLivro foi emprestado para: " . $leitor->getNome() . "\n";
            
        }
        
        function devolverLivro($leitor){
            echo "\nO livro está sendo devolvido por: " . $leitor->getNome() . "\n";
            $this->leitor->setNome(null);
        }
        
        
        //Métodos Especiais
        function __construct($titulo, $autor, $totPaginas, $leitor){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->leitor = $leitor;
        } 
        
        
        function getTitulo(){
            return $this->titulo;
        }
        function setTitulo($titulo){
            $this->titulo = $titulo;
        }
        
        function getAutor(){
            return $this->autor;
        }
        function setAutor($autor){
            $this->autor = $autor;
        }
        
        function getTotPaginas(){
            return $this->totPaginas;
        }
        function setTotPaginas($totPaginas){
            $this->totPaginas = $totPaginas;
        }
        
        function getPagAtual(){
            return $this->pagAtual;
        }
        function setPagAtual($pagAtual){
            $this->pagAtual = $pagAtual;
        }
        
        function getAberto(){
            return $this->aberto;
        }
        function setAberto($aberto){
            $this->aberto = $aberto;
        }
        
        function getLeitor(){
            return $this->leitor;
        }
        function setLeitor($leitor){
            $this->leitor = $leitor;
        }

    
        // Métodos da interface
        
        function abrir(){
            if(getAberto()){
               echo "Livro já estava aberto!\n";
            }else{
                 $this->aberto = true;
                echo "Livro foi aberto \n";
            }
           
        }
        
        function fechar(){
            if(getAberto()){
                $this->aberto = false;
                echo "Livro foi fechado \n";
            }else{
                echo "Livro já estava fechado!\n";
            }
           
        }
        
        function folhear(){
            if(getAberto()){
                echo "Livro está sendo folheado!\n";
            }else{
                echo "Não pode folhear o livro, pois ele está fechado!\n";
            }
        }
        
        function avancarPag(){
            if(getAberto()){
                if(getPagAtual() <= getTotPaginas()){
                    setPagAtual(getPagAtual() + 1);
                    echo "Passou página\n";
                }else{
                    echo "Livro acabou... e não pode passar página!\n";
                }
            }else{
                echo "O livro está fechado e não pode passar uma página\n";
            }
        }
        
        function voltarPag(){
             if(getAberto()){
                if(getPagAtual() >= 0){
                    setPagAtual(getPagAtual() - 1);
                    echo "Voltou página\n";
                }else{
                    echo "Livro está na primeira capa, e não pode voltar uma página!\n";
                }
            }else{
                echo "Livro está fechado e não pode voltar página!\n";
            }
        }

    } 

?>