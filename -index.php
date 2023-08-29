<?php
session_start();
require_once('views/layouts/header.php');
require_once('models/user.php');
if (isset($_SESSION['id']) || isset($_SESSION['username'])) {
?>
  <style>
    body {
      background-color: #f9f9fa
    }

    .padding {
      padding: 3rem !important
    }

    .user-card-full {
      overflow: hidden;
    }

    .card {
      border-radius: 5px;
      -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
      box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
      border: none;
      margin-bottom: 30px;
    }

    .m-r-0 {
      margin-right: 0px;
    }

    .m-l-0 {
      margin-left: 0px;
    }

    .user-card-full .user-profile {
      border-radius: 5px 0 0 5px;
    }

    .bg-c-lite-green {
      background-color: #008374;
    }

    .user-profile {
      padding: 20px 0;
    }

    .card-block {
      padding: 1.25rem;
    }

    .m-b-25 {
      margin-bottom: 25px;
    }

    .img-radius {
      border-radius: 5px;
    }

    h6 {
      font-size: 14px;
    }

    .card .card-block p {
      line-height: 25px;
    }

    @media only screen and (min-width: 1400px) {
      p {
        font-size: 14px;
      }
    }

    .card-block {
      padding: 1.25rem;
    }

    .b-b-default {
      border-bottom: 1px solid #e0e0e0;
    }

    .m-b-20 {
      margin-bottom: 20px;
    }

    .p-b-5 {
      padding-bottom: 5px !important;
    }

    .card .card-block p {
      line-height: 25px;
    }

    .m-b-10 {
      margin-bottom: 10px;
    }

    .text-muted {
      color: #919aa3 !important;
    }

    .b-b-default {
      border-bottom: 1px solid #e0e0e0;
    }

    .f-w-600 {
      font-weight: 600;
    }

    .m-b-20 {
      margin-bottom: 20px;
    }

    .m-t-40 {
      margin-top: 20px;
    }

    .p-b-5 {
      padding-bottom: 5px !important;
    }

    .m-b-10 {
      margin-bottom: 10px;
    }

    .m-t-40 {
      margin-top: 20px;
    }
  </style>
  <div class="page-content page-container" id="page-content">
    <div class="padding">
      <div class="row container d-flex justify-content-center">
        <div class="col-xl-6 col-md-12">
          <div class="card user-card-full">
            <div class="row m-l-0 m-r-0">
              <div class="col-sm-4 bg-c-lite-green user-profile">
                <div class="card-block text-center text-white">
                  <div class="m-b-25">
                    <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                  </div>
                  <h6 class="f-w-600">Hello <?php echo $_SESSION['username'] ?></h6>
                  <p>WELCOME TO <span style="color: #f85a40;">DELTA</span>-PHYSICS</p>
                  <a class="btn btn-danger" style="border-radius:15px;" href="views/admin/auth/logout.php">logout</a>
                  <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="card-block">
                  <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">Name</p>
                      <h6 class="text-muted f-w-400"><?php echo $_SESSION['username'] ?></h6>
                    </div>
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">Email</p>
                      <h6 class="text-muted f-w-400"><?php echo $_SESSION['email'] ?></h6>
                    </div>
                  </div>
                  <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">"Science is the art of asking 'why,' and the journey to find the answers is where brilliance thrives" </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    ?>
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-6 col-6">
        <!-- small box -->
        <div class="small-box" style="background-color:#008374;">
          <div class="inner">
            <h3 style="color:#fff;">Vide<span style="color:#f85a40;">o</span>s</h3>
            <p>learn the reality</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="books/physics.php" class="small-box-footer">Let's Start <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-6  col-6">
        <!-- small box -->
        <div class="small-box " style="background-color:#008374;">
          <div class="inner">
            <h3 style="color:#fff;">Pape<span style="color:#f85a40;">r</span>s</h3>
            <p>Do some exercise</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="books/paper.php" class="small-box-footer">Let's Start <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
  <?php
} else {
}
require_once(BASE_PATH . '/views/layouts/footer.php'); ?>