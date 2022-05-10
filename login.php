<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./meuCss/myStyle.css"/>
        <title>Login</title>
    </head>
    <body>
       <section class="container">
           <div class="container-area">
               <div class="item">
                   <div class="bg-item">

                   </div>
               </div>
               <div class="item">
                   <form method="POST" action="pesquisarOcorrencia.php">
                       <div class="form-icon">
                            <div class="form-icon-area">
                                <img src="img/im1.png" alt="icon"/>
                            </div>
                       </div>
                   <div class="area-input">
                       <div class="icon-input">
                            <img src="img/user.png" alt="usuario img"/>
                       </div>
                       <input type="text" name="usuario" placeholder="Digite seu usuário" class="usuario">
                    </div>
                    <div class="area-input">
                    <div class="icon-input">
                            <img src="img/pass.png" alt="usuario senha"/>
                       </div>
                       <input type="password" name="usuario" placeholder="Digite sua senha." class="senha">
                    </div>
                    <div class="botao">
                        <button>Acessar</button>
                        <a href="#">Esqueceu sua senha?</a>
                    </div>
                   </form>
                   <div class="nova-conta">
                        <a href="" >Cria nova conta</a>
                   </div>
                  
               </div> <!-- FIM ITEM DIREITA-->
           </div>
       </section>

       <script src="js/meuScript.js"></script>

    </body>
</html>