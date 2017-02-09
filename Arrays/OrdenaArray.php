<?php
$vetor = array('b','a','e','d');

//function arrumando($vetor){
//  var_dump($vetor);
//}
asort($vetor);

var_dump($vetor);

for ($i=0; $i < count($vetor); $i++) {
  echo "a letra asort $vetor[$i] esta na posicao $i\n";
}

foreach ($vetor as $numero) {
  echo "a letra asort $numero esta na posicao\n";
}
 ?>
