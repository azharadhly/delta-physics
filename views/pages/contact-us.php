<?php require_once('./../layouts/header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="container">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Contact us</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Contact us</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card" style="background-color:#008374;">
      <div class="card-body row">
        <div class="col-5 text-center d-flex align-items-center justify-content-center">
          <div class="">
            <h2 style="color:white;"><strong style="color:#f96f59;">DELTA</strong>-PHYSICS<strong style="color:#f96f59;">.</strong></h2>
            <p class="lead mb-5" style="color:white;">
             +947 756 2266
            </p>
          </div>
        </div>

        <div class="col-7">
          <form action="contact_save.php" method="post">
            <div class="form-group">
              <label for="inputName" style="color:white;">Name</label>
              <input type="text" id="inputName" class="form-control" name="name" />
            </div>
            <div class="form-group">
              <label for="inputEmail" style="color:white;">E-Mail</label>
              <input type="email" id="inputEmail" class="form-control" name="email"/>
            </div>
            <div class="form-group">
              <label for="inputSubject" style="color:white;">Subject</label>
              <input type="text" id="inputSubject" class="form-control" name="subject"/>
            </div>
            <div class="form-group">
              <label for="inputMessage" style="color:white;">Message</label>
              <textarea id="inputMessage" class="form-control" rows="4" name="mess"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Send message" style="font-family: var(--font-primary);
                 font-weight: 500;
                 font-size: 15px;
                 letter-spacing: 1px;
                 display: inline-block;
                  padding: 14px 40px;
                 border-radius: 50px;
                 transition: 0.3s;
                  color: #fff;
                 background: rgba(255, 255, 255, 0.1);
                 box-shadow: 0 0 15px rgba(0, 0, 0, 0.08);
                 border: 2px solid rgba(255, 255, 255, 0.1);">
            </div>
          </form>
        </div>
      </div>
    </div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php require_once('./../layouts/footer.php'); ?>