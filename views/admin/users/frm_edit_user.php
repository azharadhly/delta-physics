<?php
require_once('../layouts/header.php');
require_once   '../../../models/user.php';
$c = new user();
$user = $c->getById($_GET['id']);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">users</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><a href="#">user</a></li>
                        <li class="breadcrumb-item active"><a href="#">List</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content container">
        <div class="container-fluid">

            <!-- /.card-header -->
            <div class="card-body p-0">
                <!-- general form elements -->
                <div class="card card" >
                    <div class="card-header"style="background-color:#008374 ;color:#fff;">
                        <h3 class="card-title">Update user</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="save_user.php" method="post">
                        <input type="hidden" name="id" value="<?= $user['id']; ?>" />
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" value="<?= $user['name']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">books not return</label>
                                <input type="text" name="books" value="<?= $user['books']; ?>" class="form-control" id="exampleInputEmail1" placeholder="books not return">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn"style="background-color:#008374 ;color:#fff;">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>

        </div>
    </section>
</div>

<?php require_once('../layouts/footer.php'); ?>