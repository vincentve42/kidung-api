<?php



class SuplemenService extends Service{
    
    static function searchById($param, $database)
    {
        $stmt = $database->prepare("SELECT * FROM suplemen WHERE no_kidung LIKE ?");

        $stmt->execute(["%$param%"]);
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Authorization");
        header('Content-Type: application/json');

        

        return json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
    }
    static function searchByName($param, $database)
    {
        $stmt = $database->prepare("SELECT * FROM suplemen WHERE judul LIKE ? OR isi LIKE ?");
        
        $param = urldecode($param);

        $search = "%$param%";

        $stmt->bindParam(1, $search, PDO::PARAM_STR);

        $stmt->bindParam(2, $search, PDO::PARAM_STR);

        $stmt->execute();
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Authorization");
        header('Content-Type: application/json');

        return json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));

    }
}