<?php
include __DIR__.'/helpers/AppManager.php';
$sm = AppManager::getSM();
$username = $sm->getAttribute("username");

if(isset($username))
{
    header('location: views/admin/dashboard.php');
}   
else
{
    header('location: views/admin/auth/login.php');
}

?>