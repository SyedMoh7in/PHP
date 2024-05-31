<?php
// require "core/Database.php";
require "core/Response.php";
require "controllers/Validator.php";
// require './core/App.php';
use Core\Database;
// use Core\App;

$db=App::resolve(Database::class);
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

