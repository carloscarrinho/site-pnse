<?php

use MatthiasMullie\Minify\CSS;

if(strpos($_SERVER['HTTP_HOST'], "localhost")){
    /**
     * CSS
     */
    $minCSS = new CSS();
    $minCSS->add(__DIR__ . "/../../shared/styles/global.css");
    $minCSS->add(__DIR__ . "/../../shared/styles/styles.css");
    $minCSS->add(__DIR__ . "/../../shared/styles/formularios.css");

    // theme
    $cssDir = scandir(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/assets/css");
    foreach ($cssDir as $css) {
        $cssFile = __DIR__ . "/../themes/" . CONF_VIEW_THEME . "/assets/css/{$css}";
        if(is_file($cssFile) && pathinfo($cssFile)['extension'] == "css"){
            $minCSS->add($cssFile);
        };
    }

    // Minify CSS
    $minCSS->minify(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/assets/style.css");


    /**
     * JS
     */
    

}