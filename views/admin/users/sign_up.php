<?php
require_once('./../layouts/header.php');
?>
<html>

<head>
  <title>Register</title>
</head>

<body>
  <div class="container" style="margin-top: 40px;">
  <div class=" row">
    <div class="col-6 mx-auto">
      <div class="card-header" style="background-color:#008374;">
        <h3 class="card-title" style="color:white;">Register <span style="color:#f96f59;">..</span></h3>
      </div>

        <div class="register-logo">
          <a href="#"><b>DELTA</b>-PHYSICS</a>
        </div>

        <div class="card ">
          <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="register.php" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="user name" name="fname">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="name" name="lname">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email" name="email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="name" class="form-control" placeholder="enable" name="books">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
          </div>
          <div class="card-footer">
                        <button type="submit" class="btn btn" style="background-color:#008374; color:white; border-radius:20px;">Sign up</button>
                        <a href="<?= url('/') ?>" class="btn btn-default float-right">Back To Home</a>
                    </div>

            </form>
       
          <!-- /.form-box -->
        </div><!-- /.card -->
      </div>
    </div>
  </div>
  <?php
  require_once('./../layouts/footer.php');
  ?>
  </div>

  <!-- /.register-box -->





 
</body>