<?php
include '..\include\db_connect.php';

$username = $_POST['username'];
$pass = $_POST['pass'];
$captcha = $_POST['captcha'];
$recaptcha = $_POST['recaptcha'];

include '..\model\login_fetch.php';

$encrypted_password_salt = md5($pass . $users['salt']);
if ($captcha == $recaptcha){
    if ($users['pass'] == $encrypted_password_salt) {
        $_SESSION['username'] = $username;
        
        if($users['salt'] == 'admin'){
            $_SESSION['admin'] = true;
            header("location: $base_url/view/admin.php");
        }
        else{
            $_SESSION['admin'] = false;
            header("location: $base_url/view/home.php");
        }
    } 
    else {
        $_SESSION['error_login_message'] = 'Wrong Username/Password!';
        header("location: $base_url/view/login.php");
    }
}
else{
    $_SESSION['error_login_message'] = 'Recaptcha Incorrect!';
    header("location: $base_url/view/login.php");
}
?>
