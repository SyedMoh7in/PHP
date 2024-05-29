<?php
require "./core/App.php";
require "./core/Container.php";
require "./core/Database.php";

use Core\Container;
use Core\App;
use Core\Database;

$container = new Container();
$container->bind('Core\Database', function () {
    $config = require("./PHP-Practice-Level1/config.php");
    return new Database($config['database']);
});
App::setContainer($container);
