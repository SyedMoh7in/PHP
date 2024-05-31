<?php
// require './core/App.php';
require './core/Authenticator.php';
// use Core\Authenticator;
use Core\Validator;
use Core\Database;
// use Core\App;


$email=$_POST['email'];
$password=$_POST['password'];
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
$user=$db->query('SELECT * from users where email = :email', [
    'email'=> $email
])->find();

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
    'password'=> password_hash($password,PASSWORD_BCRYPT) 
]);
  }

//   Mark that the user has logged in
 
$auth=new Authenticator();

$auth->login($user);
  header('location: /');
  exit();

