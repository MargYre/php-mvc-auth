<?php include_once "header.php"; ?>

<div class="wrapper-50 margin-auto">
    <?php if (isset($content)): ?>
        <?php echo $content; ?>
    <?php else: ?>
        <img src="View/image/monthlyBox.jpg" alt="Monthly Box" class="centered-image">
    <?php endif; ?>
</div>

<?php require_once('footer.php'); ?>