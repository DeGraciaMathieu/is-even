<?php

$fp = fopen('src/isEven.php', 'w');

$string = '<?php' . PHP_EOL . PHP_EOL;
$string .= 'namespace DeGraciaMathieu\IsEven;' . PHP_EOL . PHP_EOL;
$string .= 'function isEven(int $number): bool' . PHP_EOL;
$string .= '{' . PHP_EOL;

for ($i=0; $i <= 100000; $i++) { 

	$bool = ($i % 2 == 0) ? 'true' : 'false';

	$string .= "if(\$number == $i){";
	$string .= "return $bool;";
	$string .= '}';
}

$string .= '}' . PHP_EOL;

fwrite($fp, $string);

fclose($fp);
