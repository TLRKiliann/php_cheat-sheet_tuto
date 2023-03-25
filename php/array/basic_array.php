<?php

//array_reverse()
$notes = [10, 20, 30];
$notesReversed = array_reverse($notes);
print_r($notesReversed);

//array_push()
$notes[] = 16;
array_push($notes, 18, 17);
var_dump($notes);
print_r($notes);

//array_sum()
$sum = array_sum($notes);
$count = count($notes);
echo "Vous avez" . round($sum/$count, 2) . " de moyenne\n";

//division
$counter = count($moyennes);
$average = ($sum / $counter);
echo 'Vous avez ' . $average . ' de moyenne' . "\n";

//replace word by *
$insultes = ["merde", "con"];
$asterisque = [];

foreach ($insultes as $insulte) {
  $asterisque[] = str_repeat('*', strlen($insulte));
}

$phrase = readline("Entrer une phrase avec des insultes : ");
$phrase = str_replace($insultes, $asterisque, $phrase);
echo "$phrase\n";

?>
