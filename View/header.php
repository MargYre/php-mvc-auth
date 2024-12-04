<!-- View/header.php-->
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
    <header>
        <div id="info-bar">
            <p>My wonderful platform</p>
        </div>

        <div id="banner-bloc">
            <h1>TP Authentification et MVC</h1>
        </div>

        <div id="account_bar">
            <?php if(isset($_SESSION['user'])): ?>
                <div class="connection center">
                    <a href="index.php?ctrl=user&action=logout" class="no-deco" title="Se déconnecter">
                        <svg class="svg-inline--fa fa-user fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M96 160C96 71.634 167.635 0 256 0s160 71.634 160 160-71.635 160-160 160S96 248.366 96 160zm304 192h-28.556c-71.006 42.713-159.912 42.695-230.888 0H112C50.144 352 0 402.144 0 464v24c0 13.255 10.745 24 24 24h464c13.255 0 24-10.745 24-24v-24c0-61.856-50.144-112-112-112z"></path>
                        </svg>
                        <div class="text">Se déconnecter</div>
                    </a>
                </div>
            <?php else: ?>
                <div class="connection center">
                    <a href="./index.php?ctrl=user&action=login" class="no-deco" title="Login or create account">
                        <svg class="svg-inline--fa fa-user fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M96 160C96 71.634 167.635 0 256 0s160 71.634 160 160-71.635 160-160 160S96 248.366 96 160zm304 192h-28.556c-71.006 42.713-159.912 42.695-230.888 0H112C50.144 352 0 402.144 0 464v24c0 13.255 10.745 24 24 24h464c13.255 0 24-10.745 24-24v-24c0-61.856-50.144-112-112-112z"></path>
                        </svg>
                        <div class="text">Login</div>
                    </a>
                </div>
            <?php endif; ?>
        </div>

        <ul id="menu_bar">
            <a href="./index.php?ctrl=user&action=usersList" class="no-deco"><li>Liste des utilisateurs</li></a>
            <a href="./" class="no-deco"><li>Le mémoire</li></a>
            <a href="./" class="no-deco"><li>La soutenance</li></a>
            <a href="./" class="no-deco"><li>Le carnet de liaison</li></a>
            <a href="./" class="no-deco"><li>Les espaces de travail</li></a>
        </ul>
    </header>

    <div class="wrapper-90 margin-auto">