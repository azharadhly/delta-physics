<?php
require_once('../views/layouts/header.php');
require_once __DIR__ . '../../models/Post.php';
require_once __DIR__ . '../../models/user.php';
require_once __DIR__ . '../../models/Category.php';
require_once('../config.php');
$pst = new Post();
$posts = $pst->getAll();
$usr = new user();
$users = $usr->getAll();
?>
<!-- Navbar -->

<div class="container" style="margin-top: 40px;">
    <div class="row">
        <div class="col-12 mx-auto">
            <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header" style="background-color:#008374;">
                    <h3 class="card-title">Select Units <span style="color:#f85a40;">...</span></h3>
                </div>
                <!-- /.card-header -->
                <div class="content mt-5">
                    <div class="container-fluid">
                        <div class="card card-primary ">
                            <div class="row">

                                <?php
                                if (isset($posts)) {
                                    foreach ($posts as $post) {
                                        // Check if the post is issued
                                        if ($post['status'] == 'enable') {
                                            $cato_id = $post['cat_id'];

                                            // Create connection
                                            $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
                                            // Check connection
                                            if ($conn->connect_error) {
                                                die("Connection failed: " . $conn->connect_error);
                                            }

                                            $sql = "SELECT name FROM categories WHERE id = $cato_id";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $result->fetch_assoc()) {
                                                    $category_name = $row["name"];
                                                }
                                            } else {
                                                $category_name = "Unknown Category";
                                            }
                                            $conn->close();
                                            if ($cato_id == 8) {

                                                // Display the post card
                                ?>
                                                <div class="col-lg-4">
                                                    <div class="card" style="height: 70px; border-radius:40px;">
                                                        <div class="card-body">

                                                            <a href="<?= url('views/pages/about.php?postId=' . ($post['id'] ?? null)) ?>">
                                                                <p class="card-text"><b><?= $post['summary']; ?></b></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php
                                            }
                                        } else {
                                            if ($post['status'] == 'disable') {
                                                $cato_id = $post['cat_id'];

                                                // Create connection
                                                $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
                                                // Check connection
                                                if ($conn->connect_error) {
                                                    die("Connection failed: " . $conn->connect_error);
                                                }

                                                $sql = "SELECT name FROM categories WHERE id = $cato_id";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                    // output data of each row
                                                    while ($row = $result->fetch_assoc()) {
                                                        $category_name = $row["name"];
                                                    }
                                                } else {
                                                    $category_name = "Unknown Category";
                                                }
                                                $conn->close();
                                                if ($cato_id == 8) {

                                                    // Display the post card
                                                ?>
                                                    <style>
                                                        .disabled-link {
                                                            pointer-events: none;
                                                            color: gray;
                                                            text-decoration: none;
                                                            cursor: not-allowed;
                                                        }
                                                    </style>
                                                    <div class="col-lg-4">
                                                        <div class="card" style="height: 70px; border-radius:40px;">
                                                            <div class="card-body">

                                                                <a href="<?= url('views/pages/about.php?postId=' . ($post['id'] ?? null)) ?>" class="disabled-link">
                                                                    <p class="card-text"><b><?= $post['summary']; ?></b></p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                <?php
                                                }
                                            }
                                        }
                                    }
                                }
                                ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once('../views/layouts/footer.php');
?>