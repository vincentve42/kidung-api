<?php



class KidungService extends Service{
    
    static function searchById($param, $database)
    {
        $stmt = $database->prepare("SELECT * FROM kidung WHERE no_kidung=?");

        $stmt->bindParam(1, $param, PDO::PARAM_INT);

        $stmt->execute();

        header('Content-Type: application/json');
        
        return json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
    }
    static function searchByName($param)
    {

    }
}