<?php

if(Router::Get($_SERVER['REQUEST_URI'],"/kidung/", $param = Router::getParams($_SERVER['REQUEST_URI'], "/kidung/"))) 
{
    
    return new KidungController($param, $database);
}
if(Router::Get($_SERVER['REQUEST_URI'],"/suplemen/", $param = Router::getParams($_SERVER['REQUEST_URI'], "/suplemen/"))) 
{
    
    return new SuplemenController($param, $database);
}

