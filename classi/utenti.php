<?php

class utenti
{

    public $nome;
    public $cognome;
    public $codiceFiscale;
    public $iscritto;


    function __construct($_nome, $_cognome, $_codiceFiscale, $_iscritto)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->codiceFiscale = $_codiceFiscale;
        $this->iscritto = $_iscritto;
    }
}
