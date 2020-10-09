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

        .documentos,
        .endereco {
            display: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Vikings</a>
    </nav>

    <main role="main" class="container">

        <div class="starter-template">
            <h4>Dados do funcionário</h4>
            <hr>
        </div>

        <form action="../../index.php?controller=save" method="post" class="" enctype="multipart/form-data">
            <h5 class="py-3">Dados pessoais</h5>
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="">Nome</label>
                    <input type="text" name="nome" class="form-control" required>
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
                    <input type="text" name="nome_conjuge" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <label for="">Data de nascimento</label>
                    <input type="text" name="dt_nascimento" class="form-control" required>
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
                    <input type="text" name="escolaridade" class="form-control" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="">Naturalidade</label>
                    <input type="text" name="naturalidade" class="form-control" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="">Foto</label>
                    <input type="file" name="picture" class="form-control" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="">Nome do mae</label>
                    <input type="text" name="nome_mae" class="form-control" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="">Nome do pai</label>
                    <input type="text" name="nome_pai" class="form-control" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="">Telefone fixo</label>
                    <input type="text" name="tel" class="form-control" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="">Celular</label>
                    <input type="text" name="cel" id="cel" class="form-control" required>
                </div>
            </div>
            <div class="documentos mb-5">
                <h5 class="py-3">Documentos</h5>
                <div class="row">
                    <div class="from-group col-md-2">
                        <label for="">CPF</label>
                        <input type="text" name="cpf" class="form-control" required>
                    </div>
                    <div class="from-group col-md-2">
                        <label for="">PIS</label>
                        <input type="text" name="pis" class="form-control" required>
                    </div>
                    <div class="from-group col-md-2">
                        <label for="">RG</label>
                        <input type="text" name="rg" class="form-control" required>
                    </div>
                    <div class="from-group col-md-2">
                        <label for="">Titulo</label>
                        <input type="text" name="titulo" class="form-control" required>
                    </div>
                    <div class="from-group col-md-1">
                        <label for="">Zona e.</label>
                        <input type="text" name="zona_e" class="form-control" required>
                    </div>
                    <div class="from-group col-md-1">
                        <label for="">Seçao e.</label>
                        <input type="text" name="secao_e" class="form-control" required>
                    </div>
                    <div class="from-group col-md-2">
                        <label for="">Resevista</label>
                        <input type="text" name="resevista" class="form-control">
                    </div>
                    <div class="from-group col-md-2 mt-3">
                        <label for="">CNH</label>
                        <input type="text" name="cnh" class="form-control">
                    </div>
                    <div class="from-group col-md-2 mt-3">
                        <label for="">CPTS</label>
                        <input type="text" name="cpts" class="form-control" required>
                    </div>
                    <div class="from-group col-md-2 mt-3">
                        <label for="">CPTS série</label>
                        <input type="text" name="cpts_serie" id="cpts_serie" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="endereco mb-5">
                <h5 class="py-3">Endereço</h5>
                <div class="row">
                    <div class="form-group col-md-2">
                        <label for="">CEP</label>
                        <input type="text" name="cep" class="form-control" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Endereço</label>
                        <input type="text" name="endereco" class="form-control" required>
                    </div>
                    <div class="form-group col-md-1">
                        <label for="">Numero</label>
                        <input type="text" name="numero" class="form-control" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Bairro</label>
                        <input type="text" name="bairro" class="form-control" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Cidade</label>
                        <input type="text" name="cidade" class="form-control" required>
                    </div>
                    <div class="form-group col-md-1">
                        <label for="">Estado</label>
                        <input type="text" name="estado" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center py-4">
                <button type="submit" class="btn btn-success" id="salvar">Salvar dados</button>
            </div>
        </form>
        <!-- <a href="../../index.php?controller=list">Listar</a> -->
    </main><!-- /.container -->
    <script>
        const doc = document.getElementById('cel');
        const cpts_series = document.getElementById('cpts_serie');

        doc.onblur = function() {
            document.querySelector('.documentos').style.display = "block";
        }
        cpts_series.onblur = function() {
            document.querySelector('.endereco').style.display = "block";
            $('.btn-success').css("pointer-events", "all");
            $('.btn-success').css("background-color", "green");
        }
    </script>
</body>

</html>