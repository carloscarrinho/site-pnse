<?php require "top.php"; ?>
    <title>Landing Page</title>
</head>
<body>
    <!-- INÍCIO DO CABEÇALHO -->
    <header>
        <!-- MENU DE NAVEGAÇÃO -->
        <?php include_once "templates/menu-navegacao.php"; ?>
        
        <!-- CARROUSEL COM IMAGENS DAS COMUNIDADES -->
        <?php include_once "templates/carousel-principal.php"; ?>
        
    </header>

    <!-- INÍCIO DO CONTEÚDO PRINCIPAL -->
    <main>
        <!-- SEÇÃO DE NOTÍCIAS -->
        <?php include "templates/secao-noticias.php"; ?>
        
        <!-- SEÇÃO ACESSO A INFORMAÇÃO -->
        <?php include "templates/servicos.php"; ?>

        <!-- FORMULÁRIO FALE CONOSCO -->
        <?php include "templates/formulario-modal.php"; ?>
        
        <!-- NEWSLETTER -->

    </main>

    <!-- INÍCIO DO RODAPÉ -->
    <footer class="bg-success text-light m-0 p-2">
        <!-- RODAPÉ -->
        <?php include "templates/footer.php"; ?>
    
    </footer>
<?php require "bottom.php";?>