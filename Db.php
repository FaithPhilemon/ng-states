<?php

    $host = "localhost";
    $db_name = "ngp";
    $username = "root";
    $password = "";

    $con = mysqli_connect($host, $username, $password, $db_name);
    if (!$con) {
        die("ERROR " . mysql_error($connect));
    }

    // class Db
    // {
    //     private $host = "localhost";
    //     private $db_name = "ngp";
    //     private $username = "root";
    //     private $password = "";
    //     public $conn;
    
    //     // get the database connection
    //     public function getConnection(){
    
    //         $this->conn = null;
    
    //         try{
    //             $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
    //         }catch(PDOException $exception){
    //             echo "Connection error: " . $exception->getMessage();
    //         }
    
    //         return $this->conn;
    //     }
    // }
    





?>