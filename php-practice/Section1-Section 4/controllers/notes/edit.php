<?php
require 'core/Database.php';
require '../PHP-Practice-Level1/controllers/Validator.php';
$config = require 'config.php';

$db = new Database($config['database']);
$currentUserId=3;


$note = $db->query("select * from notes where  id = :id" , [
 
    'id'=> $_GET['id']
    ])->findOrFail();
    
    

    // if($note['user_id'] == $currentUserId)
    // {
    //     abort(Response::FORBIDDEN);
    // }

$heading = "Edit a Note";
$note='note';
$errors = [];


require "views/notes/edit.view.php";