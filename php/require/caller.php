<?php
require 'fileTwo.php';

echo $salut;

$func = content_call();
var_dump($func);

$mynewclass = new my_class("Emilya", "jolie");
var_dump($mynewclass);
?>
