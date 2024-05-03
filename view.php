<?php
require_once("database.php");
class View{
    protected PDO $db;
    private static ?View $motor = null;

    public function __construct(){
        $this->db = Database::connect();
    }
    public static function motor(){
        if (self::$motor===null){
            self::$motor = new View();
        }
        return self::$motor;
    }
    public function readMotor(){
        $sql = "select * from motor";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}