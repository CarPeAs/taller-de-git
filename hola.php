<?php
//echo "Hola Mundo\n";
//@print "Hola {$argv[1]}\n";
// El nombre por defecto es Mundo
$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
@print "Hola, {$nombre}\n";
?>
