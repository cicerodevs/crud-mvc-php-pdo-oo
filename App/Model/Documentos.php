<?php

namespace App\Model;

class Documentos
{
    private $cpf, $pis, $rg, $titulo_eleitor, $titulo_zona, $titulo_secao, $certif_militar, $cnh, $cpts, $cpts_series;

    // Métodos acessores
    public function getCpf(){
		return $this->cpf;
	}

	public function setCpf($cpf){
		$this->cpf = $cpf;
	}

	public function getPis(){
		return $this->pis;
	}

	public function setPis($pis){
		$this->pis = $pis;
	}

	public function getRg(){
		return $this->rg;
	}

	public function setRg($rg){
		$this->rg = $rg;
	}

	public function getTitulo_eleitor(){
		return $this->titulo_eleitor;
	}

	public function setTitulo_eleitor($titulo_eleitor){
		$this->titulo_eleitor = $titulo_eleitor;
	}

	public function getTitulo_zona(){
		return $this->titulo_zona;
	}

	public function setTitulo_zona($titulo_zona){
		$this->titulo_zona = $titulo_zona;
	}

	public function getTitulo_secao(){
		return $this->titulo_secao;
	}

	public function setTitulo_secao($titulo_secao){
		$this->titulo_secao = $titulo_secao;
	}

	public function getCertif_militar(){
		return $this->certif_militar;
	}

	public function setCertif_militar($certif_militar){
		$this->certif_militar = $certif_militar;
	}

	public function getCnh(){
		return $this->cnh;
	}

	public function setCnh($cnh){
		$this->cnh = $cnh;
	}

	public function getCpts(){
		return $this->cpts;
	}

	public function setCpts($cpts){
		$this->cpts = $cpts;
	}

	public function getCpts_series(){
		return $this->cpts_series;
	}

	public function setCpts_series($cpts_series){
		$this->cpts_series = $cpts_series;
	}
}
