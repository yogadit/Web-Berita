<?php
include '..\include\db_connect.php';

$news_id = $_GET['News_id'];

include '..\model\news_img_fetch.php';

unlink("../assets/news/" . $newsImg['gambar']);

include '..\model\news_del.php';

header("location: $base_url/view/admin.php");
?>