<?php
include 'handlers/functions.php';

$title = "Confirmation Page";

if(isset($_POST["submit"]))
{
    $status = verify($_POST);
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
                        <h3 class="text-center">Confirmation</h3>
                </div>
                <div class="card-body">
                    <form action="" method="post" >
                        <div class="form-group">
                            <label for="username" class="label">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                            autocomplete="off" required>
                        </div>
                        <div>
                            <?php if(isset($status) && $status ): ?>
                                <form action="" method="post">
                                    <label for="password" class="label">Password</label>
                                    <input type="text" class="form-control" id="password" name="password"
                                    autocomplete="off" required>
                                </form>
                            <?php endif;?>
                        </div>
                        <div class="text-center login-btn">
                            <button type="submit" class="btn btn-primary" name="login">Send Code</button>
                        </div>
                    </form>
                </div>
                <hr>
                <div class="card-body register">
                    <a href="login.php" class="btn btn-primary" style="padding-bottom: 8px;">Login</a>
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
</style>
</html>