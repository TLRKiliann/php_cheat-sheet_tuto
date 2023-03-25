<?php

//how to read in a nested array:
$array = [
  [
    'prenom' => 'Esteban2',
    'nom' => 'Catanea',
    'age' => 24,
    'notes' => [10, 16, 15]
  ],
  [
    'prenom' => 'Elo',
    'nom' => 'Pute',
    'age' => 33,
    'notes' => [32, 12, 33]
  ]
];

echo $array[1]['notes'][1];
print_r("\n");

?>
