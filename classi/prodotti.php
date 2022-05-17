<?php

class prodotto
{
    public $nomeProdotto;
    public $marca;
    public $descrizione;
    public $prezzo;

    function __construct($_nomeProdotto, $_marca, $_descrizione, $_prezzo)
    {
        $this->nomeProdotto = $_nomeProdotto;
        $this->marca = $_marca;
        $this->descrizione = $_descrizione;
        $this->prezzo = $_prezzo;
    }
};
