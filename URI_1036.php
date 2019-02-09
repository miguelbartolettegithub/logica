<?php

$A = $argv[1];
$B = $argv[2];
$C = $argv[3];
$delta = ($B * $B) - (4 * $A * $C);

if ($delta >= 0 && $A != 0) {
    //Raiz com a soma do delta
    $R1 = (-$B + sqrt($delta)) / (2 * $A);
    //Raiz com a subtracao do delta
    $R2 = (-$B - sqrt($delta)) / (2 * $A);
    
    $format = 'R1 = %01.5f; R2 = %01.5f';
    echo sprintf ($format, $R1, $R2) . PHP_EOL;
    
} else {
    echo "Impossivel calcular" . PHP_EOL;
}
?>
