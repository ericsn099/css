<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    /* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
    simplesmente não fazer o login e digitar na barra de endereço do seu navegador
    o caminho para a página principal do site (sistema), burlando assim a obrigação de
    fazer um login, com isso se ele não estiver feito o login não será criado a session,
    então ao verificar que a session não existe a página redireciona o mesmo
    para a index.php.
    session_start();
    if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
        header('location:index.php');
    }

    $logado = $_SESSION['login'];*/
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="meuEstilo4.css" />
    <title>Cadastro de ocorrência</title>
</head>
<?php
include "conexao.php";

$sqlBairro = "SELECT * FROM bairro";
//$sqlRua = "SELECT * FROM rua ";
$sqlTipo = "SELECT * FROM situacao";

$dados = mysqli_query($conn, $sqlBairro);
//$dados2 = mysqli_query($conn, $sqlRua);
$dados3 = mysqli_query($conn, $sqlTipo);
?>

<body>
    <div class="ocorrencia">
        <div class="ocorrencia-area">
            <div class="ocorrencia-img">

            </div>
        </div>
        <div class="ocorrencia-form">
            <form action="cadastro_ocorrencia.php" method="POST">
                <div class="form-img">
                    <div class="form-img-area">
                        <img src="img/logo_css.png" alt="Imagem logo">
                    </div>
                </div>
                <div class="form-item">
                    <label for="">Bairros</label>
                    <select id="sl_bairros" name='cmbairros'>
                        <option>Selecione..</option>
                        <?php
                        while ($linha = mysqli_fetch_assoc($dados)) {
                            $idBairro = $linha['id'];
                            $nome = $linha['nomeBairro'];
                            echo "<option value='$idBairro'> $nome </option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-item">
                    <label for="">Ruas</label>
                    <select class="custom-select form-select" id="sl_ruas" name='cmrua'>
                        <option selected disabled>Selecione..</option>
                        <?php
                        /*while ($linha = mysqli_fetch_assoc($dados2)) {
                                $nome = $linha['nome'];
                                echo "<option  value='" . $linha['id_bairro'] . "' data-bairro='" . $linha['id_bairro'] . "'> $nome </option>";
                            }*/
                        ?>
                        </option>
                    </select>
                </div>
                <div class="form-item">
                    <label for="">Tipo de Ocorrência</label>
                    <select id="sl_ocorrencias" name='cmocorrencia'>
                        <option>Selecione..</option>
                        <?php
                        while ($linha = mysqli_fetch_assoc($dados3)) {
                            $nome = $linha['tipo'];
                            echo "<option  value='" . $linha['id'] . "'> $nome </option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-item">
                    <div class="ball">
                        <div data-key="1" name="verde" class="item"></div>
                        <div data-key="2" name="amarelo" class="item"></div>
                        <div data-key="3" name="vermelho" class="item"></div>
                        <select name="nivel">
                            <option>Nível de Ocorrência</option>
                            <option value="1">Verde (Seguro)</option>
                            <option value="2">Amarelo (Alerta)</option>
                            <option value="3">Vermelho (Perigo)</option>
                        </select>
                    </div>
                </div>
                <div class="form-item">
                    <label>Publicação</label>
                    <textarea name="publicacao" require></textarea>
                </div>
                <div class="botoes">
                    <button type="submit">Salvar</button>
                    <button><a href="index.php"> Ocorrencias </a></button>
                </div>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#sl_bairros").change(function() {
                var id_bairro = $(this).val();
                $("#sl_ruas option").remove();

                //$("#sl_ruas option[data-bairro='" + id_bairro + "']").show();

                $.ajax({
                    type: 'post',
                    url: 'ajax/getRuas.php',
                    data: {
                        "id_bairro": $("#sl_bairros").val(),
                        "ruas_option": "select"
                    },
                    dataType: 'json',
                    success: function(data) {
                        $("#sl_ruas").append(data.ruas);
                    }
                });
            })
        })
    </script>
</body>

</html>