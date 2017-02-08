<?php
$contador;

for ($i=0; $i < 10; $i++) {
  for ($contador=0; $contador < 50 ; $contador++) {
    for ($i=0; $i < $contador; $i++) {
      echo '*';
    }
    echo "\n";
  }
  echo "\n";
}
