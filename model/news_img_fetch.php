<?php
    include '..\include\db_connect.php';

    $query = $db->prepare("SELECT gambar FROM berita WHERE ID_post = ?");
    $query->execute([$news_id]);
    $newsImg = $query->fetch();
?>