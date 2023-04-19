<div class="container card" style="margin-top:10px; margin-bottom:10px;">
    <div class="d-flex justify-content-center align-items-center border-bottom mb-4 card-header" style="padding-top: 7px;">
        <h3 class="text-center" style="padding-bottom: 7px;">
            Registration 
        </h3>
    </div>
    <form action="<?=BASEURL?>/auth/registerUser" method="post" style="padding-top: 10px; padding-left: 14px">
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
        <button type="submit" class="btn btn-primary" name="register">Register</button>
    </form>
    <div style="padding-left:15px; padding-top:1px;">
        <hr>
        <h5>
            Have an account already? 
        </h5>
        <a href="<?=BASEURL?>/auth/login" class="btn btn-primary" style="margin-bottom: 18px;">Login</a>
    </div>
</div>