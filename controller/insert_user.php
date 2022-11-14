<?php

include '..\include\db_connect.php';

$username = $_POST['username'];
$pass = $_POST['pass'];
$pass_check = $_POST['pass_check'];
$salt = "guest";
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$birthDate = $_POST['birthDate'];
$gender = $_POST['gender'];

$target_dir = "../assets/profilePictures/";
$target_file = $target_dir . basename($_FILES['profilePicture']['name']);
$check = false;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($username != '' && $pass != '' && $pass_check != '' && $firstName != '' && $lastName != '' && $birthDate != '' && $gender != ''){
  if($pass == $pass_check){
    $check = getimagesize($_FILES["profilePicture"]["tmp_name"]);
    if($check) {
      if(file_exists($target_file)){
          $_SESSION['error_register_message'] = "File Name has already been Taken, Please Rename your File!";
          header("location: $base_url/view/signUp.php");
      }
      else{
        move_uploaded_file($_FILES["profilePicture"]["tmp_name"], $target_file);

        $encrypted_password_salt = md5($pass . $salt);
    
        include '..\model\user_db_insert.php';

        if ($success) {
        header("location: $base_url/view/login.php");
        }
      }
    } 
    else {
      $_SESSION['error_register_message'] = "Your Image can't be Read!";
      header("location: $base_url/view/signUp.php");
    }
  }
  else {
    $_SESSION['error_register_message'] = "Password don't match!";
    header("location: $base_url/view/signUp.php");
  }
  
}
else{
  $_SESSION['error_register_message'] = "All fields must not be left empty!";
  header("location: $base_url/view/signUp.php");
}

?>






