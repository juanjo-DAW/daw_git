<?php
$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
include "hola.oho";
echo "Listado de personas\n";
include "persona.php";
include "persona2.php";
?>
