<?php
    class ContaBanco{
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;
    
        //Inicio Métodos Especiais
        public function ContaBanco(){
            $this->setStatus(false);
            $this->setSaldo(0);
        }   

        public function setNumConta($num){
            $this->numConta = $num;
        }
        public function getNumConta(){
            return $this->numConta;
        }
        public function setTipo($t){
            $this->tipo = $t;
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function setDono($d){
            $this->dono = $d;
        }
        public function getDono(){
            return $this->dono;
        }
        public function setSaldo($s){
            $this->saldo = $s;
        }
        public function getSaldo(){
            return $this->saldo;
        }
        public function setStatus($st){
            $this->status = $st;
        }
        public function getStatus(){
            return $this->status;
        }
        //Fim Métodos Especiais
    
        public function abrirConta($t){
            $this->setTipo($t);
            $this->setStatus(true);
            if($t == "CC"){
                $this->setSaldo(50);
            }elseif($t == "CP"){
                $this->setSaldo(150);
            }
        }
        public function fecharConta(){
            if($this->getSaldo() > 0){
                echo "<p>ERRO - Conta do(a) cliente {$this->getDono()} possui saldo.</p>";
            }elseif($this->getSaldo() < 0){
                echo "<p>ERRO - Conta do(a) cliente {$this->getDono()} possui débito</p>";
            }else{
                $this->setStatus(false);
                echo "<p>Fechamento da conta do cliente {$this->getDono()} realizado com sucesso.</p>";
            }
        }
        public function depositar($valor){
            if($this->getStatus(true)){
                $this->setSaldo($this->getSaldo() + $valor);
                echo "<p>Deposito de R$ $valor realizado com sucesso na conta de {$this->getDono()}</p>";
            }else{
                echo "<p>ERRO - Conta fechada. Não foi possível depositar.</p>";
            }
        }
        public function sacar($valor){
            if($this->getStatus(true)){
                if($this->getSaldo() >= $valor){
                    $this->setSaldo($this->getSaldo() - $valor);
                    echo "<p>Saque de R$ $valor realizado com sucesso na conta de {$this->getDono()}.</p>";
                }else{
                    echo "<p>ERRO - Saldo insuficiente para saque</p>";
                }
            }else{
                echo "<p>ERRO - Conta não está ativa.</p>";
            }
        }
        public function pagarMensal(){
            if($this->getTipo() == "CC"){
                $valor = 12;
            }elseif($this->getTipo() == "CP"){
                $valor = 20;
            }
            if($this->getStatus()){
                if($this->getSaldo() >= $valor){
                    $this->setSaldo($this->getSaldo() - $valor);
                    echo "<p>Mensalidade de R$ $valor debitada na conta de {$this->getDono()}.</p>";
                }else{
                    echo "<p>Saldo insuficiente.</p>";
                }
            }else{
                echo "<p>Imposível pagar à mensalidade.</p>";
            }
        }
    }
?>