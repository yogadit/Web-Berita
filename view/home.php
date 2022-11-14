<!DOCTYPE html>
<html>
    <?php 
    include 'head.php';
    include '..\model\news_fetch.php';
    $active = true;
    ?>
    <body>
        <?php include 'navbar.php' ?>
        <div id="carouselNews" class="carousel slide carousel-fade" data-bs-ride="carousel" style="width: 100%;">
            <div class="carousel-indicators" style="z-index: 4">
                <button type="button" data-bs-target="#carouselNews" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselNews" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselNews" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <?php foreach($beritas as $i => $berita){ 
                    if($berita['kategori'] == "Hukum"){?>
                    <div class="carousel-item <?php if($active){ echo 'active'; $active = false;} ?>" data-bs-interval="5000">
                        <div class="overlay"></div>
                        <img src="..\assets\news\<?= $berita['gambar'] ?>" class="d-block w-100" alt="news-<?= $i ?>" style="z-index: -2;">
                        <div class="carousel-caption d-block" style="z-index: 3; margin-bottom: 5%">
                            <h1 class="slideText"><?= $berita['judul'] ?></h1>
                            <h3 class="slideText2">- Hukum -</h3>
                            <button class="btn btn-outline-secondary buttonText" style="color: rgb(215, 215, 215)" onclick="document.location='newsDetail.php?id_berita=<?= $berita['ID_post'] ?>'">CLICK TO SEE MORE</button>
                        </div>
                    </div>
                <?php } }?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselNews" data-bs-slide="prev" style="z-index: 3">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselNews" data-bs-slide="next" style="z-index: 3">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <?php $active = true; ?>

        <div id="carouselNews2" class="carousel slide carousel-fade" data-bs-ride="carousel" style="width: 100%;">
            <div class="carousel-indicators" style="z-index: 4">
                <button type="button" data-bs-target="#carouselNews2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselNews2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselNews2" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <?php foreach($beritas as $i => $berita){ 
                    if($berita['kategori'] == "Politik"){?>
                    <div class="carousel-item <?php if($active){ echo 'active'; $active = false;} ?>" data-bs-interval="5000">
                        <div class="overlay"></div>
                        <img src="..\assets\news\<?= $berita['gambar'] ?>" class="d-block w-100" alt="news-<?= $i ?>" style="z-index: -2;">
                        <div class="carousel-caption d-block" style="z-index: 3; margin-bottom: 5%">
                            <h1 class="slideText"><?= $berita['judul'] ?></h1>
                            <h3 class="slideText2">- Politik -</h3>
                            <button class="btn btn-outline-secondary buttonText" style="color: rgb(215, 215, 215)" onclick="document.location='newsDetail.php?id_berita=<?= $berita['ID_post'] ?>'">CLICK TO SEE MORE</button>
                        </div>
                    </div>
                <?php } }?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselNews2" data-bs-slide="prev" style="z-index: 3">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselNews2" data-bs-slide="next" style="z-index: 3">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <?php $active = true; ?>

        <div id="carouselNews3" class="carousel slide carousel-fade" data-bs-ride="carousel" style="width: 100%;">
            <div class="carousel-indicators" style="z-index: 4">
                <button type="button" data-bs-target="#carouselNews3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselNews3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselNews3" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <?php foreach($beritas as $i => $berita){ 
                    if($berita['kategori'] == "Peristiwa"){?>
                    <div class="carousel-item <?php if($active){ echo 'active'; $active = false;} ?>" data-bs-interval="5000">
                        <div class="overlay"></div>
                        <img src="..\assets\news\<?= $berita['gambar'] ?>" class="d-block w-100" alt="news-<?= $i ?>" style="z-index: -2;">
                        <div class="carousel-caption d-block" style="z-index: 3; margin-bottom: 5%">
                            <h1 class="slideText"><?= $berita['judul'] ?></h1>
                            <h3 class="slideText2">- Peristiwa -</h3>
                            <button class="btn btn-outline-secondary buttonText" style="color: rgb(215, 215, 215)" onclick="document.location='newsDetail.php?id_berita=<?= $berita['ID_post'] ?>'">CLICK TO SEE MORE</button>
                        </div>
                    </div>
                <?php } }?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselNews3" data-bs-slide="prev" style="z-index: 3">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselNews3" data-bs-slide="next" style="z-index: 3">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <?php $active = true; ?>

        <div id="carouselNews4" class="carousel slide carousel-fade" data-bs-ride="carousel" style="width: 100%;">
            <div class="carousel-indicators" style="z-index: 4">
                <button type="button" data-bs-target="#carouselNews4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselNews4" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselNews4" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <?php foreach($beritas as $i => $berita){ 
                    if($berita['kategori'] == "Sports"){?>
                    <div class="carousel-item <?php if($active){ echo 'active'; $active = false;} ?>" data-bs-interval="5000">
                        <div class="overlay"></div>
                        <img src="..\assets\news\<?= $berita['gambar'] ?>" class="d-block w-100" alt="news-<?= $i ?>" style="z-index: -2;">
                        <div class="carousel-caption d-block" style="z-index: 3; margin-bottom: 5%">
                            <h1 class="slideText"><?= $berita['judul'] ?></h1>
                            <h3 class="slideText2">- Sports -</h3>
                            <button class="btn btn-outline-secondary buttonText" style="color: rgb(215, 215, 215)" onclick="document.location='newsDetail.php?id_berita=<?= $berita['ID_post'] ?>'">CLICK TO SEE MORE</button>
                        </div>
                    </div>
                <?php } }?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselNews4" data-bs-slide="prev" style="z-index: 3">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselNews4" data-bs-slide="next" style="z-index: 3">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <?php include 'footer.php'; ?>
    </body>
<html>