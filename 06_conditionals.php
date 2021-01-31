<?php

$age = 20;
$salary = 300000;

// if condition
if($age=='25'){
    echo "you are 25".'<br>';
}
if($age==='25'){//check number as well as type
    echo "yyou are 25".'<br>'; 
}
else {
    
    echo "noy the value 25";
}
// if condition - else
if($age>24){
    echo "you eder";
}
else {
    
    echo "you young";
}
// if condition1 AND condition2
if ($age<22 && $salary<500000){
    echo "you are young and rich";
}else {
    echo "you are just young";
}

// if condition1 OR condition2
if ($age<22 || $salary<500000){
    echo "you are young or rich";
}else {
    echo "you are just young";
}

// if condition1 - elseif condition2 - else
if ($age<22 || $salary<500000){
    echo "you are young or rich";
}elseif ($age>22 && $salary<500000) {
    echo "you are rich";
} else{
    echo "you are just young";
}

// if condition1 and condition2 - elseif condition1 and condition2 - else
// Ternary if
echo $age<22? 'young'.'<br>' :'not young'.'<br>';

// Null coalescing operator
$myage=$age? $age:18;
echo $myage;
$myage=$age?:18;
echo $myage;
// Null coalescing assignment operator. Since PHP 7.4
  
// switch

