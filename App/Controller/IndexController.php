<?php

namespace App\Controller;

use App\Dao\DocumentosDao;
use App\Dao\EnderecoDao;
use App\Model\Funcionario;
use App\Model\Documentos;
use App\Model\Endereco;
use App\Dao\FuncionarioDao;
use PDOException;

class IndexController
{
    public function index()
    {
        require_once 'App/View/index.php';
    }
    public function listar()
    {
        $funcionarios = new FuncionarioDao();
        return $funcionarios->read();
    }

    public function save()
    {
        define("PASTA_IMAGEM", "./public/images/");
        $picture = $_FILES['picture']['name'];
        $temp = $_FILES['picture']['tmp_name'];

        move_uploaded_file($temp, PASTA_IMAGEM . $picture);
        try {
            $funcionario = new Funcionario();
            $funcionario->setNome($_POST['nome']);
            $funcionario->setEstado_civil($_POST['estado_civil']);
            $funcionario->setNome_conjuge($_POST['nome_conjuge']);
            $funcionario->setData_nascimento($_POST['dt_nascimento']);
            $funcionario->setSexo($_POST['sexo']);
            $funcionario->setEscolaridade($_POST['escolaridade']);
            $funcionario->setNaturalidade($_POST['naturalidade']);
            $funcionario->setNome_mae($_POST['nome_mae']);
            $funcionario->setNome_pai($_POST['nome_pai']);
            $funcionario->setPicture($picture);
            $funcionario->setEmail($_POST['email']);
            $funcionario->setTel($_POST['tel']);
            $funcionario->setCel($_POST['cel']);


            // documentos
            $documentos = new Documentos();
            $documentos->setCpf($_POST['cpf']);
            $documentos->setPis($_POST['pis']);
            $documentos->setRg($_POST['rg']);
            $documentos->setTitulo_eleitor($_POST['titulo']);
            $documentos->setTitulo_zona($_POST['zona_e']);
            $documentos->setTitulo_secao($_POST['secao_e']);
            $documentos->setCertif_militar($_POST['resevista']);
            $documentos->setCnh($_POST['cnh']);
            $documentos->setCpts($_POST['cpts']);
            $documentos->setCpts_series($_POST['cpts_serie']);

            // Endereço
            $endereco = new Endereco();
            $endereco->setCep($_POST['cep']);
            $endereco->setEndereco($_POST['endereco']);
            $endereco->setNumero($_POST['numero']);
            $endereco->setBairro($_POST['bairro']);
            $endereco->setCidade($_POST['cidade']);
            $endereco->setEstado($_POST['estado']);

            // Salvando os registros no banco de dados
            $insert = new FuncionarioDao();
            $insert->create($funcionario, $documentos, $endereco);

            header('location: http://localhost/vikings/');
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function update()
    {
        define("PASTA_IMAGEM_UPDATE", "./public/images/");
        $picture = $_FILES['picture']['name'];
        $temp = $_FILES['picture']['tmp_name'];

        move_uploaded_file($temp, PASTA_IMAGEM_UPDATE . $picture);

        try {

            $funcionario = new Funcionario();
            $funcionario->setNome($_POST['nome']);
            $funcionario->setEstado_civil($_POST['estado_civil']);
            $funcionario->setNome_conjuge($_POST['nome_conjuge']);
            $funcionario->setData_nascimento($_POST['dt_nascimento']);
            $funcionario->setSexo($_POST['sexo']);
            $funcionario->setEscolaridade($_POST['escolaridade']);
            $funcionario->setNaturalidade($_POST['naturalidade']);
            $funcionario->setNome_mae($_POST['nome_mae']);
            $funcionario->setNome_pai($_POST['nome_pai']);
            $funcionario->setPicture($picture);
            $funcionario->setEmail($_POST['email']);
            $funcionario->setTel($_POST['tel']);
            $funcionario->setCel($_POST['cel']);


            // documentos
            $documentos = new Documentos();
            $documentos->setCpf($_POST['cpf']);
            $documentos->setPis($_POST['pis']);
            $documentos->setRg($_POST['rg']);
            $documentos->setTitulo_eleitor($_POST['titulo']);
            $documentos->setTitulo_zona($_POST['zona_e']);
            $documentos->setTitulo_secao($_POST['secao_e']);
            $documentos->setCertif_militar($_POST['resevista']);
            $documentos->setCnh($_POST['cnh']);
            $documentos->setCpts($_POST['cpts']);
            $documentos->setCpts_series($_POST['cpts_serie']);

            // Endereço
            $endereco = new Endereco();
            $endereco->setCep($_POST['cep']);
            $endereco->setEndereco($_POST['endereco']);
            $endereco->setNumero($_POST['numero']);
            $endereco->setBairro($_POST['bairro']);
            $endereco->setCidade($_POST['cidade']);
            $endereco->setEstado($_POST['estado']);

            // Salvando os registros no banco de dados
            $update_f = new FuncionarioDao();
            $update_d = new DocumentosDao();
            $update_e = new EnderecoDao();

            $update_f->update($funcionario);
            $update_d->update($documentos);
            $update_e->update($endereco);

            header('location: http://localhost/vikings/');
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function delete()
    {
        try {
            $delete_f = new FuncionarioDao();
            $delete_d = new DocumentosDao();
            $delete_e = new EnderecoDao();

            $delete_f->delete();
            $delete_d->delete();
            $delete_e->delete();

            header('location: http://localhost/vikings/');
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}
new IndexController();
