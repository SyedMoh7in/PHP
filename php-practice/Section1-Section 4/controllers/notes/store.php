<?php
require "\core\Database.php";
require "\core\functions.php";

$config =require ("config.php");
$db =new database($config['database']);
    $errors=[];
    if(! validator::string($_POST['body'], 1 , 1000)){
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
       header('location: /notes/store');
       die();
?>