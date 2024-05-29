<?php
require "core/Database.php";
// require "core/functions.php";
require "controllers/Validator.php";
use Core\Database;
use Core\Validator;
$config =require ("config.php");
$db =new database($config['database']);
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
     

// require "./core/validator.php";
// use core\validator;
// use core\database;
// use core\App;
// $db = App:: resolve(database::class);
//     $errors=[];
//     if(! validator::string($_POST['body'], 1 , 1000)){
//        $errors['body']= 'A body of no more than 1000 is required';
//     }
//     if(!empty($errors))
//     {
//            return require "../webpage/view/notes/create.view.php";
//     }
//        $db->query('INSERT INTO NOTES(body,user_id) VALUES (:body, :user_id )', [
//            'body'=> $_POST['body'],
//            'user_id'=> 1
//        ]);
//        header('location:  /Section-1-PHP/webpage/notes');
//        die();
   

