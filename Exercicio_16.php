<?php

$fibonaccis = array();
$fibonaccis[0] = 0;
$fibonaccis[1] = 1;

echo "Fibonacci 1 = " . "$fibonaccis[0]" . PHP_EOL;
echo "Fibonacci 2 = " . "$fibonaccis[1]" . PHP_EOL;

for ($i = 2; $i < 10; $i++) {
	$fibonaccis[$i] = $fibonaccis[$i - 1] + $fibonaccis[$i - 2];
	echo "Fibonacci $i + 1 = $fibonaccis[$i]" . PHP_EOL;
}

?>
