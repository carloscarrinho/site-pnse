<?php $v->layout('_theme'); ?>

<!-- FEATURE: CARROUSEL COM IMAGENS DAS COMUNIDADES -->
<div id="carouselExampleCaptions" class="carousel slide" data-interval="7000" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img 
                src="<?= theme("/assets/img/nossa-senhora-aparecida-1.jpg"); ?>" 
                class="d-block w-100 imagem-carrossel" 
                alt="..."
            >
        </div>
        <div class="carousel-item">
            <img 
                src="<?= theme("/assets/img/nossa-senhora-esperanca-1.jpg"); ?>" 
                class="d-block w-100 imagem-carrossel" 
                alt="..."
            >
        </div>
        <div class="carousel-item">
            <img 
                src="<?= theme("/assets/img/santa-maria-1.jpg"); ?>" 
                class="d-block w-100 imagem-carrossel" 
                alt="..."
            >
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- FEATURE: SEÇÃO DE NOTÍCIAS -->
<section class="container-fluid bg-light">
    <!-- INÍCIO DA CHAMADA DE NOTÍCIAS -->
        <div class="row">
            <div class="p-4 col-12 col-md-12">
                <h1 class="text-center">Principais notícias</h1>
                <p class="text-center text-secondary">Fique por dentro dos principais acontecimentos de nossa paróquia e sociedade católica!</p>
            </div>
        </div>
    <!-- FIM DA CHAMADA DE NOTÍCIAS -->

    <!-- CAROUSEL DE NOTICIAS -->
        <div class="row justify-content-center">
            <div id="carrossel-noticia" 
            class="carousel slide col-12 col-md-10 p-2" 
            data-interval="10000" 
            data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carrossel-noticia" data-slide-to="0" class="active"></li>
                    <li data-target="#carrossel-noticia" data-slide-to="1"></li>
                    <li data-target="#carrossel-noticia" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img 
                        src="<?= theme("/assets/img/cf-banner-2020-02.jpg"); ?>" 
                        class="d-block w-100 imagem-carrossel-noticias" 
                        alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <!-- <h2 class="display-3">Campanha da Fraternidade 2020</h2>
                            <p>"Viu, sentiu compaixão e cuidou dele."(Lc 10:33-35)</p> -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img 
                        src="<?= theme("/assets/img/comunicado-coronavirus-2020.png"); ?>" 
                        class="d-block w-100 imagem-carrossel-noticias" 
                        alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <!-- <h2 class="display-3">Second slide label</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img 
                        src="<?= theme("/assets/img/quaresma-2020-01.jpg"); ?>" 
                        class="d-block w-100 imagem-carrossel-noticias" 
                        alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="display-3">Quaresma</h2>
                            <p>Tempo de Conversão</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carrossel-noticia" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carrossel-noticia" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    <!-- FIM DO CAROUSEL DE NOTÍCIAS -->
</section>

<!-- FEATURE: SEÇÃO DE ACESSO À INFORMAÇÃO -->
<section class="container-fluid p-5">
    <!-- ÍCONES DE SERVIÇOS -->
    <div class="row">
            <div class="p-4 col-12 col-md-12">
                <h1 class="text-center">Acesso à informação</h1>
                <!-- <p class="text-center text-secondary">Encontre o que você deseja!</p> -->
            </div>
        </div>

    <div class="row">
        <div class="p-4 col-12 col-md-4 col-lg-2">
            <div class="">
                <a class="" href="#">
                    <div class="text-center">
                        <img src="<?= theme("/assets/img/calendar.svg"); ?>"  width="74">
                    </div>
                    <div class="">
                        <p class="text-center p-2">Agenda</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="p-4 col-12 col-md-4 col-lg-2">
            <a class="" href="http://www.catolicoorante.com.br/liturgia_diaria.php" target="_blank">
                <div class="text-center">
                    <img src="<?= theme("/assets/img/lectern.svg"); ?>" alt="icon-liturgia" width="74">
                </div>
                <div class="desc_wrapper">
                    <p class="text-center p-2">Liturgia</p>
                </div>
            </a>
        </div>
        
        <div class="p-4 col-12 col-md-4 col-lg-2">
            <div>
                <a class="" href="#">
                    <div class="text-center">
                        <img src="<?= theme("/assets/img/eucharist.svg"); ?>"alt="icone-missa" width="74">
                    </div>
                    <div class="">
                        <p class="text-center p-2">Missas</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="p-4 col-12 col-md-4 col-lg-2">
            <div>
                <a class="" href="#">
                    <div class="text-center">
                        <img src="<?= theme("/assets/img/church.svg"); ?>" width="74">
                    </div>
                    <div class="">
                        <p class="text-center p-2">Comunidades</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="p-4 col-12 col-md-4 col-lg-2">
            <!-- class="icon_box icon_position_top no_border" -->
            <div>
                <a class="" href="#">
                    <div class="text-center">
                        <img src="<?= theme("/assets/img/jesus.svg"); ?>" width="74">
                    </div>
                    <div class="">
                        <p class="text-center p-2">Reflexões</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="p-4 col-12 col-md-4 col-lg-2">
            <div>
                <a class="" href="#">
                    <div class="text-center">
                        <img src="<?= theme("/assets/img/balloon.svg"); ?>" width="74">
                    </div>
                    <div class="">
                        <p class="text-center p-2">Festas</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

