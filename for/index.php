<?php

// Desafio: colocar 10 traços seguidos em 10 linhas diferentes

$num = 15;
$line = "-";

if($num < 10) {
for ($i = 0; $i <= 10; $i++) {
  for ($i2 = 0; $i2 <= 10; $i2++) {
    echo $line;
  }
  echo "<br>";
}
}

?>