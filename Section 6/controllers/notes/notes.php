<?php
// require "functions.php";
// require "core/Database.php";
// require './core/App.php';
use Core\Database;
// use Core\App;
$db=App::resolve(Database::class);

$heading = " My Notes";
$notes = $db->query("SELECT * from notes ")->get();
require "views/notes/notes.view.php";

