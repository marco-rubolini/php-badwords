<?php

    // Predispongo una variabile contentente un testo
    $testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

    // var_dump($testo);

    // Recupero la lunghezza del paragrafo
    $lunghezza_paragrafo = strlen($testo);
    //Stampo la lunghezza del paragrafo
    echo $lunghezza_paragrafo;
    // Recupero la badword dal parametro GET
    $badword = $_GET['badword'];
    // echo $badword;
    // Sostituisco la parola badword da censurare con *** e la stampo a video
    echo str_replace($badword, '***', $testo);




?>
