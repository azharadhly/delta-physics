<?php
require_once('../layouts/header.php');
require_once __DIR__ . '../../../../models/user.php';
$c = new user();
$user = $c->getAll();

if (isset($_GET["delete_btn"])) {
    // Get the ID of the item to delete
    $id = $_POST["delete_id"];

    // Display a confirmation message
    echo "<script>
            var result = confirm('Are you sure you want to delete this item?');
            if (result) {
              window.location.href = 'delete.php?id=$id';
            }
          </script>";
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">user</h1>
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
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>UserName</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>permission</th>
                                

                                <th style="width: 200px">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($user as $c) {
                            ?>
                                <tr>
                                    <td><?= $c['id']; ?></td>
                                    <td><?= $c['username']; ?></td>
                                    <td><?= $c['name']; ?></td>
                                    <td><?= $c['email']; ?></td>
                                    <td><?= $c['books']; ?></td>
                                    <td>
                                        <div>
                                            <a class="btn btn-sm btn-info m-2" href="frm_edit_user.php?id=<?php echo $c['id']; ?>">Edit</a>
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
    function confirmDelete(id) {
        // Display a confirmation message
        var result = confirm("Are you sure you want to delete this item?");

        // If the user clicks "OK", redirect to the delete.php page with the ID as a parameter
        if (result) {
            window.location.href = "delete.php?id=" + id;
        }
    }
</script>