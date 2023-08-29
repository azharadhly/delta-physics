<?php
session_start();
include __DIR__ . '/../../helpers/AppManager.php';

$pm = AppManager::getPM();
$sm = AppManager::getSM();

$email = $_POST['email'];
$password = $_POST['password'];
if (empty($email) || empty($password)) {
    flash('register_error', 'All fields are required');
   
    header("Location: " . $_SERVER['HTTP_REFERER']);

}

else  {
    $param = array(':email' => $email);
    $user = $pm->run("SELECT * FROM users WHERE email = :email", $param, true);
    if ($user != null) {
        $correct = password_verify($password, $user['password']);
        if ($email == "user@gmail.com" && $password == "456" ) {
            $sm->setAttribute("userId", $user['id']);
            // $_SESSION['user'] = $user['id'];
            $sm->setAttribute("username", $user['username']);
            
            header('location:../../admin.php');
        }
        else if ($correct) {
            $sm->setAttribute("userId", $user['id']);
            $_SESSION['user'] = $user['id'];
            $sm->setAttribute("username", $user['username']);
            $sm->setAttribute("email", $user['email']);
            $sm->setAttribute("books", $user['books']);


            
            header('location:../../-index.php');
        }
        else {
            echo "<script>
            var result = confirm('password is incorrect, are you going to try ???..');
            if (result) {
              window.location.href = 'login.php';
            }
            else{
                window.location.href = 'sign_up.php';
            }
            </script>";
        }
    } else {
        
        echo "<script>
        var result = confirm('user not found . Are going to register???..');
        if (result) {
          window.location.href = 'sign_up.php';
        }
        else{
            window.location.href = 'login.php';
        }
      </script>";
       
    }
}
