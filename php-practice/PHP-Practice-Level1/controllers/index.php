<?php
// require "functions.php";

$heading="Home";
    require "views/index.view.php";
    require"Database.php";

    //Connect to MYSQL Database and Execute a Query
    //PDP(PHP Data Objects)


    $config=require"config.php";

    $db=new Database($config['database']);
    $posts=$db->query("select * from posts ")->fetchAll();



  
    
    dd($posts);
    ?>