<?php 

class Router{
    static function Get($url,$slug, $params)
    {
        if(str_starts_with($url, $slug))
        {
            return true;
        }
        return false;
    } 
    static function getParams($fullUrl, $search)
    {
        return str_replace($search, '', $fullUrl);
    }
}


?>