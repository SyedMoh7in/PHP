<?php
require 'core/Database.php';
require '../PHP-Practice-Level1/controllers/Validator.php';
$config = require 'config.php';
$db = new Database($config['database']);

$heading = "Create a Note";
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A body of no more than 1,000 is required.';
    }
    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => trim($_POST['body']),
            'user_id' => 1,
        ]);
    }
}
require "views/notes/note-create.view.php";
