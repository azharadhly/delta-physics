<?php
require_once('./../layouts/header.php');
?>
<div class="container" style="margin-top: 40px;">
    <div class="row" >
        <div class="col-8 mx-auto" >
            <!-- Horizontal Form -->
            <div class="card card-info" >
                <div class="card-header" style="background-color:#008374;">
                    <h3 class="card-title">Login <span style="color:#f96f59;">..</span></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="check_login.php" method="post">
                    <?php
                    $message = flash('register_error');
                    if (!empty($message)) {
                    ?>
                        <div class="mb-2 alert alert-danger"> <small class="form-text text-danger"><?= $message ?></small> </div>
                    <?php
                    } ?>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                    <label class="form-check-label" for="exampleCheck2" style="color:#008374;">Remember me</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn" style="background-color:#008374; color:white; border-radius:20px;">Sign in</button>
                        <a href="<?= url('/') ?>" class="btn btn-default float-right">Back To Home</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.card -->
</body>

</html>

<?php
require_once('./../layouts/footer.php');
?>
