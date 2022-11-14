<?php
    $query2 = $db->prepare("SELECT * FROM likes WHERE id_comment = ?");
    $query2->execute([$i]);
    $liked = $query2->fetchall();
?>