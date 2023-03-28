<?php
session_start();
if (isset($_POST['login'])) {
    $uname = $_POST['email'];
    $password = $_POST['password'];

    $users = simplexml_load_file('files/members.xml');

    foreach ($users -> user as $user) {

        if ($user -> uname == $_POST['email'] && $user -> password == $_POST['password']) {
            header('location: login-blog.html');
            exit;
        }else {
            header('location: login.php?error=Incorrect Username or Password');
        }
    }
} 
?>