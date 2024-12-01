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
        // Cette action teste l'existence d'un utilisateur de email $_POST['email'] 
        // et de password $_POST['password']
        // Le user extrait par le UserManager est renvoyé dans $result
        
        $result = //_____; // Cette ligne est à compléter selon le TP
        
        if ($result) :
            $info = "Connexion reussie";
            $_SESSION['user'] = $result;
            $page = 'home';
        else :
            $info = "Identifiants incorrects.";
        endif;
        require('./View/default.php');
    }
}