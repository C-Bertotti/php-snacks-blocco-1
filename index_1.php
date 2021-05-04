<?php
/*
    Passare come parametri GET name, mail e age e
    verificare (cercando i metodi che non
    conosciamo nella documentazione) che:
    1. name sia più lungo di 3 caratteri,
    2. mail contenga un punto e una chiocciola
    3. age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti
    “Accesso negato”
*/

var_dump($_GET);

$email_check = strpos( ($_GET['email']), '.' && ($_GET['email']), '@');

if ( strlen($_GET['name']) > 3 && $email_check !== false && is_int($_GET['age']) ) {
    echo "accesso consentito";
} else {
    echo "accesso negato";
}


// var_dump(strlen($_GET['name']));



?>