<?php
# Write a PHP program to sort elements in an array in ascending order.
$vigo=array("kaushik","sunil","amit","anmol");
sort($vigo);
$arryleng = count($vigo);
for($x = 0; $x < $arryleng; $x++) {
  echo $vigo[$x];
  echo "<br>";
}
 ?>
