<?php
    $stmt = $db->prepare("UPDATE berita SET judul=?, kategori=?, penulis=?, tanggal=?, konten=? WHERE ID_post=?");
    $stmt->execute([$judul, $kategori, $penulis, $tanggal, $konten, $news_id]);
?>