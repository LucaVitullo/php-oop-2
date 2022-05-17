<?php

class Utente
{

    public $nome;
    public $cognome;
    public $codiceFiscale;
    public $iscritto;
    public $sconto = 0;



    function __construct($_nome, $_cognome, $_codiceFiscale, bool $iscritto = true)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->codiceFiscale = $_codiceFiscale;
        $this->iscritto = $iscritto;
    }

    public function sconto()
    {
        if ($this->iscritto == true) {
            $this->sconto = 20;
        }
    }
};
