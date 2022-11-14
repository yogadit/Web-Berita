<?php
$query = $db->prepare("SELECT * FROM users where username=:username");
$query->bindParam(":username", $_SESSION['username']);
$query->execute();
$user = $query->fetch();
?>