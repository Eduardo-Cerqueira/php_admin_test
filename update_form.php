<?php 

require_once __DIR__ . '/init/db.php';

// id de l'utilisateur a update
if (isset($_GET['id'])) {
    $id_to_update = $_GET['id'];
} else {
    // Redirection si pas d'ID dans l'url.. on ne peut pas mettre a jour RIEN.
    header('Location: users.php');
    die();
}

// Recuperer l'utilisateur a mettre a jour avec PDO et une requete SQL
// $user = ...;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mettre a jour un utilisateur</title>
</head>
<body>
    <!-- Afficher un formulaire avec les data de l'utilisateur -->
    <h2>Veuillez entrer vos informations : </h2>
    <?php include 'assets/php/login_.php'; loginuser();?>
    <input type="text" name="username" value="<?= /* $user['username'] */ ?>" >
        <h2>Veuillez entrer vos informations : </h2>
        <?php include 'assets/php/login_.php'; loginuser();?>
        <form class = "form-signin" role = "form" action = '<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method = "post">
            
            <input type = "text" class = "form-control" name = "username" placeholder = "Username / Email" required autofocus />
            <input type = "password" class = "form-control" name = "password" placeholder = "Password" required>
            <button class = "button" type = "submit" name = "login">Login</button>
        </form>
        <form class = "form-signin" role = "form" action = "logout.php" method = "post">
        <button type="submit" name = "logout">Logout</button>
        </form>
    </div>
</body>
</html>
