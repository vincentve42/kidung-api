<?php



class KidungService extends Service{
    
    static function searchById($param, $database)
    {
        $stmt = $database->prepare("SELECT * FROM kidung WHERE no_kidung LIKE ?");

        $stmt->execute(["%$param%"]);

        header('Content-Type: application/json');

        

        return json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
    }
    static function searchByName($param, $database)
    {
        $stmt = $database->prepare("SELECT * FROM kidung WHERE judul LIKE ? OR isi LIKE ?");
        
        $param = urldecode($param);

        $search = "%$param%";

        $stmt->bindParam(1, $search, PDO::PARAM_STR);

        $stmt->bindParam(2, $search, PDO::PARAM_STR);

        $stmt->execute();

        header('Content-Type: application/json');

        return json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));

    }
}