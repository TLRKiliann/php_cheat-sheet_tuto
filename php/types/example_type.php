<?php

declare(strict_types=1);

function call_for_test (int $passed_value) : string | int {
	$phrase = "Hello";
	return $phrase . " " . $passed_value . "\n";
}

$return_phrase = call_for_test(33);
echo $return_phrase;

$num = 22;

print_r($num);

?>
