<?php
try {
    $bdd = new PDO('mysql:localhost; bdname=yugioh; charset=utf8', 'cyprien', 'Brother97.4')
} catch (exception $e) {
    die (exception $e)
}

?>