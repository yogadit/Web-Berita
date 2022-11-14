<!DOCTYPE html>
<html>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top shadow" style="background-color: rgba(255,255,255,0.7);">
        <div class="container px-2 py-1">
            <a class="navbar-brand fw-bold" href="home.php">Berita.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-center ms-auto me-4 my-3 my-lg-0">
                    <?php
                        include '..\model\navbar_fetch.php';
                        if(isset($_SESSION['username'])){ ?>
                            <li class="nav-item">
                                <div class="btn-group" style="display: block">
                                    <a type="button" class="btn nav-link" id="newsBtn">Berita &#11167</a>
                                    <div id="news" style="width: 100%; margin: auto; display: none; overflow: visible">
                                        <hr class="dropdown-divider">
                                        <a class="nav-link" href="admin.php?category=Politik">Politik</a>
                                        <a class="nav-link" href="admin.php?category=Hukum">Hukum</a>
                                        <a class="nav-link" href="admin.php?category=Peristiwa">Peristiwa</a>
                                        <a class="nav-link" href="admin.php?category=Sports">Sports</a>
                                        <hr class="dropdown-divider">
                                        <a class="nav-link" href="admin.php">All</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item"><a class="nav-link me-lg-3" href="..\controller\logout.php">Logout</a></li>
                            <li class="nav-item">
                                <div class="card mx-auto my-auto">
                                    <div class="card-header p-0">
                                        <div class="row g-0">
                                            <div class="col-sm-2">
                                                <img src="..\assets\profilePictures\<?= $user['profilePicture'] ?>" width="100" height="100" class="img-fluid rounded-start">
                                            </div>
                                            <div class="col-sm-10" style="padding-top: 5%; padding-bottom: 5%">
                                                <?php if($_SESSION['admin'] == true){ ?>
                                                    <b><?= $user['firstName'] . " " . $user['lastName'] . " - " . "<span style='color: darkred'><b>ADMIN</b></span>"?></b>
                                                <?php }
                                                else{ ?>
                                                    <b><?= $user['firstName'] . " " . $user['lastName'] . " - " . "<span style='color: darkgreen'>GUEST</b></span>"?></b>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php }
                        else{ ?>
                            <li class="nav-item"><a class="nav-link me-lg-3" href="login.php">Login</a></li>
                        <?php }
                    ?>
                    <!-- <li class="nav-item"><a class="nav-link me-lg-3" href="#">Berita</a></li> -->
                </ul>
            </div>
        </div>
    </nav>
</html>