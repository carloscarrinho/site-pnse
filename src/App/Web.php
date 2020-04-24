<?php

namespace Source\App;

use Source\Core\Controller;
use stdClass;

class Web extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }

    public function home(): void
    {
        // echo "<h1>Teste</h1>";
        $head = $this->seo->render(
            CONF_SITE_NAME . " | " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/img/share.jpg")
        );

        echo $this->view->render("home", [
            "head" => $head
        ]);        
    }

    public function patroness(): void
    {
        $head = $this->seo->render(
            "A Padroeira | " . CONF_SITE_NAME,
            CONF_SITE_DESC,
            url("/padroeira"),
            theme("/assets/img/share.jpg")
        );

        echo $this->view->render("patroness", [
            "head" => $head
        ]);        
    }

    public function churches(): void
    {
        $head = $this->seo->render(
            "Comunidades | " . CONF_SITE_NAME,
            CONF_SITE_DESC,
            url("/comunidades"),
            theme("/assets/img/share.jpg")
        );

        echo $this->view->render("churches", [
            "head" => $head
        ]); 
    }

    public function pastorals(): void
    {
        $head = $this->seo->render(
            "Pastorais | " . CONF_SITE_NAME,
            CONF_SITE_DESC,
            url("/pastorais"),
            theme("/assets/img/share.jpg")
        );

        echo $this->view->render("pastorals", [
            "head" => $head
        ]); 
    }

    public function blog()
    {
        $head = $this->seo->render(
            "Blog | " . CONF_SITE_NAME,
            CONF_SITE_DESC,
            url("/blog"),
            theme("/assets/img/share.jpg")
        );

        echo $this->view->render("blog", [
            "head" => $head
        ]);
    }

    public function tithe(): void
    {
        $head = $this->seo->render(
            "Dízimo | " . CONF_SITE_NAME,
            CONF_SITE_DESC,
            url("/dizimo"),
            theme("/assets/img/share.jpg")
        );

        echo $this->view->render("tithe", [
            "head" => $head
        ]); 
    }

    public function error(array $data): void
    {
        $error = new stdClass();
        $error->code = $data['errcode'];
        $error->title = "Oops! Conteúdo indisponível :/";
        $error->message = "Sentimos muito, mas o conteúdo que você tentou acessar não existe, está temporariamente indisponível ou foi removido";
        $error->linkTitle = "Continue Navegando";
        $error->link = url_back();

        $head = $this->seo->render(
            "{$error->code} | {$error->title}",
            $error->message,
            url("/ops/{$error->code}"),
            theme("/assets/img/share.jpg"),
            false
        );

        echo $this->view->render("error", [
            "head" => $head,
            "error" => $error
        ]);        
    }
}
