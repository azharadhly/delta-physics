<?php
require_once('../views/layouts/header.php');
require_once __DIR__ . '../../models/Category.php';
require_once __DIR__ . '../../models/User.php';

$cat = new Category();
$cats = $cat->getAll();
$user = new User();
$users = $user->getAll();
?>

<div class="container" style="margin-top: 40px;">
    <div class="row">
        <div class="col-12 mx-auto">
            <div class="card card-info">
                <div class="card-header" style="background-color:#008374;">
                    <h3 class="card-title">Select Units <span style="color:#f85a40;">...</span></h3>
                </div>
                <div class="content mt-5">
                    <div class="container-fluid">
                        <div class="card card-primary">
                            <div class="row">

                                <?php
                                if (isset($cats)) {
                                    // Create connection
                                    $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    $sql = "SELECT name FROM categories";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // Fetch the category name
                                        $row = $result->fetch_assoc();
                                        $category_name = $row["name"];
                                    } else {
                                        $category_name = "Unknown Category";
                                    }
                                    $conn->close();

                                    foreach ($cats as $category) {
                                        if ($category['active'] == '1' && $category['name'] !== 'videos' && $category['name'] !== 'disable') {
                                ?>
                                            <div class="col-lg-4">
                                                <div class="card" style="height: 70px; border-radius:40px;">
                                                    <div class="card-body">
                                                        <a href="<?= url('views/pages/about1.php?postId=' . ($category['id'] ?? null)) ?>">
                                                            <p class="card-text"><b><?= $category['name']; ?></b></p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        } elseif ($category['active'] == '0' && $category['name'] !== 'disable' && $category['name'] !== 'videos') {
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
                                                        <a href="<?= url('views/pages/about1.php?postId=' . ($category['id'] ?? null)) ?>" class="disabled-link">
                                                            <p class="card-text"><b><?= $category['name']; ?></b></p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                <?php
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
require_once '../views/layouts/footer.php';
?>