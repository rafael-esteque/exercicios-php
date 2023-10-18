<?php

$numeros = [1, 2, 3, 4, 5];
$numeros[] = 6;
$numeros[1] = 22;

unset($numeros[0]);

var_dump($numeros);