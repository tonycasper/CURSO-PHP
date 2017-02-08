<?php
$contador;

for ($contador=0; $contador < 100 ; $contador++) {
  if ($contador % 4 === 0) {
    echo "PIN \n";
  }else {
    echo "$contador \n";
  }
}
