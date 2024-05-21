<?php
//Two methods to define arrays:
// First one:
// $nums=[1,2,3,4,5];
//Second One:
// $fruits=array("Pear","Banana","Apple");
// var_dump($nums);
// var_dump($fruits);
// echo $fruits[0];

// Associative Array:
// $cars=[
//     1=> "Mercedes",
//     2=> "BMW",
//     3=> "Honda",
//     4=> "Toyota",
// ];
// echo $cars[3];

// Multi Dimensional Arrays:
$people_data = [
    [
        "Name" => "Mohsin",
        "Email" => "rmohsin609@gmail.com"
    ],
    [
        "Name" => "Khizer",
        "Email" => "khizer@gmail.com"
    ]
];
echo $people_data[0]["Email"];
