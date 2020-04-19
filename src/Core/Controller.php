<?php

namespace Source\Core;

use Source\Support\Seo;

class Controller
{
    protected $view;
    protected $seo;

    public function __construct(string $pathToViews = null)
    {
        $this->view = new View();
        $this->seo = new Seo();
    }
}