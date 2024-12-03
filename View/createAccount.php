// View/createAccount.php
<div class="form wrapper-50 margin-auto">
    <h2 class="center">Créer un compte</h2>

    <?php if(isset($info)): ?>
        <div class="center" style="color: <?php echo (strpos($info, 'succès') !== false) ? '#388e3c' : '#d32f2f'; ?>">
            <?php echo $info; ?>
        </div>
    <?php endif; ?>

    <form method="post" action="index.php?ctrl=user&action=doCreate" class="center">
        <div>
            <label for="email">E-mail* :</label><br>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div style="margin-top: 20px;">
            <label for="password">Mot de passe* :</label><br>
            <input type="password" id="password" name="password" required>
        </div>

        <div style="margin-top: 20px;">
            <label for="lastName">Nom* :</label><br>
            <input type="text" id="lastName" name="lastName" required>
        </div>

        <div style="margin-top: 20px;">
            <label for="firstName">Prénom* :</label><br>
            <input type="text" id="firstName" name="firstName" required>
        </div>

        <div style="margin-top: 20px;">
            <label for="address">Adresse :</label><br>
            <input type="text" id="address" name="address">
        </div>

        <div style="margin-top: 20px;">
            <label for="postalCode">Code postal :</label><br>
            <input type="text" id="postalCode" name="postalCode">
        </div>

        <div style="margin-top: 20px;">
            <label for="city">Ville :</label><br>
            <input type="text" id="city" name="city">
        </div>
        
        <div style="margin-top: 30px;">
            <button type="submit" class="submit-btn">Créer le compte</button>
        </div>
    </form>
</div>