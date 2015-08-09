<?php

/**
 * ComposicaoEndereco.class [ TIPO ]
 * Descricao
 * @copyright (c) year, Filipe Leuch Bonfim UPINSIDE
 */
class ComposicaoEndereco {
    
    private $cidade;
    private $estado;
    
    function __construct($cidade, $estado) {
        $this->cidade = $cidade;
        $this->estado = $estado;
    }
    
    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->estado;
    }


}
