<?php
class DB{

    private $host = 'localhost';
    private $username = 'root';
    private $password = 'Caline1998!';
    private $database = 'The_District';
    private $db;

        public function __construct($host = null, $username = null, $password = null, $database = null){ 
        if($host != null){
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
        }

        try{
        $this->db = new PDo('mysql:host=' .$this->host.';dbname=' .$this->database,$this->username, $this->password, 
        array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8'));
        }
        catch(PDOException $e){
            die('Impossible de se connecter à la base de donnée');
        }

        }
    }
?>


