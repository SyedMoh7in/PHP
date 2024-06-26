<?php
namespace Core\Middleware;
class Middleware
{
    public const MAP =[
        'guest'=>Guest::class,
        'auth'=> Auth::class,
    ];

    public  function resolve($key)
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