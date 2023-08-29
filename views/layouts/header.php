<!-- Include Config -->
<?php
require_once __DIR__ . '/../../config.php';
require_once __DIR__ . './../../models/Category.php';

$cat = new Category();
$categories = $cat->getAllActive();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>just study</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= asset('assets/plugins/fontawesome-free/css/all.min.css') ?>">
  <link rel="stylesheet" href="<?= asset('assets/plugins/bootstrap-icons/bootstrap-icons.css') ?>">


  <!-- Theme style -->
  <link rel="stylesheet" href="<?= asset('assets/css/adminlte.css') ?>">
  <style>
    :root {
  --font-default: "Open Sans", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --font-primary: "Montserrat", sans-serif;
  --font-secondary: "Poppins", sans-serif;
}

/* Colors */
:root {
  --color-default: C;
  --color-primary: #008374;
  --color-secondary: #f85a40;
}
body {
  font-family: var(--font-default);
 
}

a {
  text-decoration: none;
}

a:hover {
  color:  #f85a40;
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: var(--font-primary);
}
/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
.hero {
  width: 100%;
  position: relative;
  background:  #008378;
  padding: 60px 0 0 0;
}


.hero h2 {
  font-size: 48px;
  font-weight: 700;
  margin-bottom: 20px;
  color: #fff;
}

.hero p {
  color: rgba(255, 255, 255, 0.6);
  font-weight: 400;
  margin-bottom: 30px;
}

.hero .btn-get-started {
  font-family: var(--font-primary);
  font-weight: 500;
  font-size: 15px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 14px 40px;
  border-radius: 50px;
  transition: 0.3s;
  color: #fff;
  background: rgba(255, 255, 255, 0.1);
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.08);
  border: 2px solid rgba(255, 255, 255, 0.1);
}

.hero .btn-get-started:hover {
  border-color: rgba(255, 255, 255, 0.5);
}
.hero .icon-boxes {
  padding-bottom: 0px;
}
.hero .icon-box {
  padding: 60px 30px;
  position: relative;
  overflow: hidden;
  background: white;
  box-shadow: 0 0 29px 0 rgba(0, 0, 0, 0.08);
  transition: all 0.3s ease-in-out;
  border-radius: 8px;
  z-index: 1;
  height: 100%;
  width: 100%;
  text-align: center;
}

.hero .icon-box .title {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 24px;
}

.hero .icon-box .title a {
  color: #008d7d;
  transition: 0.3s;
}

.hero .icon-box .icon {
  margin-bottom: 20px;
  padding-top: 10px;
  display: inline-block;
  transition: all 0.3s ease-in-out;
  font-size: 48px;
  line-height: 1;
  color: rgba(255, 255, 255, 0.6);
  color:#008374;
}

.hero .icon-box:hover {
  background: #009786;
}

.hero .icon-box:hover .title a,
.hero .icon-box:hover .icon {
  color: #fff;
}

   /*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
.footer {
  font-size: 14px;
  background-color: var(--color-primary);
  padding: 50px 0;
  color: white;
}

.footer .footer-info .logo {
  line-height: 0;
  margin-bottom: 25px;
}

.footer .footer-info .logo img {
  max-height: 40px;
  margin-right: 6px;
}

.footer .footer-info .logo span {
  font-size: 30px;
  font-weight: 700;
  letter-spacing: 1px;
  color: #fff;
  font-family: var(--font-primary);
}

.footer .footer-info p {
  font-size: 14px;
  font-family: var(--font-primary);
}

.footer .social-links a {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border: 1px solid rgba(255, 255, 255, 0.2);
  font-size: 16px;
  color: rgba(255, 255, 255, 0.7);
  margin-right: 10px;
  transition: 0.3s;
}

.footer .social-links a:hover {
  color: #f85a40;
  border-color: #f85a40;
}

.footer h4 {
  font-size: 16px;
  font-weight: bold;
  position: relative;
  padding-bottom: 12px;
}

.footer .footer-links {
  margin-bottom: 30px;
}

.footer .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer .footer-links ul i {
  padding-right: 2px;
  color: rgba(0, 131, 116, 0.8);
  font-size: 12px;
  line-height: 0;
}

.footer .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

.footer .footer-links ul li:first-child {
  padding-top: 0;
}

.footer .footer-links ul a {
  color: rgba(255, 255, 255, 0.7);
  transition: 0.3s;
  display: inline-block;
  line-height: 1;
}

.footer .footer-links ul a:hover {
  color: #f85a40;
}

.footer .footer-contact p {
  line-height: 26px;
}

.footer .copyright {
  text-align: center;
}

.footer .credits {
  padding-top: 4px;
  text-align: center;
  font-size: 13px;
}

.footer .credits a {
  color: #fff;
}
.navbar {
  padding: 0.5rem;
}

.navbar-nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 0;
}

.nav-item {
  margin: 0 1rem;
}

.nav-link {
  font-weight: bold;
  color: white;
  text-transform: uppercase;
  text-decoration: none;
}

.nav-link:hover {
  color: #f96f59;
}

h2 {
  margin: 0;
}

h2 span {
  font-size: 1.2em;
}

.wrapper {
  max-width: 1200px;
  margin: 0 auto;
}



  </style>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

   <!-- Navbar -->
<nav class="navbar navbar-expand" style="background-color: #008374;">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a href="<?= url('/') ?>" class="nav-link">
        <div class="m-b-15">
          <img src="<?= url('assets/img/34.png') ?>" class="img-radius" alt="User-Profile-Image">
        </div>
      </a>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?= url('/') ?>" class="nav-link" style="color: white;">Home <span style="color: #f96f59;">.</span></a>
    </li>
    <li class="nav-item d-sm-inline-block">
      <a href="<?= url('views/pages/contact-us.php') ?>" class="nav-link" style="color: white;">Contact US <span style="color: #f96f59;">..</span></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?= url('views/user/login.php') ?>" class="nav-link" style="color: white;">Login <span style="color: #f96f59;">...</span></a>
    </li>
  </ul>

  <!-- Right navbar links -->

</nav>
<!-- /.navbar -->
