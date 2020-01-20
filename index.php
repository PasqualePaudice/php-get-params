<?php

    $testo= 'Lorem ipsum dolor sit amet, consectetur dolor adipisicing elit.';
    var_dump($testo);

    $parola_utente = $_GET['parola'];

    $testoModificato= str_replace($parola_utente, '***',$testo);

    echo '<br> ';

    var_dump($testoModificato);



 ?>
