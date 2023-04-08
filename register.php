<?php
    include "handlers/functions.php";
    $title = 'Register Page';
    if(isset($_POST["register"]))
    {
        $affected = register($_POST);
        if($affected > 0)
        {
            echo "
            <script>
                alert('User has been added! You can relogin to login');
            </script>";
        } else if($affected === -404)
        {
            echo "
            <script>
                alert('Register failed! Username can only consist of lowercase letter and numbers');
            </script>";
        } else if($affected === -405)
        {
            echo "
            <script>
                alert('Register failed! Password confirmation does not match the password');
            </script>";
        } else if($affected === -406)
        {
            echo "
            <script>
                alert('Register failed! Username exist already');
            </script>";
        } else 
        {
            echo mysqli_error($connect);
        }
    }
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<?php include 'addons/head.php';?>
<body>
    <!-- <?php include 'addons/navbar.php';?> -->
    <div class="d-flex justify-content-center align-items-center border-bottom mb-4" style="padding-top: 7px;">
        <h1 class="text-center" style="padding-bottom: 7px;">
            [Registration Page]
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
        <div class="mb-3">
            <label for="confirm" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="confirm" id="confirm" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email" autocomplete="off" required>
        </div>
        <button type="submit" class="btn btn-primary" name="register">Register</button>
    </form>
    <div style="padding-left:15px; padding-top:1px;">
        <hr>
        <h4>
            Have an account already? 
        </h4>
        <a href="login.php" class="btn btn-primary" style="padding-bottom: 8px;">Login</a>
        <hr>
    </div>
    <?php include 'addons/footer.php';?>
</body>
</html>