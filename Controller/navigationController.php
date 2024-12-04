<?php
// Controller/navigationController.php
class navigationController {
    private $db;

    public function __construct($db1) {
        $this->db = $db1;
    }
    
    public function home() {
        $page = 'home';
        require('./View/default.php');
    }
}