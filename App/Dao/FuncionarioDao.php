<?php

namespace App\Dao;

use PDO;
use App\Model\Connection;
use App\Model\Funcionario;
use App\Model\Contato;
use App\Model\Endereco;
use App\Model\Documentos;
use PDOException;

class FuncionarioDao
{
    public function create(Funcionario $f, Documentos $d, Endereco $e)
    {
        $sql = 'INSERT INTO tab_funcionarios(nome, estado_civil, nome_conjuge, data_nascimento, sexo, escolaridade, naturalidade,
        nome_mae, nome_pai, picture, email, tel, cel)VALUES(:nome, :estado_civil, :nome_conjuge, :data_nascimento, :sexo, :escolaridade, :naturalidade,
        :nome_mae, :nome_pai, :picture, :email, :tel, :cel)';

        $stmt = Connection::getConn()->prepare($sql);
        $stmt->bindValue(":nome", $f->getNome());
        $stmt->bindValue(":estado_civil", $f->getEstado_civil());
        $stmt->bindValue(":nome_conjuge", $f->getNome_conjuge());
        $stmt->bindValue(":data_nascimento", $f->getData_nascimento());
        $stmt->bindValue(":sexo", $f->getSexo());
        $stmt->bindValue(":escolaridade", $f->getEscolaridade());
        $stmt->bindValue(":naturalidade", $f->getNaturalidade());
        $stmt->bindValue(":nome_mae", $f->getNome_mae());
        $stmt->bindValue(":nome_pai", $f->getNome_pai());
        $stmt->bindValue(":picture", $f->getPicture());
        $stmt->bindValue(":email", $f->getEmail());
        $stmt->bindValue(":tel", $f->getTel());
        $stmt->bindValue(":cel", $f->getCel());

        if ($stmt->execute()) {
            $id = Connection::getConn()->lastInsertId();

            $sql = 'INSERT INTO tab_documentos(cpf, pis, rg, titulo_eleitor, titulo_zona, titulo_secao, certif_militar, cnh, cpts, cpts_series,
             funcionario_id)VALUES(:cpf, :pis, :rg, :titulo_eleitor, :titulo_zona, :titulo_secao, :certif_militar, :cnh, :cpts, :cpts_series,
             :funcionario_id)';

            // Documents 
            $stmt = Connection::getConn()->prepare($sql);
            $stmt->bindValue(":cpf", $d->getCpf());
            $stmt->bindValue(":pis", $d->getPis());
            $stmt->bindValue(":rg", $d->getRg());
            $stmt->bindValue(":titulo_eleitor", $d->getTitulo_eleitor());
            $stmt->bindValue(":titulo_zona", $d->getTitulo_zona());
            $stmt->bindValue(":titulo_secao", $d->getTitulo_secao());
            $stmt->bindValue(":certif_militar", $d->getCertif_militar());
            $stmt->bindValue(":cnh", $d->getCnh());
            $stmt->bindValue(":cpts", $d->getCpts());
            $stmt->bindValue(":cpts_series", $d->getCpts_series());
            $stmt->bindValue(":funcionario_id", $id);


            if ($stmt->execute()) {
                $sql = 'INSERT INTO tab_enderecos(cep, endereco, numero, bairro, cidade, estado, funcionario_id)VALUES(:cep, :endereco, :numero, :bairro, :cidade, :estado, :funcionario_id)';

                // Endereço
                $stmt = Connection::getConn()->prepare($sql);
                $stmt->bindValue(":cep", $e->getCep());
                $stmt->bindValue(":endereco", $e->getEndereco());
                $stmt->bindValue(":numero", $e->getNumero());
                $stmt->bindValue(":bairro", $e->getBairro());
                $stmt->bindValue(":cidade", $e->getCidade());
                $stmt->bindValue(":estado", $e->getEstado());
                $stmt->bindValue(":funcionario_id", $id);

                $stmt->execute();
            }
        }
    }


    public function read()
    {
        $sql = 'SELECT * FROM tab_funcionarios f INNER JOIN tab_enderecos e ON f.id = e.funcionario_id INNER JOIN tab_documentos d ON f.id = d.funcionario_id';

        $stmt = Connection::getConn()->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) :
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        else :
            return [];
        endif;
    }

    public function find()
    {
        $id = $_GET['id'];
        if (!empty($id)) {
            $sql = 'SELECT *  FROM tab_funcionarios f INNER JOIN tab_enderecos e ON f.id = e.funcionario_id INNER JOIN tab_documentos d ON f.id = d.funcionario_id WHERE id = ' . $id;

            $stmt = Connection::getConn()->prepare($sql);
            $stmt->execute();

            if ($stmt->rowCount() > 0) :
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $results;
            else :
                return [];
            endif;
        }
    }
    public function update(Funcionario $f)
    {
        $id = $_GET['id'];
        if (!empty($id)) {
            try {
                $sql = 'UPDATE tab_funcionarios SET nome = :nome, estado_civil = :estado_civil, nome_conjuge = :nome_conjuge, data_nascimento = :data_nascimento, 
                sexo = :sexo, escolaridade = :escolaridade, naturalidade = :naturalidade, nome_mae = :nome_mae, nome_pai = :nome_pai, picture = :picture, email = :email, tel = :tel, cel = :cel WHERE id = ' . $id;

                $stmt = Connection::getConn()->prepare($sql);
                $stmt->bindValue(":nome", $f->getNome());
                $stmt->bindValue(":estado_civil", $f->getEstado_civil());
                $stmt->bindValue(":nome_conjuge", $f->getNome_conjuge());
                $stmt->bindValue(":data_nascimento", $f->getData_nascimento());
                $stmt->bindValue(":sexo", $f->getSexo());
                $stmt->bindValue(":escolaridade", $f->getEscolaridade());
                $stmt->bindValue(":naturalidade", $f->getNaturalidade());
                $stmt->bindValue(":nome_pai", $f->getNome_mae());
                $stmt->bindValue(":nome_mae", $f->getNome_pai());
                $stmt->bindValue(":picture", $f->getPicture());
                $stmt->bindValue(":email", $f->getEmail());
                $stmt->bindValue(":tel", $f->getTel());
                $stmt->bindValue(":cel", $f->getCel());
                $stmt->execute();
            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
        }
    }

    public function delete()
    {
        $id = $_GET['id'];
        if (!empty($id)) {
            try {
                $sql = 'DELETE FROM tab_funcionarios WHERE id = ' . $id;
                $stmt = Connection::getConn()->prepare($sql);
                $stmt->execute();
            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
        }
    }
}
