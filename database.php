<?php
class Database{
    protected static ?PDO $connection = null;
    public function __construct(){
        echo"Database dibuat";
    }
    public static function connect(){
        try{
            if (!self::$connection){
                $pdo = new PDO('mysql:host=localhost;dbname=kendaraan', 'root', '');
                self::$connection = $pdo;
            }
            return self::$connection;
        } catch(PDOException $e){
            echo"Database Gagal:". $e->getMessage();
        }
        echo"<br>";
    }
}
?>