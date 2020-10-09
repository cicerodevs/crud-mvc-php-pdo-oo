<?php

namespace App\Dao;

use PDO;
use PDOException;
use App\Model\Connection;
use App\Model\Contato;

class ContatoDao
{
    public function index()
    {
        $id = $_GET['id'];
        if (!empty($id)) {
            try {
                $sql = 'SELECT * FROM tab_contato_extra WHERE funcionario_id = ' . $id;
                
                $stmt = Connection::getConn()->prepare($sql);
                $stmt->execute();
                if ($stmt->rowCount() > 0) :
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    return $results;
                else :
                    return [];
                endif;
                
            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
        }
    }

    public function findId()
    {
        $id = $_GET['id'];
        if (!empty($id)) {
            try {
                $sql = 'SELECT * FROM tab_contato_extra WHERE id_contato = ' . $id;
                
                $stmt = Connection::getConn()->prepare($sql);
                $stmt->execute();
                if ($stmt->rowCount() > 0) :
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    return $results;
                else :
                    return [];
                endif;
                
            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
        }
    }

    public function update(Contato $c)
    {
        $id = $_GET['id'];
        if (!empty($id)) {
            try {
                $sql = 'UPDATE tab_contato_extra SET  cel = :cel, recado = :recado WHERE id_contato = ' . $id;

                // Contato
                $stmt = Connection::getConn()->prepare($sql);
                $stmt->bindValue(":cel", $c->getCel());
                $stmt->bindValue(":recado", $c->getRecado());
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
                $sql = 'DELETE FROM tab_contato_extra WHERE id_contato = '. $id;
                $stmt = Connection::getConn()->prepare($sql);
                $stmt->execute();

            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
        }
    }

    // Adicionar novo contato
    public function store(Contato $c)
    {
        $id = $_GET['id'];
        if (!empty($id)) {
            try {
                $sql = 'INSERT INTO tab_contato_extra(cel, recado, funcionario_id)VALUES(:cel, :recado, :funcionario_id)';
                $stmt = Connection::getConn()->prepare($sql);
                $stmt->bindValue(":cel", $c->getCel());
                $stmt->bindValue(":recado", $c->getRecado());
                $stmt->bindValue(":funcionario_id", $id);
                $stmt->execute();

            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
        }
    }
}
