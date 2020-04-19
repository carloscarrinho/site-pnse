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

