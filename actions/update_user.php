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
   foreach($pdo->query('SELECT * FROM Users WHERE username = "'.$username_email.) as $row) {
     return($row[$num]);
   }
}

function UpdateUser(){
    $username = ($_POST['username']);
    $password = ($_POST['password']);

    if (isset($_POST['update']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $hashpassword = hash('sha256', $password);
    }
}
/*Chaque nom d'utilisateur est unique. Impossible d'inscrire un utilisateur avec le même username.

Les mots de passe sont hachés. Au moins en SHA-256.*/

function loginuser(){

   $password = ($_POST['password']);

if (isset($_POST['update']) && !empty($_POST['username']) && !empty($_POST['password'])) {
   $username_email = ($_POST['username']);
   $password = ($_POST['password']);
   $hashpassword = hash('sha256', $password);
   
   $dbusername = getUserAllInfo($username_email,$password,1);
   $dbpassword = getUserAllInfo($username_email,$password,2);
   $dbemail = getUserAllInfo($username_email,$password,3);
   
   if ($hashpassword == $dbpassword) {
      $_SESSION['valid'] = true;
      $_SESSION['timeout'] = time();
      $_SESSION['user_id'] = $dbusername;
      $_SESSION['email'] = $dbemail;

      $pdo = new PDO("mysql:host=localhost;dbname=puissance4" ,"root", "");
      $query = 'UPDATE Users SET last_connection = NOW() WHERE username = '."'".$dbusername."'";
      $req = $pdo->prepare($query);
      $req->execute();
      
      echo 'You have entered valid use name and password';
   } else {
      echo 'Email ou mot de passe invalide';
   }
}
else if (strlen($password) < 8) {
   echo 'Mot de passe trop court';
}
}

//add line sql to last_connection
?>
