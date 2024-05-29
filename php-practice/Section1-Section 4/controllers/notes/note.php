<?php
// require "functions.php";
require "core/Database.php";
require "core/Response.php";
$config = require('config.php');
$db = new Database($config['database']);
$currentUserId=3;
// if($_SERVER['REQUEST_METHOD']=='POST')
// {
//     $note = $db->query("select * from notes where  id = :id" , [
 
//         'id'=> $_GET['id']
//         ])->find();
        
        
    
//         if($note['user_id'] == $currentUserId)
//         {
//             abort(Response::FORBIDDEN);
//         }

//     $db->query("delete from notes where id = :id",[
//         "id"=> $_GET["id"]
//     ]);

//     header('location: /notes');
//     exit();
// }
// else{
$heading = " Note";

$note = $db->query("select * from notes where  id = :id" , [
 
    'id'=> $_GET['id']
    ])->find();
    
    
    authorize( $note['user_id']== $currentUserId);
    // if($note['user_id'] == $currentUserId)
    // {
    //     abort(Response::FORBIDDEN);
    // }
// }
// dd($notes);
require "views/notes/note.view.php";