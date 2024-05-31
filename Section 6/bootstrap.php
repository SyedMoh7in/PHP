<?php
require "./core/App.php";
require "./core/Container.php";
require "./core/Database.php";

use Core\Container;
use Core\Database;
//use Core\App;

$container = new Container();
$container->bind('Core\Database', function () {
    $config = require("./config.php");
    return new Database($config['database']);
});
App::setContainer($container);
