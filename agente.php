<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="meuEstilo5.css" />
    <title>Cadastrado de Agente</title>
</head>

<body>
    <div class="ocorrencia">
        <div class="ocorrencia-area">
            <div class="ocorrencia-img">

            </div>
        </div>
        <div class="ocorrencia-form">
            <form class="form" method="POST" action="cadastro_agente.php">
                <div class="form-img">
                    <div class="form-img-area">
                        <img src="img/logo_css.png" alt="Imagem logo">
                    </div>
                </div>
                <div class="form-item">
                    <div class="icon-input">
                        <img src="img/name.png" alt="nome" />
                    </div>
                    <input type="text" placeholder="Nome" name="nome" required />
                </div>
                <div class="form-item">
                    <div class="icon-input">
                        <img src="img/cpf.png" alt="cpf" />
                    </div>
                    <input type="text" placeholder="CPF" name="cpf" required />
                </div>
                <div class="form-item">
                    <div class="icon-input">
                        <img src="img/email.png" alt="email" />
                    </div>
                    <input type="email" placeholder="exemplo@email.com" name="email" required />
                </div>
                <div class="form-item">
                    <div class="icon-input">
                        <img src="img/user.png" alt="usuario img" />
                    </div>
                    <input type="text" placeholder="Login" name="login" required />
                </div>
                <div class="form-item">
                    <div class="icon-input">
                        <img src="img/pass.png" alt="usuario img" />
                    </div>
                    <input type="password" placeholder="Senha" name="senha" required />
                </div>
                <div class="botoes">
                    <button type="submit">CADASTRAR</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>