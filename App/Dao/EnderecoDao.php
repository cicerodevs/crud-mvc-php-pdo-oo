<?php

namespace App\Dao;

use PDO;
use PDOException;
use App\Model\Connection;
use App\Model\Contato;
use App\Model\Endereco;

class EnderecoDao
{
    public function update(Endereco $e)
    {
        $id = $_GET['id'];
        if (!empty($id)) {
            try {
                $sql = 'UPDATE tab_enderecos SET cep = :cep, endereco = :endereco, numero = :numero, bairro = :bairro, cidade = :cidade, estado = :estado WHERE funcionario_id = ' . $id;

                // Endereço
                $stmt = Connection::getConn()->prepare($sql);
                $stmt->bindValue(":cep", $e->getCep());
                $stmt->bindValue(":endereco", $e->getEndereco());
                $stmt->bindValue(":numero", $e->getNumero());
                $stmt->bindValue(":bairro", $e->getBairro());
                $stmt->bindValue(":cidade", $e->getCidade());
                $stmt->bindValue(":estado", $e->getEstado());

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
                $sql = 'DELETE FROM tab_enderecos WHERE funcionario_id = '. $id;
                $stmt = Connection::getConn()->prepare($sql);
                $stmt->execute();

            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
        }
    }
}
