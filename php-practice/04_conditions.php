<?php
// $age = 20;
// if ($age >= 18) {
//     echo "You can legally drive";
// } else if ($age <= 17) {
//     echo "You can't legally drive";
// }
// $date=date(("H"));
// if($date<12)
// {
//     echo "Good Morning";
// }
// else if($date< 17)
// {
//     echo "Good Afternoon";
// }
// else{
//     echo "Good Night";
// }
// $posts = ["First Post"];
// if (!empty($posts)) {
//     echo $posts[0];
// } else {
//     echo "No Posts";
// }
//Means Same as above:
// echo !empty($posts) ? $posts[0] :"No Post";

//Switch Statement
$fav_color = "Blue";
switch ($fav_color) {
    case "Red":
        echo "Your Favourite Color is red";
        break;
    case "Blue":
        echo "Your Favourite Color is Blue";
        break;
    case "Green":
        echo "Your Facourite Colour is Green";
        break;
    default:
        echo "Your favourite colour is not from RGB";
        break;
}
