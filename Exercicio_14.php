<?php

for ($i = 1; $i <= 5; $i++) {
	for ($j = 1; $j <= $i; $j++) {
		echo "*";
	}

	echo PHP_EOL;

	if ($i == 5) {
		$i = 0;
	}
}

?>
