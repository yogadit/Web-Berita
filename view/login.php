<?php
    include '..\include\db_connect.php';
    $letters = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    for($i=0;$i<5;$i++){
        $pass[$i] = $letters[rand(0,strlen($letters)-1)];
    }
?>

<!DOCTYPE html>
<html>
    <?php include 'head.php' ?>
    <body>
        <?php include 'navbar.php' ?>
        <div class="container-fluid">
            <div class="card mx-auto my-5 formBox">
                <div class="card-header">
                    <h3>Login</h3>
                </div>
                <div class="card-body">
                    <form id="login" method="post" action="..\controller\check_login_user.php">
                        <label for="username" class="form-label">Username/Email:</label>
                        <div class="row">
                            <div class="col-auto input-group">
                                <div class="input-group-text">
                                    <img src="..\assets\icons\email.png" width="25" height="25" class="img-fluid rounded-start">
                                </div>
                                <input type="email" class="form-control" id="username" name="username" placeholder="Username/Email">
                            </div>
                        </div><br>

                        <label for="pass" class="form-label">Password:</label>
                        <div class="row">
                            <div class="col-auto input-group">
                                <div class="input-group-text">
                                    <img src="..\assets\icons\lock.png" width="25" height="25" class="img-fluid rounded-start">
                                </div>
                                <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-sm-auto h-auto mx-auto w-50">
                                <div class="card">
                                    <div class="card-header captchaText">
                                        <b><?= implode("", $pass) ?></b>
                                        <input type="text" class="form-control" id="captcha" name="captcha" value="<?= implode('', $pass) ?>" hidden>
                                    </div>
                                    <div class="card-footer captchaText">
                                        <a class="btn btn-outline-secondary w-100 h-100" href="login.php"><img src="..\assets\icons\redo.png" width="25" height="25" class="img-fluid rounded-start"></a>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-sm-auto input-group">
                                <div class="input-group-text">
                                    <img src="..\assets\icons\recaptcha.png" width="25" height="25" class="img-fluid rounded-start">
                                </div>
                                <input type="text" class="form-control" id="recaptcha" name="recaptcha" placeholder="Re-type reCAPTCHA">
                            </div>
                        </div><br>

                        <?php if (isset($_SESSION['error_login_message'])) { ?>
                            <div class="alert alert-danger py-1" role="alert">
                                <?= $_SESSION['error_login_message'] ?>
                            </div>
                        <?php
                            unset($_SESSION['error_login_message']);
                        } ?>

                        <div class="row">
                            <div class="col-auto">
                                <input type="submit" class="btn btn-primary" id="submit" value="Sign In">
                            </div>
                            <div class="form-text">
                                Don't have an account yet?
                                <a href="signUp.php">Create one now!</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>