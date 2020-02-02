<?php
    require_once 'Pessoa.php';
    require_once 'Publicacao.php';
    class Livro implements Publicacao{
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function __construct($t, $a, $tp,$l){
                $this->titulo = $t;
                $this->autor = $a;
                $this->totPaginas = $tp;
                $this->leitor = $l;
                $this->aberto = false;
                $this->pagAtual = 0;
        }

        protected function getTitulo(){
            return $this->titulo;
        }
        protected function getAutor(){
            return $this->autor;
        }
        protected function getTotPag(){
            return $this->totPaginas;
        }
        protected function getPagAtual(){
            return $this->pagAtual;
        }
        protected function getAberto(){
            return $this->aberto;
        }
        protected function getLeitor(){
            return $this->leitor;
        }

        protected function setTitulo($t){
            $this->titulo = $t;
        }
        protected function setAutor($a){
            $this->autor = $a;
        }
        protected function setTotPag($tp){
            $this->totPaginas = $tp; 
        }
        protected function setPagAtual($pa){
            $this->pagAtual = $pa;
        }
        protected function setAberto($ab){
            $this->aberto = $ab;
        }
        protected function setLeitor($l){
            $this->leitor = $l;
        }

        public function detalhes(){
            echo "<br>";
            echo "<table>";
            echo "<tr> 
                <th>Título</th>
                <th>Autor</th>
                <th>Total Páginas</th>
                <th>Página Atual</th>
                <th>Aberto</th>
                <th>Leitor</th>
            </tr>";
            echo "<tr>
                <td>{$this->getTitulo()}</td>
                <td>{$this->getAutor()}</td>
                <td>{$this->getTotPag()}</td>
                <td>{$this->getPagAtual()}</td>
                <td>".($this->getAberto()?"SIM":"Não")."</td>
                <td>{$this->leitor->getNome()}</td>
               
            </tr>";
            echo "</table>";
        }

        public function abrir(){
            $this->aberto = true;
        }
        public function fechar(){
            $this->aberto = false;
        }
        public  function folhear($p){
            if($p > $this->getTotPag()){
                $this->pagAtual = 0;
            }else{
                $this->pagAtual = $p;
            }            
        }
        public function avancarPag(){
            if($this->getPagAtual() < $this->getTotPag()){
                $this->setPagAtual($this->getPagAtual() + 1);
            }else{
                $this->fechar();
                $this->pagAtual = 0;
                echo "Livro foi fechado, não possui mais páginas.";
            }
        }
        public function voltarPag(){
            if($this->getPagAtual() > 0){
                $this->setPagAtual($this->getPagAtual() - 1);
                if($this->getPagAtual() <= 0){
                    $this->fechar();
                    $this->pagAtual = 0;
                    echo "Livro foi fechado, não possui mais páginas."; 
                }
            }else{
                $this->fechar();
                $this->pagAtual = 0;
                echo "Livro foi fechado, não possui mais páginas.";
            }
        }
    }
?>