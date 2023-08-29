<?php
require_once('./../layouts/header.php');
require_once __DIR__ . './../../models/Post.php';
$postId = $_GET['postId'] ?? null;

//if category id not found
if (!$postId) die('Post Not Found');

$cat = new Post();
$post = $cat->getById($postId);

?>
<!-- Content Wrapper. Contains page content -->
<div class="container">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>
            <?= $post['title']; ?>
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Video</li>
          </ol>
        </div>

        <!-- /.col-md-6 -->
        <div class="col-lg-12">

          <div class="card card-light card-outline">
            <div class="card-body">
              <p class="card-text"><?= $post['summary']; ?></p>
              <?php
              $link = $post['body'];
              $pdfFileName = $post['image'];
              if ($link === 'no') {
              ?>
                <iframe src="../../assets/uploads/<?php echo $pdfFileName; ?>" height="500px" width="100%" title="Iframe Example"></iframe>
              <?php
              } else {
              ?>
                <iframe width="100%" height="300px" src="<?= $link ?>" title="YouTube video player" frameborder="a0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen></iframe>
              <?php
              }
              ?>
            </div>
          </div>

        

        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php require_once('./../layouts/footer.php'); ?>