<?php
require './controllers/Validator.php';
require './core/App.php';
require './core/Database.php';
$email=$_POST['email'];
$password=$_POST['password'];

use Core\Validator;
use Core\App;
use Core\Database;
//Validate the form
$errors=[];
if(! Validator::email($email))
{
    $errors['email'] = 'Please provide a valid email address';

}
if(! Validator::string($password, 7, 255))
{
    $errors['password'] = 'Please provide a password of atleast Seven Characters';

}
if(!empty($errors))
{
    return require './views/registration/create.view.php';
};

$db= App::resolve(Database::class);
// check if account already exists
$user=$db->query('SELECT from * users where email = :email', [
    'email'=> $email
    ]
)->find();
print_r($user);

if($user)
{
     //If yes redirect to login page
    header('location: /');
    exit();
}
  else{
//    If not create it
   $db->query('INSERT into users(email,password) VALUES(:email, :password)',
[
    'email'=> $email,
    'password'=> $password
]);
  }

//   Mark that the user has logged in
  $_SESSION['user'] = [
    'email'=> $email
  ];

  header('location: /');
  exit();

