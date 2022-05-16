<?php


class pagamenti extends utenti
{

    public $numeroCarta;
    public $iban;
    public $cvv;
    public $scadenza;


    function __construct($_numeroCarta, $_iban, $_cvv, $_scadenza)
    {
        $this->numeroCarta = $_numeroCarta;
        $this->iban = $_iban;
        $this->cvv = $_cvv;
        $this->scadenza = $_scadenza;
    }
}
