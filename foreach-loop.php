<?php

$array = [
    'arma' => 'lanciafiamme',
    'primo_piatto' => 'caciocavallo',
    'mezzo_di_trasporto' => 'pony'
];

foreach ($array as $key => $value) {
    echo $key . ' - ' . $value . ', ';
}