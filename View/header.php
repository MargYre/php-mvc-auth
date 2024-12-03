// View/header.php
<!DOCTYPE html>
<html>
<head>
    <title>TP MVC User Authentication</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro|Nunito|Glegoo" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel="stylesheet" href="assets/css/header-footer.css">
    <link rel="stylesheet" href="assets/css/mainSection.css">
</head>
<body>
    <header>
        <div id="banner-bloc">
            <h1>TP Authentification et Sécurité</h1>
        </div>
        
        <div id="account_bar">
            <?php if(isset($_SESSION['user'])): ?>
                <div>
                    <a href="index.php?ctrl=user&action=logout" class="no-deco">
                        <div class="center">Se déconnecter</div>
                    </a>
                </div>
            <?php else: ?>
                <div>
                    <a href="index.php?ctrl=user&action=login" class="no-deco">
                        <div class="center">Connexion</div>
                    </a>
                </div>
                <div>
                    <a href="index.php?ctrl=user&action=create" class="no-deco">
                        <div class="center">Créer un compte</div>
                    </a>
                </div>
            <?php endif; ?>
        </div>
        
        <ul id="menu_bar">
            <li><a href="index.php" class="no-deco">Accueil</a></li>
            <?php if(isset($_SESSION['user']) && $_SESSION['user']->getRole() === 'admin'): ?>
                <li><a href="index.php?ctrl=user&action=listUser" class="no-deco">Gestion des utilisateurs</a></li>
            <?php endif; ?>
        </ul>
    </header>

    <div class="wrapper-90 margin-auto">