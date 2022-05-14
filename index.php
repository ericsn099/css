<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="meuCss/meuEstilo3.css" />
    <title>Pesquisar Ocorrência</title>
</head>

<body>
    <?php

    $pequisa = $_POST['busca'] ?? '';

    $sql = "SELECT publicacaoagente.datahora, publicacaoagente.id,bairro.nomeBairro, rua.nome, publicacaoagente.nivel, publicacaoagente.publicacao from bairro,rua,publicacaoagente  where bairro.id = publicacaoagente.id_bairro and rua.id = publicacaoagente.id_rua and bairro.nomeBairro like '%$pequisa%' order by publicacaoagente.id desc";
    $dados = mysqli_query($conn, $sql);
    ?>
    <header>
        <form action="" method="POST">
            <input type="Text" name="busca" placeholder="Digite um bairro" />
            <button type="submit">Procurar</button>
        </form>

        <div class="menu">
            <div class="menu-icon">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </header>

    <section class="dashbord">
        <div class="dashbord-area">
            <div class="dash-item">
                <div class="dash-info">
                    <h3>Asssalto</h3>
                    <?php $sql2 = "SELECT COUNT(id_situacao) as soma FROM publicacaoagente WHERE id_situacao = 1";
                    $dados3 = mysqli_query($conn, $sql2);
                    ?>
                    <?php
                    while ($linha = mysqli_fetch_assoc($dados3)) {
                        $nome = $linha['soma'];
                        echo "<div class='qtd'> $nome </div>";
                    }
                    ?>
                </div>
            </div>
            <div class="dash-item">
                    <h3>Furto</h3>
                    <?php $sql2 = "SELECT COUNT(id_situacao) as soma FROM publicacaoagente WHERE id_situacao = 2";
                    $dados3 = mysqli_query($conn, $sql2);
                    ?>
                    <?php
                    while ($linha = mysqli_fetch_assoc($dados3)) {
                        $nome = $linha['soma'];
                        echo "<div class='qtd'> $nome </div>";
                    }
                    ?>
            </div>
            <div class="dash-item">
                <div class="dash-info">
                    <h3>Tentativa de Asssalto</h3>
                    <?php $sql2 = "SELECT COUNT(id_situacao) as soma FROM publicacaoagente WHERE id_situacao = 3";
                    $dados3 = mysqli_query($conn, $sql2);
                    ?>
                    <?php
                    while ($linha = mysqli_fetch_assoc($dados3)) {
                        $nome = $linha['soma'];
                        echo "<div class='qtd'> $nome </div>";
                    }
                    ?>
                </div>
            </div>
            <div class="dash-item">
                <div class="dash-info">
                    <h3>Suspeitos</h3>
                    <?php $sql2 = "SELECT COUNT(id_situacao) as soma FROM publicacaoagente WHERE id_situacao = 4";
                    $dados3 = mysqli_query($conn, $sql2);
                    ?>
                    <?php
                    while ($linha = mysqli_fetch_assoc($dados3)) {
                        $nome = $linha['soma'];
                        echo "<div class='qtd'> $nome </div>";
                    }
                    ?>
                </div>
            </div>
            <div class="dash-item">
                <div class="dash-info">
                    <h3>Perda de documentos</h3>
                    <?php $sql2 = "SELECT COUNT(id_situacao) as soma FROM publicacaoagente WHERE id_situacao = 5";
                    $dados3 = mysqli_query($conn, $sql2);
                    ?>
                    <?php
                    while ($linha = mysqli_fetch_assoc($dados3)) {
                        $nome = $linha['soma'];
                        echo "<div class='qtd'> $nome </div>";
                    }
                    ?>
                </div>
            </div>
            <div class="dash-item">
                <div class="dash-info">
                    <h3>Tiroteio</h3>
                    <?php $sql2 = "SELECT COUNT(id_situacao) as soma FROM publicacaoagente WHERE id_situacao = 6";
                    $dados3 = mysqli_query($conn, $sql2);
                    ?>
                    <?php
                    while ($linha = mysqli_fetch_assoc($dados3)) {
                        $nome = $linha['soma'];
                        echo "<div class='qtd'> $nome </div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <aside>
        <div class="menu-lateral">
            <nav>
                <ul>
                    <li>
                        <a href="login.php">Entrar</a>
                    </li>
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="">Gerenciar publicações</a>
                    </li>
                    <li>
                        <a href="">Ver dados</a>
                    </li>
                    <li>
                        <a href="">Delegacia virtual</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <?php

    while ($pub = mysqli_fetch_assoc($dados)) {

        $id = $pub['id'];
        $bairro = $pub['nomeBairro'];
        $rua = $pub['nome'];
        $nivel = $pub['nivel'];
        $publicacao = $pub['publicacao'];
        $datahora = $pub['datahora'];

        if ($nivel == 1) {
            $nivel  = "<div class='opcao' style='background: green'> </div>";
        } else if ($nivel == 2) {
            $nivel  = "<div class='opcao' style='background: yellow'> </div>";
        } else {
            $nivel  = "<div class='opcao' style='background: red'> </div>";
        }

        echo            "
    <section class='publicacoes '>
        
        <div class='ocorrencia'>
            <div class='oc-header'>
               <div class='leftSide'> $datahora</div>
               <div class='rightSide'>
                <button><i class='fa-solid fa-pen'></i></button>
                <button><i class='fa-solid fa-rectangle-xmark'></i></button>
                </div>
            </div>
            <div class='oc-titulo'>
                $bairro, $rua <br> 
                $nivel
            </div>
            <div class='oc-body'>
                <p>
                $publicacao
                </p>
            </div>
            <div class='oc-footer'>
                <div class='oc-f-icon'>
                    <div class='qtd-like qtd-like-on'></div>
                    <button class='like'><i class='fa-solid fa-thumbs-up'></i></button>
                    <span>Curti</span>

                </div>
                <div class='oc-f-icon'>
                    <button class='comentario'> <i class='fa-solid fa-message'></i></button>
                    <span>Comentar</span>
                </div>
                <div class='oc-f-icon'>
                    <button> <i class='fa-solid fa-share-from-square'></i></button>
                    <span>Compartilhar</span>
                </div>
            </div>
        </div>
        <div class='comentar'>
            <div class='comentario-area'>
                <div class='inserir-comentario'>
                    <div class='fechar-cometario'>
                        <button class='fechar-c' onclick='closeComentario()'>
                            <img src='img/fechar.png' alt='fechar comentario'>
                        </button>
                    </div>

                    <div class='comentarios-area'>
                        jasjajs
                    </div>
                    <form>
                        <textarea>

                    </textarea>
                        <button>
                            <img src='img/enviar.png' alt='enviar Mensagem'/>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <script src='./js/pesquisarOcorrencia.js'></script>
        ";
    } ?>
    </div>
    </section>
</body>

</html>