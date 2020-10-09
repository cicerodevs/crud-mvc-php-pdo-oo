<?php

namespace App\Model;

class Contato
{
    private $cel, $recado;

    // Métodos acessores
	public function getCel(){
		return $this->cel;
	}

	public function setCel($cel){
		$this->cel = $cel;
	}

	public function getRecado(){
		return $this->recado;
	}

	public function setRecado($recado){
		$this->recado = $recado;
	}
}
