<?php

// Declaring numbers
$a=5;
$b=4;
$c=1.2;

// Arithmetic operations
echo ($a+$b).'<br>';
echo ($a-$b).'<br>';
echo $a*$b.'<br>';
echo $a/$b.'<br>';
// Assignment with math operators
$a+=1;
$b-=2;
$c*= 2;
echo $a.'<br>';
echo $b.'<br>';
echo $c.'<br>';
// Increment operator

echo $a++.'<br>';
echo ++$a.'<br>';
// Decrement operator
echo  $b--.'<br>';
echo --$b.'<br>'; 
// Number checking functions
echo var_dump(is_float(4.1)).'<br>';
echo var_dump(is_integer(4)).'<br>';
echo var_dump(is_numeric("5.6")).'<br>';//it unwraps the string and then checks whether number or not
echo var_dump(is_numeric("g")).'<br>';
// Conversion
$number='12.34';
$fnumber=(float)$number;
$bnumber=(bool)$number;
$inumber=(int)$number;
echo $fnumber.'<br>';
echo $inumber.'<br>';
echo $bnumber.'<br>';
// Number functions
echo "abs(-15):: ".abs(-15).'<br>';
echo "pow(2,3):: ".pow(2,3).'<br>';
echo "sqrt(144)::".sqrt(144).'<br>';
echo "max(2,3):: ".max(2,3).'<br>';
echo "min(2,3):: ".min(2,3).'<br>';
echo "round(2.4)".round(2.4).'<br>';
echo "round(2.6)".round(2.6).'<br>';
echo "round(2.7)".round(2.7).'<br>';
echo "floor(2.4)".floor(2.4).'<br>';
echo "ceil(2.4)".ceil(2.4).'<br>';
// Formatting numbers
$new_number=451414861871.564145;
echo number_format($new_number).'<br>'; 

// https://www.php.net/manual/en/ref.math.php
