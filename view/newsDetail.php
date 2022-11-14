<?php
    include '..\include\db_connect.php';
    $id_berita = $_GET['id_berita'];
    include '..\model\news_fetch_specific.php';
    include '..\model\comments_fetch.php';
    include '..\model\navbar_fetch.php';
?>

<!DOCTYPE html>
<html>
    <?php include 'head.php' ?>
    <body>
        <?php include 'navbar.php' ?>
        <div class="news-header">
            <h1 class="news-header-title">Berita</h1>
        </div>
        <div class="container-fluid">
            <div class="newsTitle mt-4">
                <a class="btn btn-outline-secondary" href="news.php?kategori=<?= $beritas['kategori'] ?>"><?= $beritas['kategori'] ?></a><br><br>
                <h3><?= $beritas['judul'] ?></h3>
                <h5><?= $beritas['penulis'] ?> | <?= $beritas['tanggal'] ?></h5>
                <div class="card w-50 mx-auto my-5">
                    <img src="..\assets\news\<?= $beritas['gambar'] ?>" class="card-img-top">
                </div><br>
                <div class="newsContent">
                    <?= $beritas['konten'] ?>
                </div>
            </div>

            <div class="mt-5 mb-2" style="text-align: center"><h3>Comments</h3><hr></div>
            <div class="card width-comment mx-auto my-5">
                <?php if(isset($_SESSION['username'])){ ?>
                    <div class="card-header p-0">
                        <div class="row g-0">
                            <div class="col-md-2 w-auto">
                                <img src="..\assets\profilePictures\<?= $user['profilePicture'] ?>" width="75" height="75" class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-10 py-3 w-auto" style="margin-left: 3%">
                                <h3><?= $user['firstName'] . ' ' . $user['lastName'] ?></h3>
                                <?php 
                                    $fullname = $user['firstName'] . ' ' . $user['lastName'];
                                    $photo = $user['profilePicture'];
                                    $tanggal = $beritas['tanggal'];
                                ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="card-body">
                    <form id="login" method="post" action="..\controller\insert_comment.php">
                        <label for="email" class="form-label">Comment:</label>
                        <div class="row">
                            <div class="col-auto">
                                <textarea id="comment" class="form-control" name="comment" rows="5" cols="80" style="transition:0.25s"></textarea>
                                <input type="text" class="form-control" name="News_id" value="<?= $id_berita ?>" hidden>
                                <input type="text" class="form-control" name="fullname" value="<?= $fullname ?>" hidden>
                                <input type="text" class="form-control" name="foto" value="<?= $photo ?>" hidden>
                                <input type="date" class="form-control" name="tanggal" value="<?= $tanggal ?>" hidden>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <input type="submit" class="btn btn-outline-primary" style="margin-left: 3%" id="submit" value="Post">
                            </div>
                            <!-- <div class="form-text">
                                <hr>
                            </div> -->
                        </div>
                    </form>
                </div>
            </div>
            <div class="w-75 m-auto">
                <hr>
            </div>

            <?php foreach ($komentar as $i => $comment) { ?>
                <div class="card width-comment mx-auto my-5" style="border: none" id="<?= $i ?>">
                    <div class="card-header p-0">
                        <div class="row g-0">
                            <div class="col-md-2" style="width: 75px">
                                <img src="..\assets\profilePictures\<?= $comment['fotoProfile'] ?>" width="75" height="75" class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-9 py-3" style="margin-left: 3%; width: auto">
                                <h3><?= $comment['namaProfile'] ?></h3>
                            </div>
                            <div class="col-md-1" style="margin-left: auto; margin-right: 5%; margin-top: auto; margin-bottom: auto; width: auto">
                                <?php
                                    $oke = 1;
                                    if(isset($_SESSION['username'])){
                                        include '..\model\liked_comment_fetch.php';
                                        foreach($liked as $eachLiked){
                                            if($eachLiked['username'] == $_SESSION['username']){
                                                $oke = 0;
                                                break;
                                            }
                                        }
                                        if($oke){ ?>
                                            <a href="..\controller\like_increment.php?News_id=<?= $comment['id_post'] ?>&index=<?= $i ?>"><img class="like-btn" src="..\assets\icons\like.png"  width="25" height="25" class="img-fluid rounded-start"></a>
                                        <?php }
                                        else{ ?>
                                            <a href="..\controller\like_decrement.php?News_id=<?= $comment['id_post'] ?>&index=<?= $i ?>"><img class="liked-btn" src="..\assets\icons\liked.png"  width="25" height="25" class="img-fluid rounded-start"></a>
                                        <?php }
                                    }
                                    else{
                                        header("location: $base_url/view/login.php");
                                        $_SESSION['error_login_message'] = "Login Required!";
                                    }
                                ?>
                                <b><?= $comment['likeCount'] ?></b>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <?= $comment['tanggal'] ?>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <p><?= $comment['konten'] ?></p>
                            </div>
                            <div class="form-text">
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="w-50 mx-auto">
            <?php } ?>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>