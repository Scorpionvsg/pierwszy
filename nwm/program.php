<?php
echo "piątek 13 ";
$a=readline("podaj pierwszy numer: ");
$b=readline("podaj drugi numer: ");
$c=$a+$b;
echo "suma tych liczb to: ". $c;
$c=$a-$b;
echo "różnica tych liczb to: ". $c;
$c=$a*$b;
echo "iloczyn tych liczb to: ". $c;
if($b<=0){
  echo " nie przez zero";
}else{
$c=$a/$b;
echo "iloraz tych liczb to: ". $c;
}


?>
