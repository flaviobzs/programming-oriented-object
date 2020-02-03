<?php
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa {
	private $login;
	private $totAssistido;

	public function __construct($nome, $idade, $sexo, $login) {
		parent::__construct($nome, $idade, $sexo);
		$this->setLogin($login);
		$this->setTotAssistido(0);
	}

	public function assistirMaisUm() {
		$this->setTotAssistido($this->getTotAssistido() + 1);
	}

	public function ganharExp($n) {
		$this->setExperiencia($this->getExperiencia() + $n);
		echo "<p>Gafanhoto(a) <strong>{$this->getNome()}</strong>, ganhou experiência <strong>{$this->getExperiencia()}</strong>.</p>";
	}

	public function getLogin() {
		return $this->login;
	}
	public function getTotAssistido() {
		return $this->totAssistido;
	}
	public function setLogin($login) {
		$this->login = $login;
	}
	public function setTotAssistido($totAssistido) {
		$this->totAssistido = $totAssistido;
	}
}