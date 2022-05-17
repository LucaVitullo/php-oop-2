<!-- immagina le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
Dividete bene in classi e implementate gli attributi e i metodi necessari per il corretto funzionamento dell'e-commerce. 
Il focus è sulla parte di slide condivisa oggi su Drive.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto) -->
<?php

include_once 'classi/users.php';

function var_dump_pre($showOff)
{
    echo '<pre>';
    var_dump($showOff);
    echo '</pre>';
};

$user1 = new User();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://boolean.careers/favicon/favicon.ico">
    <title>PHP oop-2</title>
</head>

<body>
    <h1>E-Commerce</h1>
    <div class="e-commerce">
        <?php
        var_dump_pre($user1);

        ?>
    </div>
</body>

</html>