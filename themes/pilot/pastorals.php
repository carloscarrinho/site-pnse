<?php $v->layout('_theme'); ?>

<h1 class="text-center">Movimentos & Pastorais</h1>
<article class="container-lg">
    <!-- TO-DO: Colocar um foreach para buscar da lista de comunidades -->
    <div class="pastoral">
        <img class="pastoral__img" src="<?= theme("/assets/img/comunidade_imaculado.jpg") ?>" alt="">
        <div class="pastoral__description">
            <h2 class="pastoral__description___title">{Nome da pastoral}</h2>
            <p class="pastoral__description___text">{Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at nisi at leo blandit feugiat. Vestibulum elementum nulla id eros finibus, quis porttitor lectus tincidunt. Integer ornare semper enim. Integer vitae malesuada urna. Nam luctus euismod consectetur. Suspendisse potenti. Quisque tristique bibendum odio, at condimentum tortor tempus eu. Suspendisse ante ex, sodales vitae enim nec, congue iaculis odio. Proin elit risus, gravida quis ullamcorper non, tempus nec neque. Nulla ut sapien at nisl volutpat pretium. In ultricies neque porttitor pretium ullamcorper. Cras ullamcorper est sed pulvinar vulputate.} </p>
            <footer class="pastoral__footer">
                <p class="pastoral__footer___info">{Coordenador da pastoral} | {e-mail para contato}</p>
            </footer>
        </div>
    </div>
</article>