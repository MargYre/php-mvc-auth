<div class="wrapper-50 margin-auto">
    <h2>TP Authentification et MVC</h2>
    
    <?php if(isset($_SESSION['user'])): ?>
        <div class="center">
            <p>Bienvenue <?php echo htmlspecialchars($_SESSION['user']['firstName'] . ' ' . $_SESSION['user']['lastName']); ?></p>
            <p>Vous êtes connecté avec succès.</p>
        </div>
    <?php else: ?>
        <div class="center">
            <p>Veuillez vous connecter ou créer un compte pour accéder à toutes les fonctionnalités.</p>
            <div>
                <a href="index.php?ctrl=user&action=login" class="btn">Se connecter</a>
                <a href="index.php?ctrl=user&action=create" class="btn">Créer un compte</a>
            </div>
        </div>
    <?php endif; ?>

    <?php if(isset($info)): ?>
        <div class="info-message center">
            <?php echo htmlspecialchars($info); ?>
        </div>
    <?php endif; ?>
</div>