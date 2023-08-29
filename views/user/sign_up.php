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
    <div class="col-8 mx-auto">
      <div class="card-header" style="background-color:#008374;">
        <h3 class="card-title" style="color:white;">Register <span style="color:#f96f59;">..</span></h3>
      </div>

        <div class="register-logo">
          <a href="../../index.php"><b>DELTA</b>-PHYSICS</a>
        </div>

        <div class="card ">
          <div class="card-body register-card-body">
            <p class="login-box-msg">Register Through</p>
            <p style="text-align:center;"><b>A.Minhaj</b><br> [B.sc(Elec) Dpartment of Electronics]</p>
            <div style="text-align:center;">
              <a href="#">+94 71 949 1000</a><br>
              <a href="#">+94 77 949 1499</a><br></div><br>

          <div class="card-footer">
                        <a href="<?= url('/') ?>" class="btn btn-default float-right" style="text-align: center;">Back To Home</a>
                    </div>

            </form>
       
          <!-- /.form-box -->
        </div><!-- /.card -->
      </div>
    </div>
  </div>
  </div>

  <!-- /.register-box -->





  <?php
  require_once('./../layouts/footer.php');
  ?>
</body>