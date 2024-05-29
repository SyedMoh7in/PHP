<?php
// require "functions.php";

$heading = "Home";
require "views/index.view.php";
require "../PHP-Practice-Level1/core/Database.php";

//Connect to MYSQL Database and Execute a Query
//PDP(PHP Data Objects)


$config = require "config.php";

// $db = new Database($config['database']);
// $id = $_GET['id'];
// $query = 'select * from notes where id = :id';
// $posts = $db->query($query, ['id' => $id])->find();





// dd($posts);
