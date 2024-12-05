<!-- View/login.php -->
<!DOCTYPE html>
<html>
<head>
    <title>TP MVC User Authentication</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro|Nunito|Glegoo" rel="stylesheet">
    <link href="View/style/general.css" rel="stylesheet" type="text/css">
    <link href="View/style/header-footer.css" rel="stylesheet" type="text/css">
    <link href="View/style/mainSection.css" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</head>
 <body>
 <?php require_once('header.php'); ?>
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
            <div>
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
    <?php require_once('footer.php'); ?>
</body>