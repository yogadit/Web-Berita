<?php
    $queryBerita = $db->prepare("SELECT * from berita");
    $queryBerita->execute();
    $beritas = $queryBerita->fetchAll();
?>