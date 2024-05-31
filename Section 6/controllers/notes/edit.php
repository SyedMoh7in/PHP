<?php
// require 'core/Database.php';
// require './core/App.php';
require './controllers/Validator.php';
use Core\Database;
// use Core\App;
$db=App::resolve(Database::class);
$currentUserId=3;

$note = $db->query("SELECT * from notes where  id = :id" , [
 
    'id'=> $_GET['id']
    ])->findOrFail();
    
$heading = "Edit a Note";
$note='note';
$errors = [];

require "views/notes/edit.view.php";
