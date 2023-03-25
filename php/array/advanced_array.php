<?php
declare(strict_types=1);

$array_test = ["John", "Clara", "Celestine"];
var_dump($array_test);

$second_array = [
	"class1" => "Celestine",
	"class2" => "Romain"
];

var_dump($second_array);

foreach($second_array as $key => $second)
{
	echo $second . "\n" . $key . "(les clefs)\n";
}

echo "\n";

$third_array = ["Anastasia", "Bulma"];

foreach($third_array as $elements)
{
	echo $elements . "\n";
}

echo "\n";

//Add
array_push($array_test, "banana");
var_dump($array_test);

$second_array["class3"] = "Jessica";
foreach($second_array as $key => $second)
{
	echo $second . "\n" . $key . "(les clefs)\n";
}
var_dump($second_array);

echo "\n";

//Remove
unset($second_array["class3"]);

foreach($second_array as $key => $elements)
{
	echo $elements . "\n" . $key . "(les clefs)\n";
}

var_dump($second_array);

//splice
array_splice($array_test, -1, 1, ["tranx", "cool"]);
var_dump($array_test);

//slice
print_r(array_slice($array_test, 2, -1, true));

?>
