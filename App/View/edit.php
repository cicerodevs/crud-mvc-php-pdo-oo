<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Vikings | Novo Funcionário</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
        .starter-template {
            margin-top: 8%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Vikings</a>
    </nav>

    <main role="main" class="container">
        <?php
        $funcionario = new \App\Dao\FuncionarioDao();
        foreach ($funcionario->find() as $f) :
        ?>
            <div class="starter-template">
                <h4>Atualizar: <?= $f['nome']; ?></h4>
                <hr>
            </div>
            <a href="http://localhost/Vikings/" class="btn btn-outline-secondary mt-4">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg>
                Início
            </a>
            <form action="index.php?controller=update&id=<?php echo $f['id']; ?>" method="post" class="" enctype="multipart/form-data">
                <h5 class="py-3">Dados pessoais</h5>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="">Nome</label>
                        <input type="text" name="nome" class="form-control" value="<?= $f['nome']; ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Estado civil</label>
                        <select name="estado_civil" class="form-control">
                            <option value="Solteiro">Solteiro</option>
                            <option value="Casado">Casado</option>
                            <option value="Viúvo">Viúvo</option>
                            <option value="Divórciado">Divórciado</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Nome conjuge</label>
                        <input type="text" name="nome_conjuge" class="form-control" value="<?= $f['nome_conjuge']; ?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Data de nascimento</label>
                        <input type="text" name="dt_nascimento" class="form-control" value="<?= $f['data_nascimento']; ?>" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Sexo</label>
                        <select name="sexo" class="form-control">
                            <option value="F">Feminino</option>
                            <option value="M">Masculino</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Escolaridade</label>
                        <input type="text" name="escolaridade" class="form-control" value="<?= $f['escolaridade']; ?>" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Naturalidade</label>
                        <input type="text" name="naturalidade" class="form-control" value="<?= $f['naturalidade']; ?>" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Foto</label>
                        <input type="file" name="picture" class="form-control" value="<?= $f['picture']; ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Nome do mae</label>
                        <input type="text" name="nome_mae" class="form-control" value="<?= $f['nome_mae']; ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Nome do pai</label>
                        <input type="text" name="nome_pai" class="form-control" value="<?= $f['nome_pai']; ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control" value="<?= $f['email']; ?>" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Telefone fixo</label>
                        <input type="text" name="tel" class="form-control" value="<?= $f['tel']; ?>" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Celular</label>
                        <input type="text" name="cel" class="form-control" value="<?= $f['cel']; ?>" required>
                    </div>
                </div>
                <div class="documentos mb-5">
                    <h5 class="py-3">Documentos</h5>
                    <div class="row">
                        <div class="from-group col-md-2">
                            <label for="">CPF</label>
                            <input type="text" name="cpf" class="form-control" value="<?= $f['cpf']; ?>" required>
                        </div>
                        <div class="from-group col-md-2">
                            <label for="">PIS</label>
                            <input type="text" name="pis" class="form-control" value="<?= $f['pis']; ?>" required>
                        </div>
                        <div class="from-group col-md-2">
                            <label for="">RG</label>
                            <input type="text" name="rg" class="form-control" value="<?= $f['rg']; ?>" required>
                        </div>
                        <div class="from-group col-md-2">
                            <label for="">Titulo</label>
                            <input type="text" name="titulo" class="form-control" value="<?= $f['titulo_eleitor']; ?>" required>
                        </div>
                        <div class="from-group col-md-1">
                            <label for="">Zona e.</label>
                            <input type="text" name="zona_e" class="form-control" value="<?= $f['titulo_zona']; ?>" required>
                        </div>
                        <div class="from-group col-md-1">
                            <label for="">Seçao e.</label>
                            <input type="text" name="secao_e" class="form-control" value="<?= $f['titulo_secao']; ?>" required>
                        </div>
                        <div class="from-group col-md-2">
                            <label for="">Resevista</label>
                            <input type="text" name="resevista" class="form-control" value="<?= $f['certif_militar']; ?>">
                        </div>
                        <div class="from-group col-md-2 mt-3">
                            <label for="">CNH</label>
                            <input type="text" name="cnh" class="form-control" value="<?= $f['cnh']; ?>">
                        </div>
                        <div class="from-group col-md-2 mt-3">
                            <label for="">CPTS</label>
                            <input type="text" name="cpts" class="form-control" value="<?= $f['cpts']; ?>" required>
                        </div>
                        <div class="from-group col-md-2 mt-3">
                            <label for="">CPTS série</label>
                            <input type="text" name="cpts_serie" class="form-control" value="<?= $f['cpts_series']; ?>" required>
                        </div>
                    </div>
                </div>
                <div class="endereco mb-5">
                    <h5 class="py-3">Endereço</h5>
                    <div class="row">
                        <div class="form-group col-md-2">
                            <label for="">CEP</label>
                            <input type="text" name="cep" class="form-control" value="<?= $f['cep']; ?>" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Endereço</label>
                            <input type="text" name="endereco" class="form-control" value="<?= $f['endereco']; ?>" required>
                        </div>
                        <div class="form-group col-md-1">
                            <label for="">Numero</label>
                            <input type="text" name="numero" class="form-control" value="<?= $f['numero']; ?>" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Bairro</label>
                            <input type="text" name="bairro" class="form-control" value="<?= $f['bairro']; ?>" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Cidade</label>
                            <input type="text" name="cidade" class="form-control" value="<?= $f['cidade']; ?>" required>
                        </div>
                        <div class="form-group col-md-1">
                            <label for="">Estado</label>
                            <input type="text" name="estado" class="form-control" value="<?= $f['estado']; ?>" required>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center py-4">
                    <button type="submit" class="btn btn-success" id="salvar">Atualizar dados</button>
                </div>
            </form>
            <!-- <a href="../../index.php?controller=list">Listar</a> -->
        <?php endforeach; ?>
    </main><!-- /.container -->
</body>

</html>