<?php
// require "core/Database.php";
require "controllers/Validator.php";
// require "./core/App.php";
// use Core\App;
use Core\Database;
use Core\Validator;
$db= App::resolve(Database::class);
    $errors=[];
    if(! Validator::string($_POST['body'], 1 , 1000)){
       $errors['body']= 'A body of no more than 1000 is required';
    }
    if(!empty($errors))
    {
           return require "notes/create.view.php";
    }

       $db->query('INSERT INTO notes (body,user_id) VALUES (:body, :user_id )', [
           'body'=> $_POST['body'],
           'user_id'=> 3
       ]);
       header('location: controllers/notes/create');
       die();
     


   

