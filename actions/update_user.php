<?php 

require_once __DIR__ . '/../init/db.php';

// id de l'utilisateur a mettre a jour
$id_to_update = $_GET['id'];


// verifier les champs recu avec $_POST
// Mettre a jour en BDD

?>

<?php

function getUserAllInfo($username_email,$password,$num){
   include 'init/db.php';
   foreach($pdo->query('SELECT * FROM Users WHERE username = "'.$username_email." and password = ".$password) as $row) {
     return($row[$num]);
   }
}

function UpdateUser(){
    $username = ($_POST['username']);
    $password = ($_POST['password']);

    if (isset($_POST['update']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $hashpassword = hash('sha256', $password);

        $dbusername = getUserAllInfo($username,$password,1);
        $dbpassword = getUserAllInfo($username,$password,2);

        if (($hashpassword == $dbpassword) and ($username !== $dbusername)) {
            $query = 'UPDATE Users SET last_connection = NOW() WHERE username = '."'".$dbusername."'";
            $req = $pdo->prepare($query);
            $req->execute();
            
            echo 'You have entered valid use name and password';
        } else {
           echo 'Email ou mot de passe invalide';
        }
    }
}
?>
