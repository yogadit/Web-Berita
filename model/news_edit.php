<?php
    $stmt = $db->prepare("UPDATE berita SET judul=?, kategori=?, gambar=?, penulis=?, tanggal=?, konten=? WHERE ID_post=?");
    $stmt->execute([$judul, $kategori, $_FILES['gambar']['name'], $penulis, $tanggal, $konten, $news_id]);
?>