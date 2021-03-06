<?php

/**
 * AssociacaoLogin.class [ TIPO ]
 * Descricao
 * @copyright (c) year, Filipe Leuch Bonfim UPINSIDE
 */
class AssociacaoLogin {

    /**
     *
     * @var AssociacaoCliente 
     */
    private $cliente;
    private $login;

    function __construct($cliente) {
        if (is_object($cliente)):
            $this->cliente = $cliente;
            $this->login = true;
        else:
            die('Erro ao logar!');
        endif;
    }

    function getCliente() {
        return $this->cliente;
    }
    
    function getLogin() {
        return $this->login;
    }    

}
