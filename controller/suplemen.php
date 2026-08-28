<?php


class SuplemenController extends Controller
{
    public function __construct($params, $database)
    {
        if(is_numeric($params))
        {
            echo SuplemenService::searchById($params,$database);
        }
        else
        {
            echo SuplemenService::searchByName($params, $database);
        }
    }
}

?>