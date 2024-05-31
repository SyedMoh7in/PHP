<?php

// namespace Core;
require './controllers/Validator.php';
// require './core/App.php';
use Core\Database;
// use Core\App;


class Authenticator
{
    public function attempt($email,$password)
    {
        $user= App::resolve(Database::class)->query('SELECT * FROM users where email = :email',[
    'email'=> $email,])->find();
    if($user)
{
    //Check if the passsword provided matches or not
    if(password_verify($password, $user['password']))
{
    $this->login([
        "email"=> $email
    ]);
    return true;
}
}
return false;
}
 public function login($user)
{
  $_SESSION['user'] = [
     'email'=>$user['email']
  ];
  session_regenerate_id(true);
}
 public function logout()
{
  $_SESSION=[];
session_destroy();
  $params=session_get_cookie_params();
setcookie('PHPSESSID','',time()-3600,$params['path'],$params['domain'],$params['secure'],$params['httponly']);
}
}

