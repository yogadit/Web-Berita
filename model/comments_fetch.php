<?php
    $queryKomentar = $db->prepare("SELECT * from komentar WHERE id_post = ?");
    $queryKomentar->execute([$id_berita]);
    $komentar = $queryKomentar->fetchAll();
?>