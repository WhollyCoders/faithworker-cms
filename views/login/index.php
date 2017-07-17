<?php
require('../../assets/includes/header.inc.php');
// if(){}
?>
<div class="row">
  <section>
    <h2>FaithWorker Login</h2>
    <div class="fwm-login col-md-6">
      <form class="form-login" action="" method="post">
        <div class="form-group">
          <label for="login_username">Username</label>
          <input type="email" class="form-control" id="login_username" name="login_username" placeholder="Username">
        </div>
        <div class="form-group">
          <label for="login_password">Password</label>
          <input type="password" class="form-control" id="login_password" name="login_password" placeholder="Password">
        </div>
        <p>
          <button type="submit" class="btn btn-default" name="login_submit">Login</button>
        </p>
      </form>
    </div>
  </section>
</div>
<?php require('../../assets/includes/footer.inc.php'); ?>
