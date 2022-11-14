<!DOCTYPE html>
<html>
    <?php 
        include 'head.php';

        $news_id = $_GET['News_id'];

        include '..\model\news_edit_fetch.php';
        include '..\model\news_img_fetch.php';
    ?>
    <body>
        <?php include 'navbar_admin.php'; ?>

        <div class="container-fluid">
            <div class="card mx-auto my-5 formBox">
                <div class="card-header">
                    <h3>Edit News</h3>
                </div>
                <div class="card-body">
                    <form id="addData" method="post" action="..\controller\doGanti.php" enctype="multipart/form-data">
                        <label for="news_id" class="form-label">News ID</label>
                        <div class="row">
                            <div class="col-auto input-group">
                                <div class="input-group-text">
                                    <img src="..\assets\icons\key.png" width="25" height="25" class="img-fluid rounded-start">
                                </div>
                                <input type="text" class="form-control" id="news_id" name="news_id" value="<?= $news_id ?>" disabled>
                                <input type="text" class="form-control" id="news_id" name="news_id" value="<?= $news_id ?>" hidden>
                            </div>
                        </div><br>

                        <label for="judul" class="form-label">Title</label>
                        <div class="row">
                            <div class="col-auto input-group">
                                <div class="input-group-text">
                                    <img src="..\assets\icons\email.png" width="25" height="25" class="img-fluid rounded-start">
                                </div>
                                <input type="text" class="form-control" id="judul" name="judul" value="<?= $data['judul'] ?>">
                            </div>
                        </div><br>

                        <label for="kategori" class="form-label">Category</label>
                        <div class="row">
                            <div class="col-auto input-group">
                                <div class="input-group-text">
                                    <img src="..\assets\icons\questionMark.png" width="25" height="25" class="img-fluid rounded-start">
                                </div>
                                <select id="kategori" class="form-select" form="addData" name="kategori">
                                    <?php
                                        switch($data['kategori']){
                                            case "Politik": ?>
                                                <option selected value="Politik">Politik</option>
                                                <option value="Hukum">Hukum</option>
                                                <option value="Peristiwa">Peristiwa</option>
                                                <option value="Sports">Sports</option>
                                                <?php break;
                                            case "Hukum": ?>
                                                <option value="Politik">Politik</option>
                                                <option selected value="Hukum">Hukum</option>
                                                <option value="Peristiwa">Peristiwa</option>
                                                <option value="Sports">Sports</option>
                                                <?php break;
                                            case "Peristiwa" ?>
                                                <option value="Politik">Politik</option>
                                                <option value="Hukum">Hukum</option>
                                                <option selected value="Peristiwa">Peristiwa</option>
                                                <option value="Sports">Sports</option>
                                                <?php break;
                                            case "Sports" ?>
                                                <option value="Politik">Politik</option>
                                                <option value="Hukum">Hukum</option>
                                                <option value="Peristiwa">Peristiwa</option>
                                                <option selected value="Sports">Sports</option>
                                                <?php break;
                                            } ?>
                                </select>
                            </div>
                        </div><br>

                        <label class="form-label">Picture:</label>
                        <div class="row">
                            <div class="col-auto">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <b>Initial Image File: </b>
                                    </div>
                                    <input type="text" class="form-control" id="news_id" name="news_id" value="<?= $newsImg['gambar'] ?>" disabled>
                                </div>
                                <input type="file" class="form-control" id="gambar" name="gambar">
                            </div>
                        </div><br>

                        <label for="penulis" class="form-label">Writer:</label>
                        <div class="row">
                            <div class="col-auto input-group">
                                <div class="input-group-text">
                                    <img src="..\assets\icons\person.png" width="25" height="25" class="img-fluid rounded-start">
                                </div>
                                <input type="text" class="form-control" id="penulis" name="penulis" value="<?=  $data['penulis'] ?>">
                            </div>
                        </div><br>

                        <label for="tanggal" class="form-label">Date</label>
                        <div class="row">
                            <div class="col-auto input-group">
                                <div class="input-group-text">
                                    <img src="..\assets\icons\calendar.png" width="25" height="25" class="img-fluid rounded-start">
                                </div>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?=  $data['tanggal'] ?>">
                            </div>
                        </div><br>

                        <label for="konten" class="form-label">Content</label>
                        <div class="row">
                            <div class="col-auto input-group">
                                <div class="input-group-text">
                                    <img src="..\assets\icons\newsPaper.png" width="25" height="25" class="img-fluid rounded-start">
                                </div>
                                <textarea id="konten" class="form-control" name="konten" rows="5" cols="80" style="transition:0.25s"><?=  $data['konten'] ?></textarea>
                            </div>
                        </div><br>

                        <?php if (isset($_SESSION['error_edit_message'])) { ?>
                            <div class="alert alert-danger py-1" role="alert">
                                <?= $_SESSION['error_edit_message'] ?>
                            </div>
                        <?php
                            unset($_SESSION['error_edit_message']);
                        } ?>

                        <div class="row">
                            <div class="col-auto">
                                <input type="submit" class="btn btn-primary" id="submit" value="Edit News">
                            </div>
                            <div class="col-auto">
                                <input type="button" class="btn btn-outline-secondary" onclick="document.location='admin.php'" value="Cancel">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>   
    </body>
</html>