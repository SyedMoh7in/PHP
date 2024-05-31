<?php
require './core/Authenticator.php';
require './Http/Forms/LoginForm.php';
// use Core\Authenticator;
use Http\Forms\LoginForm;
$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();
if ($form->validate($email, $password)) {
    $auth = new Authenticator();

if ($auth->attempt($email, $password)) {
    redirect('/');
}
else{
    $form->error('email','No matching account found for that email and password');
}
}

$_SESSION['errors']=$form->errors();
return require './controllers/sessions/create.php';

