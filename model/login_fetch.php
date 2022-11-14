<?php
$queryusernameCheck = $db->prepare("SELECT * FROM users where username=:username");
$queryusernameCheck->bindParam(":username", $username);
$queryusernameCheck->execute();
$users = $queryusernameCheck->fetch();
?>