<?php
// Controller/navigationController.php
class NavigationController {
    private $db;

    public function __construct($db1) {
        $this->db = $db1;
    }
    
    // Méthode utilitaire pour vérifier l'authentification
    private function checkAuthentication() {
        if (!isset($_SESSION['user'])) {
            header('Location: index.php?ctrl=user&action=login');
            exit();
        }
    }
    
    // Page d'accueil publique
    public function home() {
        $page = 'home';
        require('./View/default.php');
    }
    
    // Pages nécessitant une authentification
    /*public function users() {
        $this->checkAuthentication();
        $page = 'usersList';  // utilise votre vue existante
        require('./View/default.php');
    }*/
    
    public function memory() {
        $this->checkAuthentication();
        $page = 'memory';
        require('./View/default.php');
    }
    
    public function defense() {
        $this->checkAuthentication();
        $page = 'defense';
        require('./View/default.php');
    }
    
    public function injuries() {
        $this->checkAuthentication();
        $page = 'injuries';
        require('./View/default.php');
    }
    
    public function workspace() {
        $this->checkAuthentication();
        $page = 'workspace';
        require('./View/default.php');
    }
    public function login() {
        $page = 'login';
        require('./View/login.php');  // Utilisez login.php directement au lieu de default.php
    }
}