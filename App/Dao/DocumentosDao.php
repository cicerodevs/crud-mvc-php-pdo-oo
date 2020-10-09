<?php

namespace App\Dao;

use PDO;
use PDOException;
use App\Model\Connection;
use App\Model\Documentos;

class DocumentosDao
{
    public function update(Documentos $d)
    {
        $id = $_GET['id'];
        if (!empty($id)) {
            try {
                $sql = 'UPDATE tab_documentos SET cpf = :cpf, pis = :pis, rg = :rg, titulo_eleitor = :titulo_eleitor, titulo_zona = :titulo_zona, titulo_secao = :titulo_secao, 
                certif_militar = :certif_militar, cnh = :cnh, cpts = :cpts, cpts_series = :cpts_series WHERE funcionario_id = ' . $id;

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
                $sql = 'DELETE FROM tab_documentos WHERE funcionario_id = '. $id;
                $stmt = Connection::getConn()->prepare($sql);
                $stmt->execute();

            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
        }
    }
}
