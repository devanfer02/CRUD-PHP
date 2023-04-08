<?php
    include "handlers/functions.php";
    $title = 'Login Page';
    if(isset($_POST["login"]))
    {
        $status = login($_POST);
    }
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<?php include 'addons/head.php';?>
<body>
    <!-- <?php include 'addons/navbar.php';?> -->
    <div class="d-flex justify-content-center align-items-center border-bottom mb-4" style="padding-top: 10px;">
        <h1 class="text-center" style="padding-bottom: 10px;">
            [Login Page]
        </h1>
    </div>
    <form action="" method="post" style="padding-top: 10px; padding-left: 14px">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="username" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" autocomplete="off" required>
        </div>
        <button type="submit" class="btn btn-primary" name="login">Login</button>
    </form>
    <div>
        <?php if(isset($status) && $status ): ?>
            <p style="color:red; padding-left:15px; padding-top:7px;">
                Username or Password doesn't match
            </p>
        <?php elseif(isset($status)) : ?>
            <?php header("Location: index.php"); exit;?>
        <?php endif;?>
    </div>
    <div style="padding-left:15px; padding-top:7px;">
        <hr>
        <h4>
            Don't have an account yet? 
        </h4>
        <a href="register.php" class="btn btn-primary" style="padding-bottom: 8px;">Register</a>
        <hr>
    </div>
    <?php include 'addons/footer.php';?>
</body>
</html>