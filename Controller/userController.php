<!-- Controller/userController.php -->
<!--  -->
<?php
class userController {
    private $userManager;
    private $user;
    
    public function __construct($db1) {
        require('./Model/User.php');
        require_once('./Model/UserManager.php');
        $this->userManager = new UserManager($db1);
        $this->db = $db1;
    }
    
    public function login() {
        $page = 'login';
        require('./View/login.php');
    }

    public function doLogin() {
        $this->user = new User();
        
        $this->user->setEmail($_POST['email']);
        $this->user->setPassword(sha1($_POST['password']));
        $result = $this->userManager->login($this->user);
        
        if ($result) {
            $info = "Connexion reussie";
            $_SESSION['user'] = $result;
            $page = 'home';
        } else {
            $info = "Identifiants incorrects.";
            $page = 'login';
        }
        require('./View/default.php');
    }
    public function logout() {
        unset($_SESSION['user']);
        session_destroy();
        header('Location: index.php');
        exit();
    }

    public function create() {
        require('./View/createAccount.php');
    }

    public function doCreate() {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $this->user = new User();
            $this->user->setEmail($_POST['email']);
            $this->user->setPassword(sha1($_POST['password']));
            $this->user->setFirstName($_POST['firstName']);
            $this->user->setLastName($_POST['lastName']);
            $this->user->setAddress($_POST['address']);
            $this->user->setPostalCode($_POST['postalCode']);
            $this->user->setCity($_POST['city']);
            
            $this->userManager->create($this->user);
            
            $info = "Compte créé avec succès";
            $page = 'login';
        } else {
            $info = "Veuillez remplir tous les champs";
            $page = 'createAccount';
        }
        require('./View/default.php');
    }
}