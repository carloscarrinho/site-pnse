<?php

/**
 * ##################
 * ###  VALIDATE  ###
 * ##################
 */

 
/**
 * Função 'Helper' para validação de e-mail;
 * recebe uma string e verifica se é um e-mail utilizando a validação default do PHP.
 *
 * @param  string $email
 * @return bool
 */
function is_email(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Função 'Helper' para validação de senha;
 * recebe uma string e verifica se ela atende aos requisitos definidos no Config.php
 *
 * @param  string $password
 * @return bool
 */
function is_passwd(string $password): bool
{
    if(password_get_info($password)['algo']){
        return true;
    }

    if(mb_strlen($password) >= CONF_PASSWD_MIN_LEN && mb_strlen($password) <= CONF_PASSWD_MAX_LEN){
        return true;
    }
}


/**
 * ################
 * ###  STRING  ###
 * ################
 */


/**
 * Função 'Helper' que cria uma string concatenada com hifens para criação de URLs.
 *
 * @param  string $string
 * @return string
 */
function str_slug(string $string): string
{
    $string = filter_var(mb_strtolower($string), FILTER_SANITIZE_STRIPPED);
    $formats = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
    $replace = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';

    $slug = str_replace(["-----", "----", "---", "--"], "-",
        str_replace(" ", "-",
            trim(strtr(utf8_decode($string), utf8_decode($formats), $replace))
        )
    );
    return $slug;
}

/**
 * Função 'Helper' que cria strings no formato StudlyCase.
 * recebe uma string e a converte no formato StudlyCase para criação de classes.
 *
 * @param  string $string
 * @return string
 */
function str_studly_case(string $string): string
{
    $string = str_slug($string);
    $studlyCase = str_replace(" ", "",
        mb_convert_case(str_replace("-", " ", $string), MB_CASE_TITLE)
    );

    return $studlyCase;
}

/**
 * Função 'Helper' que cria strings no formato Camel Case, para criação de variáveis.
 * recebe string, torna a primeira letra lowercase e reutiliza a função StudlyCase para as demais.
 *
 * @param  string $string
 * @return string
 */
function str_camel_case(string $string): string
{
    return lcfirst(str_studly_case($string));
}

/**
 * Função 'Helper' que cria uma string toda em UPPERCASE para criação de títulos.
 * recebe string, filtra caracteres especiais e aplica o formato MB_CASE_TITLE do PHP.
 *
 * @param  mixed $string
 * @return string
 */
function str_title(string $string): string
{
    return mb_convert_case($string, filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS), MB_CASE_TITLE);
}

/**
 * Função 'Helper' que limita a saída da string informada a partir de uma quantidade limite de palavras.
 * recebe a string a cortar, um limite de palavras e, eventualmente, um 'pointer' para colocar no final. 
 *
 * @param  string $string
 * @param  int $limit
 * @param  string $pointer
 * @return string
 */
function str_limit_words(string $string, int $limit, string $pointer = "..."): string
{
    $string = trim(filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS));
    $arrWords = explode(" ", $string);
    $numbOfWords = count($arrWords);
    
    if($numbOfWords < $limit){
        return $string;
    }

    $words = implode(" ", array_slice($arrWords, 0, $limit));
    return "{$words} {$pointer}";
}

/**
 * Função 'Helper' que limita a saída da string informada a partir de uma quantidade limite de caracteres.
 * recebe a string a cortar, um limite de caracteres e, eventualmente, um 'pointer' para colocar no final. 
 *
 * @param  string $string
 * @param  int $limit
 * @param  string $pointer
 * @return string
 */
function str_limit_chars(string $string, int $limit, string $pointer = "..."): string
{
    $string = trim(filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS));
    
    if(mb_strlen($string <= $limit)){
        return $string;
    }

    $chars = mb_substr($string, 0, mb_strrpos(mb_substr($string, 0, $limit), " "));
    return "{$chars} {$pointer}";
}

