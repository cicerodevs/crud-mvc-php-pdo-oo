<?php

namespace App\Controller;

use App\Dao\ContatoDao;
use App\Model\Contato;

class ContatoController
{
    public function update()
    {
        $contato = new Contato();
        $tipo = $_POST['tipo'];
        if($tipo == 'pessoal'){
            $contato->setCel(addslashes($_POST['cel']));
        }else{
            $contato->setRecado(addslashes($_POST['cel']));
        }

        $update = new ContatoDao();
        $update->update($contato);
    }
    public function store()
    {
        $contato = new Contato();
        $tipo = $_POST['tipo'];
        if($tipo == 'pessoal'){
            $contato->setCel(addslashes($_POST['cel']));
        }else{
            $contato->setRecado(addslashes($_POST['cel']));
        }


        $store = new ContatoDao();
        $store->store($contato);
    }

    public function delete()
    {
        $delete = new ContatoDao();
        $delete->delete();
    }
}
new ContatoController();