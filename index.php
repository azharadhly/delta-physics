<?php
require_once('views/layouts/header.php');
require_once __DIR__ . '/models/Post.php';

$pst = new Post();
$latestPosts = $pst->getLatest();
$posts = $pst->getAll();
?>


<section id="hero" class="hero" >
    <div class="container position-relative" >
        <div class="col-lg-12 col-10 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start" style="margin-left: 20PX;">
            <h2>Welcome To <span style="color:#f85a40;">DELTA PHYSICS</span></h2>
            <p>
            "The beauty of science lies not only in the answers it uncovers but also in the elegance of the questions it poses."            </p>
            <h1><span style="color:#f85a40;">|-----</span><i class="bi bi-book" style="color:white;"></i><span style="color:#f85a40;">-----|</span></h1>
            <div class="col-lg-12 d-flex  justify-content-center">
                <a href="<?= url('views/user/login.php') ?>" class="btn-get-started">Login</a>
                <a href="<?= url('views/user/sign_up.php') ?>" class="btn-get-started" style="margin-left: 35px;">Rgister</a>
            </div>
            <br><br>
        </div>
        
    </div>
</section>

<?php require_once(BASE_PATH . '/views/layouts/footer.php'); ?>