<?php
// if ($uri === "/") {
//     require "controllers/index.php";
// } else if ($uri === "/about") {
//     require "controllers/about.php";
// } else if ($uri == "/contact") {
//     require "controllers/contact.php";
// } else if ($uri == "/notes") {
//     require "controllers/notes.php";
// }
//  else if ($uri == "/note") {
//     require "controllers/note.php";
// }
// return
//     [
//         '/' => 'controllers/index.php',
//         '/about' => 'controllers/about.php',
//         '/notes' => 'controllers/notes/notes.php',
//         '/note' => 'controllers/notes/note.php',
//         '/contact' => 'controllers/contact.php',
//         '/notes/create' => 'controllers/notes/note-create.php',
//     ];

    $router->get('/','controllers/index.php');
    $router->get('/about','controllers/about.php');
    $router->get('/contact','controllers/contact.php');

    $router->get('/notes','controllers/notes/notes.php');
    $router->get('/note','controllers/notes/note.php');
    $router->get('/notes/create','controllers/notes/note-create.php');


    $router->delete('/note','controllers/notes/destroy.php');

    $router->get('/note/edit','controllers/notes/edit.php');
    
    $router->patch('/note','controllers/notes/update.php');