<!-- View/login.php -->
<div class="form wrapper-50 margin-auto">
    <h2 class="center">Login</h2>

    <?php if(isset($info)): ?>
        <div class="center" style="color: <?php echo (strpos($info, 'incorrects') !== false) ? '#d32f2f' : '#388e3c'; ?>">
            <?php echo $info; ?>
        </div>
    <?php endif; ?>

    <form method="post" action="index.php?ctrl=user&action=doLogin" class="center">
        <div>
            <input type="email" id="email" name="email" placeholder="Mail" required>
        </div>
        <div style="margin-top: 20px;">
            <input type="password" id="password" name="password" placeholder="Password" required>
        </div>
        
        <div style="margin-top: 30px;">
            <button type="submit" class="submit-btn">Connect</button>
        </div>
    </form>
    <div class="create-account">
        You don't have an account ? <a href="index.php?ctrl=user&action=create">Create one</a> !
    </div>
</div>