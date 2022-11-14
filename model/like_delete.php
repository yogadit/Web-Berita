<?php
    $kirim1 = $db->prepare("UPDATE komentar SET likeCount=? WHERE id_post=?");
    $kirim1->execute([$updated_likes, $post_id]);

    $kirim2 = $db->prepare("DELETE FROM likes WHERE id_comment=? AND username=?");
    $kirim2->execute([$index, $_SESSION['username']]);
?>