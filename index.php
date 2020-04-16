<?php

require __DIR__ . "/vendor/autoload.php";

$string = "Exemplo de string para função str_slug";

var_dump(
    str_slug($string),
    str_studly_case($string),
    str_camel_case($string)
);


