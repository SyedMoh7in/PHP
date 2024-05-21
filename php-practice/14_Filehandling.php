<?php
/* File Handling is the ability to read and write files on the server 
PHP has built in functions for reading and writing files */

$file="users.txt";
if(file_exists($file)){
    echo readfile($file);
}
// File Open, Read, Write, Close
if (file_exists($file)) {
    // fopen() gives you more control over the file.
    // Modes: r, w, a, x, r+, w+, a+, x+ See below for details
    $handle = fopen($file, 'r');
    // fread() reads the file and returns the content as a string on success, or FALSE on failure.
    $contents = fread($handle, filesize($file));
    // fclose() closes the file resource on success, or FALSE on failure.
    fclose($handle);
    echo $contents;
  } else {
    // Create the file
    $handle = fopen($file, 'w');
    // PHP_EOL is a constant that represents the end of line character.
    $contents = 'Brad' .  PHP_EOL . 'Sara' .  PHP_EOL . 'Mike' .  PHP_EOL . 'John';
    // fwrite() writes the contents to the file and returns the number of bytes written on success, or FALSE on failure.
    fwrite($handle, $contents);
    fclose($handle);
  }
?>