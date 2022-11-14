<?php
    $queryBerita = $db->prepare("SELECT * from berita WHERE ID_post=:id_berita");
    $queryBerita->bindParam(":id_berita", $id_berita);
    $queryBerita->execute();
    $beritas = $queryBerita->fetch();
?>