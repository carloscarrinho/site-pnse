<?php

namespace Source\Core;

/**
 * Class Session
 * 
 * @author Carlos Eduardo F. Carrinho <carrinhoedu@gmail.com>
 * @package Source\Core
 */
class Session
{    
    /**
     * Verifica se existe uma sessão ativa, caso não houver, ele a inicia.
     *
     * @return void
     */
    public function __construct()
    {
        if(!session_id()){
            session_start();
        }
    }
    
    /**
     * Método que permite o acesso a determinada propriedade da Sessão ativa.
     *
     * @param  mixed $prop
     * @return void
     */
    public function __get($prop)
    {
        if(!empty($_SESSION[$prop])){
            return $_SESSION[$prop];
        }
        return null;
    }
    
    /**
     * TO-DO: Entender melhor o funcionamento do método mágico '__isset' 
     *
     * @param  mixed $name
     * @return void
     */
    public function __isset($name)
    {
        return $this->has($name);
    }
    
    /**
     * Método que transforma a sessão ativa de array para objeto. 
     *
     * @return null|object
     */
    public function all(): ?object
    {
        return (object)$_SESSION;
    }
    
    /**
     * Método que chave com seu valor para a sessão (em formato de objeto).
     *
     * @param  string $key
     * @param  mixed $value
     * @return Session
     */
    public function set(string $key, $value): Session
    {
        $_SESSION[$key] = (is_array($value) ? (object)$value : $value);
        return $this;
    }
    
    /**
     * Método que remove determinada chave da sessão.
     *
     * @param  string $key
     * @return Session
     */
    public function unset(string $key): Session
    {
        unset($_SESSION[$key]);
        return $this;
    }
    
    /**
     * Método que verifica se existe determinada chave na sessão ativa.
     *
     * @param  string $key
     * @return bool
     */
    public function has(string $key): bool
    {
        return isset($_SESSION[$key]);
    }
    
    /**
     * Método que renova o id da sessão ativa.
     *
     * @return Session
     */
    public function regenerate(): Session
    {
        session_regenerate_id(true);
        return $this;
    }

    public function destroy(): Session
    {
        session_destroy();
        return $this;
    }

    // TO-DO: create Message and CSRF methods.
}