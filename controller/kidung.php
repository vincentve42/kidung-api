<?php


class KidungController extends Controller
{
    public function __construct($params, $database)
    {
        if(is_numeric($params))
        {
            echo KidungService::searchById($params,$database);
        }
        else
        {
            KidungService::searchByName($params);
        }
    }
}

?>