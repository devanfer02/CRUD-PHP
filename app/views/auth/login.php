<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Login</h3>
            </div>
            <div class="card-body">
                <form action="<?=BASEURL?>/auth/loginUser" method="post" >
                    <div class="form-group">
                        <label for="username" class="label">Username</label>
                        <input type="text" class="form-control" id="username" name="username"
                        autocomplete="off" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="password" class="label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                        autocomplete="off" required>
                    </div>
                    <div class="form-check mt-3">
                        <input type="checkbox" class="form-check-input" name="remember" id="remember">
                        <label class="form-check-label" for="remember">
                            Remember Me
                        </label>
                    </div>
                    <div class="text-center login-btn">
                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                    </div>
                </form>
            </div>
            <hr>
            <div class="card-body register">
                <h5>
                    Don't have an account yet? 
                </h5>
                <a href="<?=BASEURL?>/auth/register" class="btn btn-primary" style="padding-bottom: 8px;">Register</a>
            </div>
        </div>
    </div>
</div>