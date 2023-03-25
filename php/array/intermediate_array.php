<?php
//check type
declare(strict_types=1);

$myarray = [
	"men" => "Brian",
	"woman" => "Francine"
];

print_r($myarray);

$mysecondarray = [
	"class1" => "Nathan",
	"class2" => "Noelia"
];

print_r($mysecondarray);

foreach($mysecondarray as $key => $mysecond) {
	echo $key . " " . $mysecond . "\n";
}

//another manner with array_push()
$newArray = [];
$add_newArray = array_push($newArray, "22", "Doug");
print_r($add_newArray);
print_r($newArray);
var_dump($add_newArray);
var_dump($newArray);

$lastArray = [];
$arrayPush = array_push($lastArray, 1);
print_r($lastArray);
var_dump($lastArray);

//another example to add key value into an array
$exampleArray = [
	"domain1" => "127",
	"domain2" => "777"
];

$exampleArray["domain3"] = "192";
print_r($exampleArray);

?>
