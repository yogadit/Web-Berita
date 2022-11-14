<?php
    include '..\include\db_connect.php';

    $post_id = $_GET['News_id'];
    $index = $_GET['index'];
    if(isset($_SESSION['username'])){
        include '..\model\like_fetch.php';
        $updated_likes = $like['likeCount'] + 1;
        include '..\model\like_update.php';

        header("location: $base_url/view/newsDetail.php?id_berita=$post_id#$index");
    }
    else{
        header("location: $base_url/view/login.php");
        $_SESSION['error_login_message'] = "Login Required!";
    }
?>