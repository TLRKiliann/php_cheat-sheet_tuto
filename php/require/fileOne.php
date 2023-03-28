<?php

function ma_func($name) {
	$arr = [];
	$compteur = 0;
	while ($compteur < 4) {
		for ($i = 0; $i <= 3; $i++) {
			echo ' tour : ' . $i . "\n";
			$arr[] += $i;
			echo ' result : ' . $i . "\n";
			$compteur++;
		}
	}
	return $arr;
}

$newFuncName = ma_func("nom");
var_dump($newFuncName);

echo "Second PART !\n";

function superidfunction($newVal): string {
	return $newVal;
}

$varCase = readline("Combien ? oui ou merde : ");

switch($varCase) {
	case "oui":
		echo "varCase vaut : " . $varCase . "\n";
		var_dump(superidfunction($varCase));
		break;
	case "merde":
		echo "fault\n";
		var_dump(superidfunction($varCase));
		break;
	default:
		echo "default\n";
}

echo "Third PART !\n";

class myclass {

	public $varVal;
	public $secVal;
	private $newVal = "ouiii";

	public function __construct($varVal, $secVal, $newVal) {
		$this->varVal = $varVal;
		$this->secVal = $secVal;
		$this->newVal = $newVal;
	}
}
$arg = "no";
$callclass = new myclass($arg, "pk", "banana");
var_dump($callclass);

?>