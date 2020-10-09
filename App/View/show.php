<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Vikings | Gestão de pessoas</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .starter-template {
            margin-top: 8%;
        }

        .picture {
            width: 100px;
            height: 100px;
            border-radius: 50%;

            object-fit: cover;
            object-position: center center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand pl-lg-5 ml-lg-5" href="#">Vikings</a>
    </nav>

    <main role="main" class="container">
        <?php

        use App\Dao\FuncionarioDao;

        $funcionario = new FuncionarioDao();
        foreach ($funcionario->find() as $f) :
        ?>
            <div class="starter-template">
                <h4>Funcionário(a): <?= $f['nome']; ?></h4>
                <a href="http://localhost/vikings/" class="btn btn-outline-secondary mt-4">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg>
                    Voltar
                </a>
                <a href="#" data-toggle="modal" data-target="#staticBackdrop" class="btn btn-outline-primary mt-4">Novo telefone</a>
                <a href="index.php?controller=edit&id=<?php echo $f['id']; ?>" class="btn btn-outline-warning mt-4">Atualizar</a>
                <a href="index.php?controller=delete&id=<?php echo $f['id']; ?>" data-confirm='Tem certeza de que deseja excluir o item selecionado?' class="btn btn-outline-danger mt-4">Excluir</a>
                <hr>


                <div class="d-flex justify-content-center py-2">
                    <img src="public/images/<?php echo $f['picture'] ?>" class="picture">
                </div>
                <hr>
                <div class="row pt-3 mb-5">
                    <div class="col-md-4">
                        <p><strong>Nome:</strong> <?= $f['nome']; ?></p>
                        <p><strong>Estado Civíl:</strong> <?= $f['estado_civil']; ?></p>
                        <p><strong>Cônjuge:</strong>
                            <?php
                            if (!empty($f['nome_conjuge'])) {
                                echo $f['nome_conjuge'];
                            } else {
                                echo 'Não definido';
                            }
                            ?></p>
                        <p><strong>Data de Nascimento:</strong> <?= $f['data_nascimento']; ?></p>
                        <p><strong>Sexo:</strong>
                            <?php
                            if ($f['sexo'] == 'F') {
                                echo 'Feminino';
                            } else {
                                echo 'Masculino';
                            }
                            ?></p>
                        <p><strong>Escolaridade:</strong> <?= $f['escolaridade']; ?></p>
                        <p><strong>Naturalidade:</strong> <?= $f['naturalidade']; ?></p>
                        <p><strong>Mãe:</strong> <?= $f['nome_mae']; ?></p>
                        <p><strong>Pai:</strong> <?= $f['nome_pai']; ?></p>
                        <p><strong>E-mail:</strong> <?= $f['email']; ?></p>
                        <p><strong>Telefone fixo:</strong> <?= $f['tel']; ?></p>
                        <p><strong>Celular:</strong> <?= $f['cel']; ?></p>
                    </div>
                    <div class="col-md-4">
                        <p><strong>CPF:</strong> <?= $f['cpf']; ?></p>
                        <p><strong>PIS:</strong> <?= $f['pis']; ?></p>
                        <p><strong>RG:</strong> <?= $f['rg']; ?></p>
                        <p><strong>Titulo:</strong> <?= $f['titulo_eleitor']; ?></p>
                        <p><strong>Titulo Zona:</strong> <?= $f['titulo_zona']; ?></p>
                        <p><strong>Titulo Seçao:</strong> <?= $f['titulo_secao']; ?></p>
                        <p><strong>Resevista:</strong>
                            <?php
                            if (!empty($f['certif_militar'])) {
                                echo $f['certif_militar'];
                            } else {
                                echo 'Apenas para o sexo masculino';
                            }
                            ?>
                        </p>
                        <p><strong>CNH:</strong>
                            <?php
                            if (!empty($f['cnh'])) {
                                echo $f['cnh'];
                            } else {
                                echo 'Não possui';
                            }
                            ?></p>
                        <p><strong>CPTS:</strong> <?= $f['cpts']; ?></p>
                        <p><strong>CPTS Série:</strong> <?= $f['cpts_series']; ?></p>
                    </div>
                    <div class="col-md-4">
                        <p><strong>CEP:</strong> <?= $f['cep']; ?></p>
                        <p><strong>Endereço:</strong> <?= $f['endereco']; ?></p>
                        <p><strong>Número:</strong> <?= $f['numero']; ?></p>
                        <p><strong>Bairro:</strong> <?= $f['bairro']; ?></p>
                        <p><strong>Cidade:</strong> <?= $f['cidade']; ?></p>
                        <p><strong>Estado:</strong> <?= $f['estado']; ?></p>

                        <!-- Telefones extras -->
                        <p class=""><u>Telefones Adicionais</u></p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Pessoal</th>
                                    <th scope="col">Recado</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $phones = new App\Dao\ContatoDao();
                                foreach ($phones->index() as $phone) :
                                ?>
                                    <tr>
                                        <td><?= $phone['cel']; ?></td>
                                        <td><?= $phone['recado']; ?></td>
                                        <td>
                                            <a href="index.php?controller=edit_c&id=<?php echo $phone['id_contato']; ?>" class="text-success px-1">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                                </svg>
                                            </a>
                                            <a href="index.php?controller=delete_c&id=<?php echo $phone['id_contato']; ?>" class="text-danger" data-confirm='Tem certeza de que deseja excluir?'>
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Novo número</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <input type="hidden" name="id" id="id" value="<?php echo $f['id']; ?>">
                                <div class="form-group">
                                    <select name="tipo" id="tipo" class="form-control">
                                        <option>--< Selecione>--</option>
                                        <option value="pessoal">Pessoal</option>
                                        <option value="recado">Recado</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Número</label>
                                    <input type="text" name="cel" id="cel" class="form-control">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button id="save" class="btn btn-primary">Adicionar</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </main><!-- /.container -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script>
        $('#save').click(function() {
            let id = $('#id').val();
            let tipo = $('#tipo').val();
            let cel = $('#cel').val();
            let url = 'index.php?controller=store&id=' + id;
            $.ajax({
                url: url,
                type: 'post',
                data: {
                    id: id,
                    tipo: tipo,
                    cel: cel
                },
                success: function(data) {
                    document.location.reload(true);
                },
                error: function(data) {
                    //
                }
            });
            return false;
        });
        $(document).ready(function() {
            $('a[data-confirm]').click(function(ev) {
                var href = $(this).attr('href');
                if (!$('#confirm-delete').length) {
                    $('body').append('<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header  text-dark">Excluir <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body">Tem certeza de que deseja excluir?</div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button><a class="btn btn-danger text-white" id="dataComfirmOK">Excluir</a></div></div></div></div>');
                }
                $('#dataComfirmOK').attr('href', href);
                $('#confirm-delete').modal({
                    show: true
                });
                return false;

            });
        });
    </script>
</body>

</html>