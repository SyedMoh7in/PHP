<?php
use Core\Middleware\Auth;
use Core\Middleware\Guest;
use Core\Middleware\Middleware;
// namespace core;
// $routes = require "routes.php";

// function routeToController($uri, $routes)
// {
//     if (array_key_exists($uri, $routes)) {
//         require $routes[$uri];
//     } else {
//         abort();
//     };
// }
// function abort($code = 404)
// {
//     http_response_code($code);
//     require "views/{$code}.php";
//     die();
// }
// $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// routeToController($uri, $routes);


class router{
    protected $routes=[];

    public function add($method,$uri,$controller)
    {
        $this->routes[]=[
            'uri' =>$uri,
            'controller'=>$controller,
            'method'=> $method,
            'middleware'=> null
        ];
    }
    public function get($uri,$controller){
        $this->add('GET', $uri,$controller);
        return $this;
}
public function post($uri,$controller){
     return $this->add('POST', $uri,$controller);
}
public function delete($uri,$controller)
{
   return $this->add('DELETE', $uri,$controller);
}
public function patch($uri,$controller)
{
    return $this->add('PATCH', $uri,$controller);
}

public function only($key)
{
$this->routes[array_key_last($this->routes)]['middleware']= $key;
return $this;
}
public function put($uri,$controller)
{
   return $this->add('PUT', $uri,$controller);
}
public function route($uri,$method)
{
    foreach($this->routes as $route){
        if($route['uri']==$uri && $route['method']==strtoupper($method))
        {
            //Apply the middleware


          Middleware::resolve($route['middleware']);


            // if($route['middleware']==='guest')
            // {
            //    (new Guest)->handle();
            // }
            // if($route['middleware']==='auth')
            // {
            //   (new Auth)->handle();
            // }
            return require $route['controller'];
        }
    
    }

    $this->abort();
}
function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";
    die();
}
}