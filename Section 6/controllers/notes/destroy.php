<?php
// require './core/App.php';
use Core\Database;
// use Core\App;

$db = App::resolve(Database::class);
$currentuserid = 3;
$note = $db->query(
  'SELECT * from notes where id = :id',
  ['id' => $_POST['id']])->findOrFail();
authorize($note['user_id'] ==  $currentuserid);
$db->query('DELETE from notes where id = :id', [
  'id' => $_POST['id']
]);
header('location: /notes');
exit();
