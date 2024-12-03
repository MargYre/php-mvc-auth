// View/home.php
<div class="wrapper-50 margin-auto">
    <h2 class="center">Bienvenue</h2>
    
    <?php if(isset($_SESSION['user'])): ?>
        <p class="center">
            Bonjour <?php echo htmlspecialchars($_SESSION['user']['firstName']) . ' ' . htmlspecialchars($_SESSION['user']['lastName']); ?>
        </p>
    <?php else: ?>
        <p class="center">
            Veuillez vous connecter ou créer un compte pour accéder à toutes les fonctionnalités.
        </p>
    <?php endif; ?>
</div>