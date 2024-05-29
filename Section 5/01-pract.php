<?php
echo "Hello, " . " World";
$greeting = "Welcome";
echo $greeting . " " . "Everyone";
$book = "The Alchemist";
$read = true;
if ($read) {
    echo "You have read  " . $book;
} else {
    echo "You havent read " . $book;
}
$cars = ["Mercedes", "BMW", "Honda"];
echo $cars[1];

//Associative Arrays(Giving keys to array elements)

$books = [
    [
        "name" => "Alchemist",
        "author" => "Paulho Coellho"
    ],
    [
        "name" => "Android Dev",
        "author" => "Paulho Coellho"
    ],
    [
        "name" => "Web Dev",
        "author" => "Paulho Coellho"
    ],
];
print_r($books[1]["name"]);

/*Lambda Functions are anonymous functions without a name.
 They can be assigned to  a variable*/
?>