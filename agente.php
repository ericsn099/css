<style>
    body {
        background: #59ABE3;
        margin: 0
    }

    .form {
        background: #e6e6e6;
        border-radius: 8px;
        box-shadow: 0 0 40px -10px #000;
        margin-top: 5px;
        margin-left: 10px;
        padding: 2px 2px;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
        position: relative
    }

    h3 {
        margin: 7px 0;
        padding-bottom: 5px;
        width: 300px;
        color: #78788c;
        text-align: center;
        border-bottom: 3px solid #78788c
    }

    input {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        background: none;
        outline: none;
        resize: none;
        border: 0;
        font-family: 'Montserrat', sans-serif;
        transition: all .3s;
        border-bottom: 2px solid #bebed2
    }

    input:focus {
        border-bottom: 2px solid #78788c
    }

    p:before {
        content: attr(type);
        display: block;
        margin: 28px 0 0;
        font-size: 14px;
        color: #5a5a5a
    }

    button {
        float: right;
        padding: 8px 12px;
        margin: 8px 0 0;
        font-family: 'Montserrat', sans-serif;
        border: 2px solid #78788c;
        background: 0;
        color: #5a5a6e;
        cursor: pointer;
        transition: all .3s
    }

    button:hover {
        background: #78788c;
        color: #fff
    }

    @media (min-width: 375px) {
        body {
            background: #59ABE3;
            margin: 0
        }

        .divform form {
            width: 25%;
            height: 75%;
            background: #e6e6e6;
            border-radius: 8px;
            box-shadow: 0 0 40px -10px #000;
            margin-top: 90px;
            margin-left: 500px;
            padding: 10px 20px;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
            position: relative
        }

        h3 {
            margin: 7px 0;
            padding-bottom: 5px;
            width: 300px;
            color: #78788c;
            text-align: center;
            border-bottom: 3px solid #78788c
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            background: none;
            outline: none;
            resize: none;
            border: 0;
            font-family: 'Montserrat', sans-serif;
            transition: all .3s;
            border-bottom: 2px solid #bebed2
        }

        input:focus {
            border-bottom: 2px solid #78788c
        }

        p:before {
            content: attr(type);
            display: block;
            margin: 28px 0 0;
            font-size: 14px;
            color: #5a5a5a
        }

        button {
            float: right;
            padding: 8px 12px;
            margin: 8px 0 0;
            font-family: 'Montserrat', sans-serif;
            border: 2px solid #78788c;
            background: 0;
            color: #5a5a6e;
            cursor: pointer;
            transition: all .3s
        }

        button:hover {
            background: #78788c;
            color: #fff
        }
    }
</style>
<div class="divform">
    <form class="form" method="POST" action="cadastro_agente.php">
        <h3>CADASTRO DE AGENTE</h3>
        <p><input placeholder="NOME" name="nome"></input></p>
        <p><input placeholder="CPF" name="cpf"></input></p>
        <p><input placeholder="exemplo@email.com" name="email"></input></p>
        <p><input placeholder="LOGIN" name="login"></input></p>
        <p><input placeholder="SENHA" name="senha"></input></p>
        <button type="submit">CADASTRAR</button>
    </form>
</div>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>