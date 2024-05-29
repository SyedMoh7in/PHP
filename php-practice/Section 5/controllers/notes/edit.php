<?php
require 'core/Database.php';
require '../PHP-Practice-Level1/controllers/Validator.php';
$config = require 'config.php';
use Core\Database;
$db = new Database($config['database']);
$currentUserId=3;

$note = $db->query("SELECT * from notes where  id = :id" , [
 
    'id'=> $_GET['id']
    ])->findOrFail();
    
$heading = "Edit a Note";
$note='note';
$errors = [];

require "views/notes/edit.view.php";

// use Core\Database;
// use Core\App;
// $db = App::resolve(database::class);
// $currentuserid = 1;
// $note = $db->query('SELECT * from notes where id = :id', ['id' => $_GET['id']])->findorfail();
// authorize($note['user_id'] ===  $currentuserid);
// $heading="Edit Note";
// require "../webpage/view/notes/edit.view.php";