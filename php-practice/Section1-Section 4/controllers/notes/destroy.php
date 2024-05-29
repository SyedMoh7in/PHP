<?php
// require "functions.php";
require "core/Database.php";
// require "core/Response.php";
// echo("Hello");
// $config = require('config.php');
// $db = new Database($config['database']);
// $currentUserId=3;

//     $note = $db->query("select * from notes where  id = :id" , [
 
//         'id'=> $_POST['id']
//         ])->find();
        
        
    // authorize( $note['user_id']== $currentUserId);
        // if($note['user_id'] == $currentUserId)
        // {
        //     abort(Response::FORBIDDEN);
        // }

    // $db->query("delete from notes where id = :id",[
    //     "id"=> $_POST["id"]
    // ]);

    // header('location: /notes');
    // exit();


// dd($notes);
// require "views/notes/note.view.php";

$config = require ("config.php");
$db =new Database($config['database']);
$currentuserid=3;
$note = $db->query('SELECT * from notes where id = :id',
['id'=> $_POST['id']])-> find();
authorize($note['user_id'] ===  $currentuserid);
  $db->query('delete from notes where id = :id',[
    'id'=>$_POST['id']
   ]);
    header('location: /notes');
    exit();

