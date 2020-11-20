<?php
# Write a PHP program to check prime number.
$n=13;

for ($i=2; $i <$n; $i++) { 
    if($n% $i==0){

         echo "not prime";
            break;
    }
   
}
if($n==$i){
    echo "prime";
}
?>