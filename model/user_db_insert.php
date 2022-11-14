<?php 
$queryInsert = $db->prepare("INSERT into users(username, pass, salt, firstName, lastName, birthdate, gender,profilePicture) VALUES(:username, :pass, :salt, :firstName, :lastName, :birthDate, :gender, :profilePicture)");

$queryInsert->bindParam(':username', $username);
$queryInsert->bindParam(':pass', $encrypted_password_salt);
$queryInsert->bindParam(':salt', $salt);
$queryInsert->bindParam(':firstName', $firstName);
$queryInsert->bindParam(':lastName', $lastName);
$queryInsert->bindParam(':birthDate', $birthDate);
$queryInsert->bindParam(':gender', $gender);
$queryInsert->bindParam(':profilePicture', $_FILES["profilePicture"]["name"]);

$success = $queryInsert->execute();