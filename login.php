<?php
include "handlers/functions.php";
session_start();
// checkCookie();
// checkSession();
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
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Login</h3>
                </div>
                <div class="card-body">
                    <form action="" method="post" >
                        <div class="form-group">
                            <label for="username" class="label">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                            autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                            autocomplete="off" required>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember">
                            <label class="form-check-label" for="remember">
                                Remember Me
                            </label>
                        </div>
                        <div>
                            <?php if(isset($status) && $status ): ?>
                                <?php header("Location: index.php"); exit;?>
                            <?php elseif(isset($status)) : ?>
                                <p class="warn">
                                    Username or Password doesn't match
                                </p>
                            <?php endif;?>
                        </div>
                        <div class="text-center login-btn">
                            <button type="submit" class="btn btn-primary" name="login">Login</button>
                        </div>
                        <form action="" method="post">
                            <a href="confirmation.php" class="forgot-link">Forgot Password</a>
                        </form>
                    </form>
                </div>
                <hr>
                <div class="card-body register">
                    <h5>
                        Don't have an account yet? 
                    </h5>
                    <a href="register.php" class="btn btn-primary" style="padding-bottom: 8px;">Register</a>
                </div>
            </div>
        </div>
    </div>
</body>
<style>
    .login-btn{
        margin-top:20px;
    }
    .text-center{
        padding-top: 10px;
    }
    .label{
        padding-top:10px;
        padding-bottom: 5px;
    }
    .btn{
        margin-top:5px;
    }
    .register{
        margin-left: 1px;
    }
    .form-check{
        margin-top:12px;
        margin-left:1px;
    }
    .warn{
        color: red;
    }

    .forgot-link{
        text-decoration: none;
        color:#007bff;
    }

    .forgot-link:hover{
        color: white;
    }
    form{
        min-height: 220px;
    }
</style>
</html>