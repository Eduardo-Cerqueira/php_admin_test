<?php
error_reporting(0);
for ($a=1;$a < 10;$a++) {
    include 'init/db.php';
    $sql = $pdo->query("SELECT * FROM users WHERE id = ".$a);
    $row = $sql->fetch()

?>
<tr>
<td><?php echo($row['id']);?></td>
<td><?php echo($row['username']);?></td>
<td><?php echo($row['password']);?></td>
<td><?php echo($row['created_at']);?></td>
<td><?php echo($row['updated_at']);?></td>   
</tr>
<?php
}
?>