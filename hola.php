<?php
//echo "Hola Mundo\n";
//@print "Hola {$argv[1]}\n";
$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
@print "Hola, {$nombre}\n";
?>
