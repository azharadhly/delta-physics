<?php
require_once('../layouts/header.php');
require_once __DIR__ . '../../../../models/Post.php';
$c = new Post();
$posts = $c->getAll();
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Videos and Papers</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><a href="#">Video</a></li>
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
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Status</th>
                                <th style="width: 200px">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($posts as $key => $c) {
                            ?>
                                <tr>
                                    <td><?= ++$key ?></td>
                                    <td>
                                        <?php
                                        $str =  $c['title'];
                                        if (strlen($str) > 100)
                                            $str = substr($str, 0, 100) . '...';
                                        echo $str;
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $str =  $c['summary'];
                                        if (strlen($str) > 150)
                                            $str = substr($str, 0, 150) . '...';
                                        echo $str;
                                        ?>
                                    </td>

                                   
                                    <td>
                                        <div class="m-2">
                                            <?php if ($c['status'] == 'enable') { ?>
                                                <span class="badge bg-success">Enable</span>
                                            <?php
                                            } else {
                                            ?>
                                                <span class="badge bg-danger">Disable</span>
                                            <?php } ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <a class="btn btn-sm btn-info m-2" href="edit.php?id=<?= $c['id']; ?>">Edit</a>
                                            <a class="btn btn-sm btn-danger m-2" href="#" onclick="confirmDelete(<?= $c['id']; ?>)">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>

</div>
<?php require_once('../layouts/footer.php'); ?>
<script>
    //confirm delete
    function confirmDelete(id) {
        var result = confirm("Are you sure you want to delete this Video?");
        if (result) {
            window.location.href = "delete.php?id=" + id;
        }
    }
</script>