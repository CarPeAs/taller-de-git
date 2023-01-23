<?php
// Autor: Carlos Pérez @correo
//echo "Hola Mundo\n";
//@print "Hola {$argv[1]}\n";
// El nombre por defecto es Mundo
// Este comentario está mal y hay que borrarlo
$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
@print "Hola, {$nombre}\n";
?>
