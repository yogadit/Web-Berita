<?php
    $queryInsert = $db->prepare("INSERT into berita(ID_post,judul,kategori,gambar,penulis,tanggal,konten) 
    values (:ID_post,:judul,:kategori,:gambar,:penulis,:tanggal,:konten) ");
    // Memasukkan nilai ke dalam query
    $queryInsert->bindParam(':ID_post', $news_id);
    $queryInsert->bindParam(':judul', $judul);
    $queryInsert->bindParam(':kategori', $kategori);
    $queryInsert->bindParam(':gambar', $_FILES['gambar']['name']);
    $queryInsert->bindParam(':penulis', $penulis);
    $queryInsert->bindParam(':tanggal', $tanggal);
    $queryInsert->bindParam(':konten', $konten);
    // Execute query
    $success = $queryInsert->execute();
?>