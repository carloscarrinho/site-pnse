<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?= $head; ?>

    <link rel="icon" type="image/x-icon" href="<?= theme("/assets/images/favicon.png"); ?>">
    <link rel="stylesheet" href="<?= theme("/assets/style.css"); ?>">
    <link 
    rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
    crossorigin="anonymous">
</head>
<body>

<!-- HEADER -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed">
        <a class="navbar-brand" href="index.php">
            <img src="assets/img/woman.svg" alt="" width="45px">
        </a>
        <button 
            class="navbar-toggler" 
            type="button" 
            data-toggle="collapse" 
            data-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Página inicial<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" 
                    href="#" id="navbarDropdown" 
                    role="button" 
                    data-toggle="dropdown" 
                    aria-haspopup="true" 
                    aria-expanded="false">A Paroquia
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="padroeira.php">Padroeira</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Comunidades</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" 
                    href="#" id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown">Movimentos & Pastorais</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Coordenação</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Catequese</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Pastoral Familiar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Pastoral da Criança</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Liturgia</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Juventude</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Canto</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dizimo.php">Dízimo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#formulario-modal" href="#">Contato</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </div>
    </nav>
</header>

<!-- CONTENT -->
<main>
    <!-- FORMULÁRIO MODAL -->
    <div 
    class="modal fade" 
    id="formulario-modal" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="exampleModalLabel" 
    aria-hidden="true">
        <div class="modal-dialog" role="document">
            <dialog class="modal-content">
                <header class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Fale conosco!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </header>
                <main class="modal-body">
                    <form>
                    <div class="form-group">
                        <label for="nome-usuario">Nome</label>
                        <input type="text" class="form-control" id="nome-usuario" placeholder="Escreva seu nome aqui">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="seuemail@exemplo.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Mensagem</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escreva sua mensagem aqui" ></textarea>
                    </div>
                    </form>
                </main>
                <footer class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn botao-padrao">Enviar</button>
                </footer>
            </dialog>
        </div>
    </div>

    <?= $v->section("content"); ?>
</main>

<!-- FOOTER -->
<footer class="bg-success text-light m-0 p-2">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <section class="row justify-content-center m-0 p-3 col-12 col-md-4">
                <div class="text-center">
                    <h1>Inscreva-se!</h1>
                    <p>Receba nossas novidades por e-mail</p>
                </div>
                <div class="text-center">
                    <form>
                        <div class="form-group">
                            <label for="nome-usr-newsletter">Nome</label>
                            <input type="text" class="form-control" id="nome-usr-newsletter" placeholder="Escreva seu nome aqui">
                        </div>
                        <div class="form-group">
                            <label for="email-newsletter">Email</label>
                            <input type="email" class="form-control" id="email-newsletter" placeholder="seuemail@exemplo.com">
                        </div>
                    </form>
                </div>
            </section>
        
            <section class="row justify-content-center m-0 col-12 col-md-8">
                <div class="col-12">
                    <div class="text-center"> 
                        <img src="<?= theme("/assets/img/jesus-white.svg") ?>" class="text-light" alt="" width="200px">
                    </div>
                    <div class="text-center m-0 p-0">
                        <p class="m-0">Secretaria Paroquial:</p>
                        <p class="m-0">(27) XXXX-XXXX | XXXX-XXXX&nbsp;</p>
                        <p class="m-0">Horário de atendimento da secretaria:&nbsp;</p>
                        <p class="m-0">Segunda à Sexta: 08:00h às 12:00h | 13:30h às 19:00h</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</footer>

<script 
src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" 
crossorigin="anonymous">
</script>
<script 
src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
crossorigin="anonymous">
</script>
<script 
src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" 
crossorigin="anonymous">
</script>
<script src="<?= theme("/assets/scripts.js"); ?>"></script>
<?php $v->section("scripts"); ?>
</body>
</html>