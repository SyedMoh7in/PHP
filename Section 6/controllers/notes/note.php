<?php
// require "core/Database.php";
// require "core/Response.php";
// require './core/App.php';
// use Core\App;

use Core\Database;
$db=App::resolve(Database::class);
$currentUserId = 3;
$heading = " Note";

$note = $db->query("SELECT * from notes where  id = :id", [

    'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] == $currentUserId);

require "views/notes/note.view.php";
