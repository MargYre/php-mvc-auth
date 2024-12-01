<!DOCTYPE html>
<html>
<head>
    <title>Authentification</title>
</head>
<body>
    <header>
        <nav>
            <?php if(isset($_SESSION['user'])): ?>
                <a href="index.php?ctrl=user&action=logout">Se déconnecter</a>
            <?php else: ?>
                <a href="index.php?ctrl=user&action=login">Connexion</a> ou 
                <a href="index.php?ctrl=user&action=create">Créer votre compte</a>
            <?php endif; ?>
        </nav>
    </header>
</body>