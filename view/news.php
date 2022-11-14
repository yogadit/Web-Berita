<!DOCTYPE html>
<html>
    <?php include 'head.php' ?>
    <?php
        include '..\model\news_fetch.php';
    ?>
    <body>
        <?php include 'navbar.php' ?>
        <div class="news-header">
            <h1 class="news-header-title"><?php if(isset($_GET['kategori'])){echo $_GET['kategori'];}else{echo "All";} ?></h1>
        </div>
        <div class="container-fluid">
            <div class="news">
                <div class="row">
                    <?php $x=0; foreach ($beritas as $i => $berita) {
                        if(!isset($_GET['kategori'])) { ?>
                            <div class="col-lg-4 my-4">
                                <div class="card cardBox">
                                    <a href="newsDetail.php?id_berita=<?= $berita['ID_post'] ?>"><img src="..\assets\news\<?= $berita['gambar'] ?>" class="card-img-top"></a>
                                    <div class="card-body">
                                        <a href="newsDetail.php?id_berita=<?= $berita['ID_post'] ?>" style="text-decoration:none; color: black;"><h5 class="card-title"><?= $berita['judul'] ?></h5></a>
                                        <p class="card-text">- <?= $berita['kategori'] ?></p>
                                    </div>
                                    <div class="card-footer"><?= $berita['tanggal'] ?></div>
                                </div>
                            </div>
                        <?php }
                        else{ 
                            if($berita['kategori'] === $_GET['kategori']){ ?>
                            <div class="col-lg-4 my-4">
                                <div class="card cardBox">
                                    <a href="newsDetail.php?id_berita=<?= $berita['ID_post'] ?>"><img src="..\assets\news\<?= $berita['gambar'] ?>" class="card-img-top"></a>
                                    <div class="card-body">
                                        <a href="newsDetail.php?id_berita=<?= $berita['ID_post'] ?>"style="text-decoration:none; color: black;"><h5 class="card-title"><?= $berita['judul'] ?></h5></a>
                                        <p class="card-text">- <?= $berita['kategori'] ?></p>
                                    </div>
                                    <div class="card-footer"><?= $berita['tanggal'] ?></div>
                                </div>
                            </div>
                        <?php }
                        }
                    } ?>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>