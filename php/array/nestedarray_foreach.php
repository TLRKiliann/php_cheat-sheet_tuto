<?php

$newArr = [
  "hommes" => ["Gill", "Ben", "Esteban"],
  "femmes" => ["Celestine", "Jenna", "Sophie"],
  "class" => [1, 2, 3],
];

$caller = $newArr["hommes"][2];
$secCaller = $newArr["femmes"][0];

$together = [$caller, $secCaller];
print_r($together);

foreach($newArr as $elements) {
  foreach($elements as $key => $v) {
    echo "result is here : " . $v . "\n";
  }
}

?>
