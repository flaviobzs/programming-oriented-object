<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo{
	private $titulo;
	private $avaliacao;
	private $views;
	private $curtidas;
	private $reproduzindo;

	public function __construct($t){
		$this->setTitulo($t);
		$this->setAvaliacao(1);
		$this->setViews(0);
		$this->setCurtidas(0);
		$this->setReproduzindo(false);
	}

	public function play(){
		$this->setReproduzindo(true);
		echo "<p>O vídeo <strong>{$this->getTitulo()}</strong> está tocando!</p>";
	}
	public function pause(){
		$this->setReproduzindo(false);
		echo "<p>O vídeo <strong>{$this->getTitulo()}</strong> foi pausado!</p>";
	}
	public function like(){
		$this->setCurtidas($this->getCurtidas() + 1);
		echo "<p>O vídeo <strong>{$this->getTitulo()}</strong>, possui <strong>{$this->getCurtidas()}</strong> likes.</p>";
	}

	public function getTitulo(){
		return $this->titulo;
	}
	public function getAvaliacao(){
		return $this->avaliacao;
	}
	public function getViews(){
		return $this->views;
	}
	public function getCurtidas(){
		return $this->curtidas;
	}
	public function getReproduzindo(){
		return $this->reproduzindo;
	}

	public function setTitulo($t){
		$this->titulo = $t;
	}
	public function setAvaliacao($a){
		$this->avaliacao = $a;
	}
	public function setViews($v){
		$this->views = $v;
	}
	public function setCurtidas($c){
		$this->curtidas = $c;
	}
	public function setReproduzindo($r){
		$this->reproduzindo = $r;
	}

}
?>