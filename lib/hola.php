<?php
// Autor: Pablo <pgargar588@g.educaand.es>
// El nombre por defecto es Mundo
require('HolaMundo.php');

print "Introduce tu nombre: ";
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);

?>
