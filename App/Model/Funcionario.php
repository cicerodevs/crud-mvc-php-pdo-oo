<?php

namespace App\Model;

class Funcionario
{
    private $id, $nome, $estado_civil, $nome_conjuge, $data_nascimento, $sexo, $escolaridade, $naturalidade,
        $nome_mae, $nome_pai, $picture, $email, $tel, $cel;

    // Métodos acessores
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEstado_civil()
    {
        return $this->estado_civil;
    }

    public function setEstado_civil($estado_civil)
    {
        $this->estado_civil = $estado_civil;
    }

    public function getNome_conjuge()
    {
        return $this->nome_conjuge;
    }

    public function setNome_conjuge($nome_conjuge)
    {
        $this->nome_conjuge = $nome_conjuge;
    }

    public function getData_nascimento()
    {
        return $this->data_nascimento;
    }

    public function setData_nascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function getEscolaridade()
    {
        return $this->escolaridade;
    }

    public function setEscolaridade($escolaridade)
    {
        $this->escolaridade = $escolaridade;
    }

    public function getNaturalidade()
    {
        return $this->naturalidade;
    }

    public function setNaturalidade($naturalidade)
    {
        $this->naturalidade = $naturalidade;
    }

    public function getNome_mae()
    {
        return $this->nome_mae;
    }

    public function setNome_mae($nome_mae)
    {
        $this->nome_mae = $nome_mae;
    }

    public function getNome_pai()
    {
        return $this->nome_pai;
    }

    public function setNome_pai($nome_pai)
    {
        $this->nome_pai = $nome_pai;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getTel(){
		return $this->tel;
	}

	public function setTel($tel){
		$this->tel = $tel;
	}

	public function getCel(){
		return $this->cel;
	}

	public function setCel($cel){
		$this->cel = $cel;
	}
}
