<?php
require_once('./../layouts/header.php');
require_once __DIR__ . './../../models/Category.php';
require_once __DIR__ . './../../models/Post.php';

$catId = $_GET['categoryId'] ?? null;
?>
<?php
        if (isset($categories))
          foreach ($categories as $category) {
        ?>
          <li class="nav-item">
            <a href="<?= url('views/pages/category.php?categoryId=' . ($category['id'] ?? null)) ?>" class="nav-link">
              <?php
              echo $category['name'];
              ?>
            </a>
          </li>
        <?php
          }
        ?>