<?php

require_once '../../../models/user.php';
$c = new user();
$result = $c->deleteRec($_GET['id']);
if($result != -1)
{
    header('location: list.php');
}
?>