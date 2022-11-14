<?php
    $result = $db->prepare("SELECT judul, kategori, gambar, penulis, tanggal, konten FROM berita WHERE ID_post=?");
    $result->execute([$news_id]);
    $data = $result->fetch();
?>