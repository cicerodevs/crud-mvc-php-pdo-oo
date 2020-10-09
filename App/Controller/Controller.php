<?php

namespace App\Controller;

use PDOException;
class Controller
{
    private $index;
    private $contato;
    public function __construct()
    {
        $this->index = new IndexController();
        $this->contato = new ContatoController();

    }
    public function handleRequest()
    {
        $controller = isset($_GET['controller']) ? $_GET['controller'] : 'index';

        try {

            if (!$controller || $controller == 'list') {
                $this->index->listar();
            } elseif ($controller == 'save') {
                $this->index->save();
            } elseif ($controller == 'edit') {
                require_once 'App/View/edit.php';
            } elseif ($controller == 'update') {
                $this->index->update();
            } elseif ($controller == 'delete') {
                $this->index->delete();
            } elseif ($controller == 'show') {
                require_once 'App/View/show.php';
            } elseif ($controller == 'edit_c') {
                require_once 'App/View/edit-contato.php';
            } else if($controller == 'store'){
                $this->contato->store();
            }else if($controller == 'update_c'){
                $this->contato->update();
            }else if($controller == 'delete_c'){
                $this->contato->delete();
            }else {
                $this->index->index();
            }
        } catch (PDOException $e) {
            echo "Application error", $e->getMessage();
        }
    }
}
