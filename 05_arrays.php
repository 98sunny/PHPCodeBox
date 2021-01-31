<?php

// Create array
$fruits=["banana","apple","mango"];
// Print the whole array
echo '<pre>';
echo var_dump($fruits).'<br>';
echo '</pr>';

// Get element by index
echo $fruits[0].'<br>';

// Set element by index
$fruits[0]='Peach';
echo var_dump($fruits);
// Check if array has element at index 2

echo var_dump(isset($fruits[0])).'<br>';

echo var_dump(isset($fruits[6])).'<br>';

// Append element
$fruits[]='peach';
echo var_dump($fruits);
// Print the length of the array
echo count($fruits).'<br>';
// Add element at the end of the array
array_push($fruits,'grapes');
echo var_dump($fruits);
// Remove element from the end of the array
array_pop($fruits);
echo var_dump($fruits);
// Add element at the beginning of the array
 array_unshift($fruits,'Lichie');
// Remove element from the beginning of the array
array_shift($fruits);
// Split the string into an array
$vehicle="cars,bike,van,ships, tractors";
echo'<pre>';
var_dump(explode(",",$vehicle));
echo '</pre>';
print_r($vehicle);

// Combine array elements into string
echo implode(",",$fruits).'<br>';
// Check if element exist in the array
echo '<pr>';
var_dump(in_array('mango',$fruits));
var_dump(in_array('car',$fruits));
echo '</pr>';
// Search element index in the array
echo '<pr>';
var_dump(array_search('mango',$fruits));
echo '</pr>';

// Merge two arrays
$words=['Zebra'];

echo'<pre>';
var_dump(array_merge($words,$fruits));
echo '</pre>';
// Sorting of array (Reverse order also)
sort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';
// Filter, map, reduce of array
$numbers=[1,2,3,4,5,6,7,8];
$evens=array_filter($numbers,function($n){
    return $n%2==0;
});
echo '<pre>';
var_dump($evens);
echo '</pre>';


// $squares=array_map(fn($n)=>$n+1,$numbers);
// echo '<pre>';
// var_dump($squares);
// echo '</pre>';
//I dont know why I am getting error here, need to fix this block of code

// $sum = array_reduce($numbers, fn($carry, $item) => $carry + $item);
// echo $sum.'<br>';
// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Sunny',
    'surname' => 'Singh',
    'age' => 30,
    'hobbies' => ['Cooking', 'Reading'],
];

// Get element by key
echo $person['name'].'<br>';

// Set element by key
$person['channel'] = 'Brohers in Canada';
// Check if array has specific key
echo '<pre>';
var_dump(isset($person['age']));  // Change age into "location"
echo '</pre>';

echo '<pre>';
var_dump(isset($person['nationality']));  // Change age into "location"
echo '</pre>';
// Print the keys of the array
echo '<pre>';
var_dump(isset($person['age']));  // Change age into "location"
echo '</pre>';
// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';
// Sorting associative arrays by values, by keys
ksort($person); // ksort, krsort, asort, arsort
echo '<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays
$todoItems = [
    ['title' => 'Todo1', 'completed' => true],
    ['title' => 'Todo 2', 'completed' => false],
];

echo '<pre>';
var_dump($todoItems);
echo '</pre>';
