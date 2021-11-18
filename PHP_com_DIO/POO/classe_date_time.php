<?php

    //  CLASSE DATETIME E MANIPULAÇÃO DE TEMPO
    define("FORMAT_DATA", "d-m-Y H:i:s");
    define('CINCO_DIAS', 'P5D');
    define('INTERVALO', 'P1Y10M5DT3H');

    $data = new DateTime();
    $intervalo = new DateInterval(CINCO_DIAS);
    $data -> sub($intervalo);
    echo $data -> format(FORMAT_DATA) .PHP_EOL;


    $intervalo2 = new DateInterval(INTERVALO);
    $data -> sub($intervalo2);
    echo $data -> format(FORMAT_DATA);