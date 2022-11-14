<?php
    $query1 = $db->prepare("SELECT likeCount FROM komentar WHERE id_post = ?");
    $query1->execute([$post_id]);
    $like = $query1->fetch();
?>