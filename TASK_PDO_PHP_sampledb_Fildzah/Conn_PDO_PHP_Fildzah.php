<?php
class connDB{
    private $dbServer = "localhost";
    private $dbUser = "root";
    private $dbPass = "";
    private $dbName = "sample_database";
    private $dbPort = "3307";

    function dbConn(){
        try{
            $conn = new PDO('mysql:host='.$this->dbServer.'; port=3307; dbname='.$this->dbName,$this->dbUser,$this->dbPass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $err){
            echo "Failed connect to database server : ".$err->getMessage();
        }
        return $conn;
    }
}
?>