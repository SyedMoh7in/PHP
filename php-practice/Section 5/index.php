<?php
require "core/functions.php";
// require "core/Database.php";
// require "Response.php";
require "./core/Router.php";
$router=new router();
session_start();



$routes = require "routes.php";
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method=$_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
$router->route($uri,$method);