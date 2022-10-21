<?php 

require_once __DIR__ . '/../init/db.php';

// verifier les champs recu avec $_POST
// Creer en BDD

function showUsers(){
    include 'init/db.php';
    foreach($db->query('SELECT * FROM users') as $row) {
      print_r("id : ".$row['id']."  username : ".$row['username']."  password : ".$row['password']."  created_at : ".$row['created_at']."  updated_at : ".$row['updated_at']." ".$update." ".$delete)?>
<?php
}
}
?>