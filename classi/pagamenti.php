<?php




class pagamenti extends Utente
{

    public $numeroCarta;
    public $iban;
    public $cvv;
    protected $scadenza;


    function __construct($_numeroCarta, $_iban, $_cvv, $_scadenza)
    {
        $this->numeroCarta = $_numeroCarta;
        $this->iban = $_iban;
        $this->cvv = $_cvv;
        $this->scadenza = $_scadenza;
    }



    public function verificaCarta()
    {

        if ($this->scadenza > date("Y")) {
            echo ('<p> pagamento ok </p>');
        } else {
            echo ('<p> Pagamento fallito. La carta di credito è scaduta! </p>');
        }
    }
};
