<?php
    $kirim1 = $db->prepare("UPDATE komentar SET likeCount=? WHERE id_post=?");
    $kirim1->execute([$updated_likes, $post_id]);

    $kirim2 = $db->prepare("INSERT INTO likes(id_comment, username, id_post) values(?,?,?)");
    $kirim2->execute([$index, $_SESSION['username'], $post_id]);
?>