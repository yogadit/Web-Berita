<?php
    $query1 = $db->prepare("DELETE FROM berita WHERE ID_post=?");
    $query1->execute([$news_id]);

    $query2 = $db->prepare("DELETE FROM komentar WHERE id_post=?");
    $query2->execute([$news_id]);

    $query3 = $db->prepare("DELETE FROM likes WHERE id_post=?");
    $query3->execute([$news_id]);
?>