<!--// View/createAccount.php -->
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
<body>
    <?php require_once('header.php'); ?>
    <div class="wrapper-50 margin-auto center">
        <h2>Create an account</h2>
        <form class="form" action="index.php?ctrl=user&action=doCreate" method="POST">
            <input type="email" name="email" placeholder="Mail" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="text" name="lastName" placeholder="Last Name" required><br>
            <input type="text" name="firstName" placeholder="First Name" required><br>
            <input type="text" name="address" placeholder="Address" required><br>
            <input type="text" name="postalCode" placeholder="Postal Code" required><br>
            <input type="text" name="city" placeholder="City" required><br>
            <p>
                <input type="submit" class="submit-btn" value="Create">
            </p>
        </form>
        <span><?php echo isset($info) ? htmlspecialchars($info) : ''; ?></span>
        <?php require_once('footer.php'); ?>
    </div>
</body>