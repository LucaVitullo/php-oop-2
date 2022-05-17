<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-2</title>
</head>

<body>
    <?php
    /*Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
Dividete bene in classi e implementate gli attributi e i metodi necessari per il corretto funzionamento dell'e-commerce.
Il focus è sulla parte di slide condivisa oggi su Drive.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).*/

    include 'classi/pagamenti.php.';
    include 'classi/prodotti.php';
    include 'classi/utente.php';



    $utente = new Utente('Pippo', 'Baudo', 'PPOBDO70T02F412F');

    echo "<pre>";
    var_dump($utente);
    echo "<pre>";


    $prodotto = new prodotto('collare', 'k-9', 'collare a strozzo in pelle vera', '15,80$');
    echo "<pre>";
    var_dump($prodotto);
    echo "<pre>";

    ?>
</body>

</html>