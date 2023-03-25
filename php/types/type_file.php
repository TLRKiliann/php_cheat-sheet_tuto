<?php
//strict mode
declare(strict_types=1);

function first (string $phrase): bool {
	//return boolean
}

function second (string $phrase): array {
	//return array
}

//result of next line cannot be returned in strict mode.
second(2.1);
?>
