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
        $contato = new \App\Dao\ContatoDao();
        foreach ($contato->findId() as $c) :
        ?>
            <div class="starter-template">
                <h4>Atualizar:
                    <?php
                    if (!empty($c['cel'])) {
                        echo $c['cel'];
                    } else {
                        echo $c['recado'];
                    }
                    ?>
                </h4>
                <a href="http://localhost/Vikings/" class="btn btn-outline-secondary mt-4">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg>
                    Voltar
                </a>
                <hr>

                <form action="" method="post" class="col-md-3">
                    <input type="hidden" name="id" id="id" value="<?php echo $c['id_contato']; ?>">
                    <div class="form-group">
                        <select name="tipo" id="tipo" class="form-control">
                            <option>--< Selecione>--</option>
                            <option value="pessoal">Pessoal</option>
                            <option value="recado">Recado</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Número</label>
                        <?php
                        if (!empty($c['cel'])) {
                            $phone =  $c['cel'];
                        } else {
                            $phone =  $c['recado'];
                        }
                        ?>
                        <input type="text" name="cel" id="cel" value="<?= $phone; ?>" class="form-control">
                    </div>
                    <button id="update" class="btn btn-primary">Atualizar</button>

                </form>

            </div>
        <?php endforeach; ?>

    </main><!-- /.container -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script>
        $('#update').click(function() {
            let id = $('#id').val();
            let tipo = $('#tipo').val();
            let cel = $('#cel').val();
            let url = 'index.php?controller=update_c&id=' + id;
            $.ajax({
                url: url,
                type: 'post',
                data: {
                    id: id,
                    tipo: tipo,
                    cel: cel
                },
                success: function(data) {
                    window.location='http://localhost/Vikings/'
                },
                error: function(data) {
                    //
                }
            });
        });
    </script>
</body>

</html>