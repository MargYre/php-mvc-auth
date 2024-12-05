<?php
class UserController {
    private $userManager;
    private $user;
    private $db;
    
    public function __construct($db1) {
        require_once('./Model/User.php');
        require_once('./Model/UserManager.php');
        $this->userManager = new UserManager($db1);
        $this->db = $db1;
    }

    private function checkAuthentication() {
        if (!isset($_SESSION['user'])) {
            header('Location: index.php?ctrl=user&action=login');
            exit();
        }
    }

    public function usersList() {
        $this->checkAuthentication();
        $users = $this->userManager->findAll();
        require('./View/usersList.php');
    }

    public function login() {
        if (isset($_SESSION['user'])) {
            header('Location: index.php');
            exit();
        }
        $page = 'login';
        require('./View/login.php');
    }

    public function doLogin() {
        if (!isset($_POST['email']) || !isset($_POST['password'])) {
            header('Location: index.php?ctrl=user&action=login');
            exit();
        }

        $this->user = new User();
        $this->user->setEmail($_POST['email']);
        $this->user->setPassword(sha1($_POST['password']));
        
        $result = $this->userManager->login($this->user);
        
        if ($result) {
            $_SESSION['user'] = $result;
            $info = "Connexion réussie";
            $page = 'home';
        } else {
            $info = "Identifiants incorrects";
            $page = 'login';
        }
        
        require('./View/default.php');
    }

    public function logout() {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
            session_destroy();
        }
        header('Location: index.php');
        exit();
    }

    public function create() {
        if (isset($_SESSION['user'])) {
            header('Location: index.php');
            exit();
        }
        require('./View/createAccount.php');
    }

    public function doCreate() {
        $requiredFields = ['email', 'password', 'firstName', 'lastName', 'address', 'postalCode', 'city'];
        
        foreach ($requiredFields as $field) {
            if (!isset($_POST[$field]) || empty($_POST[$field])) {
                $info = "Veuillez remplir tous les champs";
                $page = 'createAccount';
                require('./View/default.php');
                return;
            }
        }

        $this->user = new User();
        $this->user->setEmail($_POST['email']);
        $this->user->setPassword(sha1($_POST['password']));
        $this->user->setFirstName($_POST['firstName']);
        $this->user->setLastName($_POST['lastName']);
        $this->user->setAddress($_POST['address']);
        $this->user->setPostalCode($_POST['postalCode']);
        $this->user->setCity($_POST['city']);
        
        try {
            $this->userManager->create($this->user);
            $info = "Compte créé avec succès";
            $page = 'login';
        } catch (Exception $e) {
            $info = "Erreur lors de la création du compte";
            $page = 'createAccount';
        }
        
        require('./View/default.php');
    }
}