<?php
// $fruits = ["Apple", "Banana", "Pear", "Peach"];
// $fruits[] = "grape";
// array_push( $fruits,"Blueberry");
// array_unshift( $fruits,"Mango");
// print_r($fruits);
// array_shift($fruits);
// print_r($fruits);

//Array Merge
// $arr1=[1,2,3];
// $arr2=[4,5,6];
// $arr3=array_merge($arr1,$arr2);
// $arr4=[...$arr1,...$arr2];
// print_r($arr3);
// print_r($arr4);

//Array Combine(Takes Array as key)
// $arr1 = ["First Name", "Second Name", "Age"];
// $arr2 = ["Mohsin", "Raza", "21"];
// $arr3 = array_combine($arr1, $arr2);
// $keys = array_keys($arr3);
// $flipped= array_flip($arr3);
// print_r($arr3);
// print_r($keys);
// print_r($flipped);
// $numbers=range(1,20);
// print_r($numbers);
$numbers = range(1, 20);
$new_numbers = array_map(function ($number) {
    return "Number $number ";
}, $numbers);
print_r($new_numbers);
