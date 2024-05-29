<?php
require "core/Database.php";
require "core/Response.php";
require "controllers/Validator.php";
$config = require('config.php');
$db = new Database($config['database']);
use Core\Validator;
$currentUserId=3;
// Find the coressponding Note
$note = $db->query("SELECT * from notes where  id = :id" , [
 
    'id'=> $_POST['id']
    ])->findOrFail();
    
//Authorize that the user can edit it
authorize($note['user_id']==$currentUserId);
//Validate the form
$errors=[];
if(! validator::string($_POST['body'], 1 , 1000)){
    $errors['body']= 'A body of no more than 1000 is required';
 }
//If no validation errors update the record in the database
if(count($errors)){
    return require 'views/notes/edit.view.php';
}

$db->query('UPDATE notes set body = :body where id = :id',[
    'id'=> $_POST['id'],
    'body'=> $_POST['body']
]);

//redirect the user
header('location: /notes');
die();


// require "../webpage/core/validator.php";
// use core\database;
// use core\validator;
// use core\App;
// $db = App::resolve(database::class);
// $currentuserid = 1;
// $note = $db->query(
//     'SELECT * from notes where id = :id',
//     ['id' => $_POST['id']]
// )->findorfail();
// authorize($note['user_id'] ===  $currentuserid);
// $errors=[];
// if(! validator::string($_POST['body'], 1 , 1000)){
//     $errors['body']= 'A body of no more than 1000 is required';
//  }
//  if(count($errors)){
//     return " /Section-1-PHP/webpage/note/edit.php";
//  }
//  $db->query('update notes set body=:body where id = :id',[
//     'id'=>$_POST['id'],
//     'body'=> trim($_POST['body']),
//  ]);
//  header('location: /Section-1-PHP/webpage/notes');
//  die();