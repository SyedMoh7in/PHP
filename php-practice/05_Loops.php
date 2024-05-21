<?php
// For Loop
// for ($i = 5; $i <= 10; $i++) {
//     echo "Number : $i<br>";
// }

//While Loop
// $x=1;
// while ($x <= 15) {
//     echo "Number is: $x <br>";
//     $x++;   
// }

//Do While
// $m=1;
// do {
//     echo "Number is: $m <br>";
//     $m++;
// }
// while ($m <= 15) 

//For Each Loop(Used the most in PHP)
// $posts=["First Post","Second Post","Third Post","Fourth Post"];
// for($i= 0;$i<count($posts);$i++){
//     echo"$posts[$i]";
// }

// foreach($posts as $post) {
//     echo"$post";
// }

// foreach($posts as $index => $post) {
//     echo $index."-".$post."<br>";
// }

$person = [
    "First Name" => "Mohsin",
    "Second Name" => "Raza",
    "Email" => "rmohsin609@gmail.com",
];
foreach ($person as $key => $value) {
    echo "" . $key . "-" . $value . "<br>";
}
