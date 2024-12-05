<?php
ob_start(); // Démarre la mise en mémoire tampon
?>

<div>
    <h2 class="center">List of users</h2>
    <table>
        <tr>
            <th>Email</th>
            <th>Password</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Admin</th>
        </tr>
        <?php 
        if (isset($users) && !empty($users)):
            foreach($users as $user): 
        ?>
            <tr>
                <td><?php echo htmlspecialchars($user['email']); ?></td>
                <td><?php echo htmlspecialchars($user['password']); ?></td>
                <td><?php echo htmlspecialchars($user['firstName']); ?></td>
                <td><?php echo htmlspecialchars($user['lastName']); ?></td>
                <td><?php echo htmlspecialchars($user['admin']); ?></td>
            </tr>
        <?php 
            endforeach;
        endif; 
        ?>
    </table>
</div>

<?php
$content = ob_get_clean(); // Récupère le contenu du buffer et l'efface
?>

<?php require('default.php'); ?>