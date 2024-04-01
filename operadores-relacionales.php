<?php

$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

// == Igual
// var_drump( $a == $b );
// var_drump( $a == $b2 );

// === Identico
//var_drump( $a === $b );
//var_drump( $a === $b2 );

// != Diferente
// var_dump( $a != $b );
// var_dump( $a != $b2 );

// !== Diferente
// var_dump( $a !== $b );
// var_dump( $a !== $b2 );

// < Menor que
// var_dump( $a < $b );
// var_dump( $c < $b );
// var_dump( $d < $b );

// > Mayor que
// var_dump( $a > $b );
// var_dump( $c > $b );
// var_dump( $d > $b );

// >= Mayor o igual que
// var_dump( $a >= $b );
// var_dump( $c >= $b );
// var_dump( $d >= $b );

// <= Manor o igual que
// var_dump( $a <= $b );
// var_dump( $c <= $b );
// var_dump( $d <= $b );

// <=> Nave espacial

// echo 2 <=> 1; // 1
// echo 1 <=> 1; // 0
// echo -50 <=> 1; // -1

// ?? Fusion de null

$edad_de_pepito = 23;

echo $edad_de_juanito ?? $edad_de_pepito ?? $edad_de_juanito;

echo "\n";