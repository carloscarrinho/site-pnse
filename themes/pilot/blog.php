<?php $v->layout('_theme'); ?>

<!-- FEATURE: PÁGINA DO BLOG -->
<section class="blogPage bg-success">
    <header class="blogPage__header">
        <h1 class="blogPage__title">BLOG</h1>
        <p class="blogPage__subtitle">Fique por dentro de tudo que acontece na paróquia</p>
        <div class="blogSearch">
            <form 
                class="form my-2 my-lg-0" 
                name="search" 
                action="<?= url("/blog"); ?>" 
                method="post" 
                enctype="multipart/form-data"
            >
            <label class="blogSearch">
                <input 
                    class="formSearch__item form-control mr-sm-2" 
                    type="text" name="s" placeholder="Encontre um artigo"
                />
                <button class="btn btn-light my-2 my-sm-0">Pesquisar</button>
            
            </label>
            </form>
        </div>
    </header>
</section>