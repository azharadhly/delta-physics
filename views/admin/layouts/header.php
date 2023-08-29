<!-- Include Config -->
<?php
require_once __DIR__ . '/../../../config.php';

//auth check
include __DIR__.'/../../../helpers/AppManager.php';
$sm = AppManager::getSM();
$username = $sm->getAttribute("username");
if (!isset($username)) header('location: ../admin/auth/login.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>library | Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= asset('assets/plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= asset('assets/css/adminlte.css') ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= asset('assets/plugins/summernote/summernote-bs4.min.css') ?>">
  <style>
    .logo {
      width: 100px
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?= asset('assets/img/loader.gif') ?>" alt="DELTA-PHYSICS" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light " >
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Admin</a>
        </li>
      </ul>

    </nav>
    <!-- /.navbar -->


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#008374;">
      <!-- Brand Logo -->
      <a href="#" class="brand-link text-center">
              <div class="m-b-25" style="margin-right:10px; margin-left:10px;">
                    <img src="<?= asset('assets/img/34.png ') ?>"  class="img-radius" alt="User-Profile-Image">
                  </div>
        <span class="brand-text font-weight-light">DELTA PHYSICS</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= asset('assets/img/avatar5.png') ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?= $username ?? '' ?></a>
          </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Category
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= url('/views/admin/categories/frm_new_category.php') ?>" class="nav-link">

                    <p>Create Category</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= url('/views/admin/categories/list.php') ?>" class="nav-link">
                    <p>List Category</p>
                  </a>
                </li>
              </ul>
            </li>

            
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  user
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                
                <li class="nav-item">
                  <a href="<?= url('/views/admin/users/sign_up.php') ?>" class="nav-link">
                    <p>create user</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= url('/views/admin/users/list.php') ?>" class="nav-link">
                    <p>List user</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Messages
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                
                <li class="nav-item">
                  <a href="<?= url('/views/admin/contact/mess.php') ?>" class="nav-link">
                    <p>List Messages</p>
                  </a>
                </li>
              </ul>
            </li>



            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
               Videos
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= url('/views/admin/posts/create.php') ?>" class="nav-link">

                    <p>Add Videos</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= url('/views/admin/posts/list.php') ?>" class="nav-link">
                    <p>List Videos</p>
                  </a>
                </li>
              </ul>
            </li>
            
            <li class="nav-item">
              <a href="<?=  url('/views/admin/auth/logout.php');?>" class="nav-link">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p class="text">Logout</p>
              </a>
            </li>


        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>