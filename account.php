<?php
  include("includes/header.php");
?>
<div class="row text-center py-5" style="color:#444;">
  <div class="mx-auto col-md-6 mx-5 bg-white my-5 p-5 border-right">
    <h1 class="mb-4">Log in</h1>
    <form>
      <div class="form-group"> <input type="text" name="username" class="form-control" placeholder="Enter username" id="form9"> </div>
      <div class="form-group mb-3"> <input type="password" class="form-control" name="password" placeholder="Password" id="form10"> <small class="form-text text-muted text-right">
          <a href="recover.php"> Recover password</a>
        </small> </div> <button type="submit" name="signin" class="btn btn-outline-info">Sign in</button>
    </form>
  </div>
  <div class="mx-auto col-md-6 my-5 mx-5 bg-white p-5">
    <h1 class="mb-4">Sign up</h1>
    <form>
      <div class="form-group"> <input name="username" type="text" class="form-control" placeholder="Enter username" id="form9"> </div>
      <div class="form-group mb-3"> <input name="password" type="password" class="form-control" placeholder="Password" id="form10"> <small class="form-text text-muted text-right">
          <a href="account.php"> Have an account?</a>
        </small> </div> <button type="submit" name="signup" class="btn btn-outline-info">Sign up</button>
    </form>
  </div>
</div>
<?php
  include("includes/footer.php");
?>
