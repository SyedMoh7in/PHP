<?php
//Set Cookie
setcookie("Name", "Mohsin", time() + 86400 * 30, "/");

if (isset($_COOKIE["Name"])) {
    echo  $_COOKIE["Name"];
}
//Delete a Cookie
setcookie("Name","", time() - 86400,"/");
