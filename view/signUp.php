<!DOCTYPE html>
<html>
    <?php include 'head.php' ?>
    <body>
        <?php include 'navbar.php' ?>
        <div class="container-fluid">
            <div class="card mx-auto my-5 formBox">
                <div class="card-header">
                    <h3>Create New Account</h3>
                </div>
                <div class="card-body">
                    <form id="signUp" method="post" action="..\controller\insert_user.php" enctype="multipart/form-data">
                        <label for="firstName" class="form-label">Name:</label>
                        <div class="row">
                            <div class="col-auto input-group w-50">
                                <div class="input-group-text">
                                    <img src="..\assets\icons\person.png" width="25" height="25" class="img-fluid rounded-start">
                                </div>
                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
                            </div>
                            <div class="col-auto input-group w-50">
                                <div class="input-group-text">
                                    <img src="..\assets\icons\person.png" width="25" height="25" class="img-fluid rounded-start">
                                </div>
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
                            </div>
                        </div><br>
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
                            <div class="col-auto input-group w-50">
                                <div class="input-group-text">
                                    <img src="..\assets\icons\lock.png" width="25" height="25" class="img-fluid rounded-start">
                                </div>
                                <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                            </div>
                            <div class="col-auto input-group w-50">
                                <div class="input-group-text">
                                    <img src="..\assets\icons\lock.png" width="25" height="25" class="img-fluid rounded-start">
                                </div>
                                <input type="password" class="form-control" id="pass_check" name="pass_check" placeholder="Re-type Password">
                            </div>
                        </div><br>
                        <label for="birthDate" class="form-label">Birth Date:</label>
                        <div class="row">
                            <div class="col-auto input-group">
                                <div class="input-group-text">
                                    <img src="..\assets\icons\calendar.png" width="25" height="25" class="img-fluid rounded-start">
                                </div>
                                <input type="date" class="form-control" id="birthDate" name="birthDate" placeholder="Birth Date">
                            </div>
                        </div><br>
                        <label class="form-label">Gender:</label>
                        <div class="row">
                            <div class="col-auto input-group">
                                <div class="input-group-text">
                                    <img src="..\assets\icons\gender.png" width="25" height="25" class="img-fluid rounded-start">
                                </div>
                                <select id="gender" class="form-select" form="signUp" name="gender">
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                            </div>
                        </div><br>
                        <label class="form-label">Profile Picture:</label>
                        <div class="row">
                            <div class="col-auto">
                                <input type="file" class="form-control" id="profilePicture" name="profilePicture">
                            </div>
                        </div><br>

                        <?php if (isset($_SESSION['error_register_message'])) { ?>
                            <div class="alert alert-danger py-1" role="alert">
                                <?= $_SESSION['error_register_message'] ?>
                            </div>
                        <?php
                            unset($_SESSION['error_register_message']);
                        } ?>

                        <div class="row">
                            <div class="col-auto">
                                <input type="submit" class="btn btn-primary" id="submit" value="Sign Up">
                            </div>
                            <div class="col-auto">
                                <input type="button" class="btn btn-outline-secondary" onclick="document.location='login.php'" value="Cancel">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>