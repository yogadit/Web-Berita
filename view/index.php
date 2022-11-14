<?php
include '..\include\db_connect.php';

if(isset($_SESSION['username'])){ 
    if($_SESSION['admin'] == true){
        header("location: $base_url/view/admin.php");
    }
    else{
        header("location: $base_url/view/home.php");
    }
}
else{
    header("location: $base_url/view/home.php");
}
?>