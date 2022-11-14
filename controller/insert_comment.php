<?php
include '..\include\db_connect.php';
if(isset($_SESSION['username'])){
    $post_id = $_POST['News_id'];
    $fullname = $_POST['fullname'];
    $foto = $_POST['foto'];
    $tanggal = $_POST['tanggal'];
    $komen = $_POST['comment'];
    $like = 0;

    include '..\model\comment_insert.php';

    if ($success) {
        header("location: $base_url/view/newsDetail.php?id_berita=$post_id");
    }
}
else{
    header("location: $base_url/view/login.php");
    $_SESSION['error_login_message'] = "Login Required!";
}
