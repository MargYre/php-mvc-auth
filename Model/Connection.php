<?php
class Connection {
    //private $host = 'np16029-001.privatesql:35815';
    private $host = 'localhost';
    private $dbname = 'licence22';
    //private $username = 'licence22';
    private $username = 'root';
    //private $password = 'vWf69iPJZJp'; //// mot de passe fourni que je ne partage pas
    private $password = '';
    private $db;

    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname . ';charset=utf8', 
                               $this->username, 
                               $this->password);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getDb() {
        return $this->db;
    }
}
?>