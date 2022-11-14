<!DOCTYPE html>
<html>
    <?php include 'head.php'; ?>
    <?php 
    include '..\model\news_fetch.php'; 
    if(isset($_GET['category'])){
        $category = $_GET['category'];
    }
    ?>
    <body>
        <?php include 'navbar_admin.php' ?>
        <div class="news-header">
            <h1 class="news-header-title"><?php if(isset($_GET['category'])) echo $_GET['category']; else echo "All"; ?></h1>
        </div>
        <div class="container-fluid">
            <div class="flex my-3 mx-auto">
                <a href="add.php" class="w-25 btn btn-outline-primary">Add New News</a>
            </div>
            <table id="example" class="table table-striped tableText" style="width:100%; text-align: center">
            <thead>
                <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Category</th>
                <th>Image</th>
                <th>Writer</th>
                <th>Publication Date</th>
                <th>Content</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($category)){ ?>
                <?php foreach ($beritas as $i => $news) { 
                    if($news['kategori'] == $category){?>
                <tr>
                    <td style="width: 5%"><?= $news['ID_post'] ?></td>
                    <td style="width: 20%"style="width: 10%"><?= $news['judul'] ?></td>
                    <td style="width: 5%"><?= $news['kategori'] ?></td>
                    <td style="width: 5%"><?= $news['gambar'] ?></td>
                    <td style="width: 5%"><?= $news['penulis'] ?></td>
                    <td style="width: 10%"><?= $news['tanggal'] ?></td>
                    <td style="width: 40%">
                        <div class='spend' style="display: inline-block">
                            <div class="spend-inner">
                                <div class="spend-front">
                                    <p>Hover me</p>
                                </div>
                                <div class="spend-back">
                                    <?= $news['konten'] ?></td>
                                </div>
                            </div>
                        </div>
                    </td>

                    <?= '<td style="width: 10%"><a style="width: 100%" href="' . $base_url . '/controller/doHapus.php?News_id=' . $news['ID_post'] .'" class="btn btn-outline-danger tableText">Delete</a>'
                    . '<a style="width: 100%" href="edit.php?News_id=' . $news['ID_post'] .'" class="btn btn-outline-warning tableText">Edit</a></td>' ?>
                </tr>
                <?php } } }
                else{?>
                <?php foreach ($beritas as $i => $news) { ?>
                <tr>
                    <td style="width: 5%"><?= $news['ID_post'] ?></td>
                    <td style="width: 20%"style="width: 10%"><?= $news['judul'] ?></td>
                    <td style="width: 5%"><?= $news['kategori'] ?></td>
                    <td style="width: 5%"><?= $news['gambar'] ?></td>
                    <td style="width: 5%"><?= $news['penulis'] ?></td>
                    <td style="width: 10%"><?= $news['tanggal'] ?></td>
                    <td style="width: 40%">
                        <div class='spend' style="display: inline-block">
                            <div class="spend-inner">
                                <div class="spend-front">
                                    <p>Hover me</p>
                                </div>
                                <div class="spend-back">
                                    <?= $news['konten'] ?></td>
                                </div>
                            </div>
                        </div>
                    </td>

                    <?= '<td style="width: 10%"><a style="width: 100%" href="' . $base_url . '/controller/doHapus.php?News_id=' . $news['ID_post'] .'" class="btn btn-outline-danger tableText">Delete</a>'
                    . '<a style="width: 100%" href="edit.php?News_id=' . $news['ID_post'] .'" class="btn btn-outline-warning tableText">Edit</a></td>' ?>
                </tr>
                <?php } }?>
            </tbody>
            <tfoot>
                <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Category</th>
                <th>Image</th>
                <th>Writer</th>
                <th>Publication Date</th>
                <th>Content</th>
                <th>Action</th>
                </tr>
            </tfoot>
            </table>
        </div>
        <?php include 'footer.php'; ?>

        <script>
            $(document).ready(function() {
            $('#example').DataTable({
                "order": [
                [0, 'asc']
                ]
            });
            });
        </script>
    </body>
<html>