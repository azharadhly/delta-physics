<?php
require_once('../layouts/header.php');
require_once __DIR__ . '../../../../models/Category.php';
$c = new Category();
$categories = $c->getAllActive();
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Book</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><a href="#">Book</a></li>
                        <li class="breadcrumb-item active"><a href="#">List</a></li>
                        <li class="breadcrumb-item active"><a href="#">Add Book</a></li>
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
                <div class="card card">
                    <div class="card-header"  style="background-color: #008374;">
                        <h3 class="card-title"  style="color: #fff;">Add Book</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="save.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" value="1" name="user_id">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Subject</label>
                                <input required type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
                            </div>

                            <div class="form-group">
                                <label>Title</label>
                                <textarea required class="form-control" name="summary" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">video link  <span style="color:red;">[if this is paper (type "no")]</span></label>
                                <input required type="text" name="body" class="form-control" id="body" placeholder="Enter video link">
                            </div>
                            

                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" required name="cat_id">
                                    <?php
                                    foreach ($categories as $c) {
                                    ?>
                                        <option value="<?= $c['id'] ?>"><?= $c['name'] ?></option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">paper or image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="image" type="file" class="custom-file-input" id="exampleInputFile" accept="file/*">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" required name="status">
                                    <option value="enable"> Issued </option>
                                    <option value="disable"> Not Issued </option>
                                </select>
                            </div>
                          

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"  style="background-color: #008374;color:#fff;">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>

        </div>
    </section>
</div>

<?php require_once('../layouts/footer.php'); ?>