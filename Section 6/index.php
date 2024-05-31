<?php
require "core/functions.php";
// require "core/Database.php";
// require "Response.php";
require "./core/Router.php";
require "bootstrap.php";
// use Core\Database;
session_start();

$router=new router();

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method=$_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$routes = require "routes.php";

$router->route($uri,$method);