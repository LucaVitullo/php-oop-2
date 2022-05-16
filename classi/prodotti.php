<?php

class prodotti
{
    public $nome;
    public $tipoDiProdotto;
    public $descrizione;
    public $prezzo;
    public $sconto;

    function __construct($_nome, $_tipoDiProdotto, $_descrizione, $_prezzo, $_sconto)
    {
        $this->nome = $_nome;
        $this->tipoDiProdotto = $_tipoDiProdotto;
        $this->_descrizone = $_descrizione;
        $this->prezzo = $_prezzo;
        $this->sconto = $_sconto;
    }
}
