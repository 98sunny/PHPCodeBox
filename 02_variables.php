<?php

// What is a variable

// Variable types
// String,Integer,Float,Boolean,Null, Array,Object,Resource

// Declare variables
$name='Sunny';
$age=23;
$isMale=true;
$height=5.11;
$salary=null;

// Print the variables.
echo $name.'<br>';
echo $age.'<br>';
echo $isMale.'<br>';
echo $height.'<br>';
echo $salary.'<br>';
echo '<br><br>';
// Print types of the variables
echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($isMale).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>';
echo '<br><br>';
// Print the whole variable
echo var_dump($name).'<br>';
echo var_dump($age).'<br>';
echo var_dump($height).'<br>';
echo var_dump($isMale).'<br>';
echo var_dump($height).'<br>';

// Change the value of the variable
$name=28;

// Print type of the variable
echo "Var type of name variable is :: ".gettype($name);
// Variable checking functions
echo is_string($name).'<br>';
// Check if variable is defined
echo var_dump(isset($address)).'<br>';
echo var_dump(isset($name)).'<br>'; 
// echo $address;
// Constants
// constants are immutable variables
define('PI',3.1413);
echo PI.'<br>';
echo defined('PI').'<br>';
// defined(PI3);
// Using PHP built-in constants
echo PHP_INT_MAX;