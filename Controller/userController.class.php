<!-- Controller/userController.class.php -->
<!-- -->
<?php
class userController {
    private $userManager;
    private $user;
    
    public function __construct($db1) {
        require('./Model/User.class.php');
        require_once('./Model/UserManager.class.php');
        $this->userManager = new UserManager($db1);
        $this->db = $db1;
    }
    
    public function login() {
        $page = 'login';
        require('./View/default.php');
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
}