<?php

$cursos = array("cursodephp","python","mtematica");

$cursos[] ="Logica de programacao";

foreach ($cursos as $x => $valor){
  echo "Chave: $x, Valor: $valor".PHP_EOL;
}


for ($i=0; $i < count($cursos); $i++) {
  echo "Curso: $cursos [$i]";
}
 ?>
