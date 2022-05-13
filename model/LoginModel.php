<?php
namespace app\model;

class LoginModel 
{
    public $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    function select()
    {
        $req = "SELECT * FROM people";
        $stmt = $this->db->getInstance();
        $statement = $stmt->prepare($req);
        $data = $statement->execute();

        var_dump($data->fetchAll());
        
    }
}