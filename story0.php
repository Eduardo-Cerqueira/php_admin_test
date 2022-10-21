<?php

function redirect($page){

}

function showUsers(){
    include 'init/db.php';
    foreach($db->query('SELECT * FROM users') as $row) {
      print_r("id : ".$row['id']."  username : ".$row['username']."  password : ".$row['password']."  created_at : ".$row['created_at']."  updated_at : ".$row['updated_at']);
    }
  }
?>

Criteres d'acceptation S0

Afficher plusieurs bouton sur chaque entrée du tableau. (Update et Delete). Ces boutons sont des liens vers le formulaire d'update et l'action de suppression.