<?php

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pwd= $_POST['pwd'];
        $pwd_repeat = $_POST['pwd_repeat'];
        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if (emptyInputSignup($name ,$email, $username, $pwd, $pwd_repeat) !== false) {
            header("location: ../sign_up.php?error=emptyinput");
            exit();
        }
        if (invalidUid($username) !== false) {
            header("location: ../sign_up.php?error=invaliduid");
            exit();
        }
        if (invalidEmail($email) !== false) {
            header("location: ../sign_up.php?error=invalidemail");
            exit();
        }
        if (pwdMatch($pwd, $pwd_repeat) !== false) {
            header("location: ../sign_up.php?error=passwordsdontmatch");
            exit();
        }
        if (uidExists($conn, $username, $email) !== false) {
            header("location: ../sign_up.php?error=usernametaken");
            exit();
        }

        createUser($conn, $name, $email, $username, $pwd);

    } else {
        header("location: ../sign_up.php");
        exit();
    }