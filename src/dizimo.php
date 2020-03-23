<?php require "top.php";?>
    <title>Padroeira</title>
</head>
<body>
    <!-- INÍCIO DO CABEÇALHO -->
    <header>
        <!-- MENU DE NAVEGAÇÃO -->
        <?php include_once "templates/menu-navegacao.php"; ?>

    </header>
    <main>
        <form class="form-container" action="">
            <div class="standard-form">
                <div class="standard-form__input-one-third">
                    <label for="first_name">Nome</label>
                    <input class="standard-form__input___box" type="text" id="first_name">
                </div>
                
                <div class="standard-form__input-one-third">
                    <label for="last_name">Sobrenome</label>
                    <input class="standard-form__input___box" type="text" id="last_name">
                </div>
                
                <div class="standard-form__input-one-third">
                    <label for="cpf">CPF</label>
                    <input class="standard-form__input___box" type="text" id="cpf">
                </div>
    
                <div class="standard-form__input-one-third">
                    <label for="email">E-mail</label>
                    <input class="standard-form__input___box" type="email" id="email">                
                </div>
    
                <div class="standard-form__input-one-third">
                    <label for="street">Rua</label>
                    <input class="standard-form__input___box" type="text" id="street">
                </div>

                <div class="standard-form__input-one-third">
                    <label for="number">Número</label>
                    <input class="standard-form__input___box" type="text" id="number">
                </div>
                
                <div class="standard-form__input-one-third">
                    <label for="complement">Complemento</label>
                    <input class="standard-form__input___box" type="text" id="complement">
                </div>
                
                <div class="standard-form__input-one-third">
                    <label for="zip_code">CEP</label>
                    <input class="standard-form__input___box" type="text" id="zip_code">
                </div>

                <div class="standard-form__input-one-third">
                    <label for="neighborhood">Bairro</label>
                    <input class="standard-form__input___box" type="text" id="neighborhood">
                </div>
    
                <div class="standard-form__input-one-third">
                    <label for="city">Cidade</label>
                    <input class="standard-form__input___box" type="text" id="city">
                </div>

                <div class="standard-form__input-one-third">
                    <label for="state">Estado</label>
                    <input class="standard-form__input___box" type="text" id="state">
                </div>

                <div class="standard-form__input-one-third">
                    <label for="country">País</label>
                    <input class="standard-form__input___box" type="text" id="country">
                </div>
            </div>

            <div class="standard-form__button">
                <button class="standard-form__button___button" type="submit">Enviar</button>
            </div>
        </form>
    </main>

    <footer class="bg-success text-light m-0 p-2">
        <?php include "templates/footer.php"; ?>
    </footer>

</body>
<?php require "bottom.php";?>
