<?php $v->layout('_theme'); ?>

<!-- FEATURE: LISTA DE COMUNIDADES -->
<h1 class="text-center">Comunidades</h1>

<article class="container-lg">
    <!-- TO-DO: Colocar um foreach para buscar da lista de comunidades -->
    <div class="church">
        <div class="church__img">
            <img src="<?= theme("/assets/img/comunidade_imaculado.jpg") ?>" alt="" height="300px">
        </div>
        <div class="church__description">
            <h2 class="church__description___title">{Nome da comunidade}</h2>
            <p class="church__description___text">{Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at nisi at leo blandit feugiat. Vestibulum elementum nulla id eros finibus, quis porttitor lectus tincidunt. Integer ornare semper enim. Integer vitae malesuada urna. Nam luctus euismod consectetur. Suspendisse potenti. Quisque tristique bibendum odio, at condimentum tortor tempus eu. Suspendisse ante ex, sodales vitae enim nec, congue iaculis odio. Proin elit risus, gravida quis ullamcorper non, tempus nec neque. Nulla ut sapien at nisl volutpat pretium. In ultricies neque porttitor pretium ullamcorper. Cras ullamcorper est sed pulvinar vulputate.} </p>
            <footer class="church__footer">
                <p class="church__footer___info">{Endereço da comunidade} | {Animador da comunidade}</p>
            </footer>
        </div>
    </div>
</article>