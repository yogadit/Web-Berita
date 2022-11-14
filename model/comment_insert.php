<?php
    $queryInsert = $db->prepare("INSERT into komentar(id_post,namaProfile,fotoProfile,tanggal,konten,likeCount) 
    values (:ID_post,:nama,:foto,:tanggal,:konten,:like) ");
    $queryInsert->bindParam(':ID_post', $post_id);
    $queryInsert->bindParam(':nama', $fullname);
    $queryInsert->bindParam(':foto', $foto);
    $queryInsert->bindParam(':tanggal', $tanggal);
    $queryInsert->bindParam(':konten', $komen);
    $queryInsert->bindParam(':like', $like);
    $success = $queryInsert->execute();
?>