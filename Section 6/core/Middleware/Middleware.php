<?php
require "core/Middleware/Guest.php";
require "core/Middleware/Auth.php";
use Core\Middleware\Auth;
use Core\Middleware\Guest;
class Middleware
{
    public const MAP =[
        'guest'=>Guest::class,
        'auth'=> Auth::class,
    ];

    public static function resolve ($key)
    {
        if(! $key)
        {
            return;
        }
        $middleware= static::MAP[$key] ?? false;
        if(! $middleware)
        {
            throw new \Exception("No middleware matching found for key '{$key}'.");
        }
        (new $middleware)->handle();
    }
}