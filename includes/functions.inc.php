<?php

    function emptyInputSignup($name ,$email, $username, $password, $passwordRepeat) {
        $result = 0;
        if (empty($name) || empty($email) || empty($username) || empty($password) || empty($passwordRepeat)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    function invalidUid($username) {
        $result = 0;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    function invalidEmail($email) {
        $result = 0;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    function pwdMatch($password, $passwordRepeat) {
        $result = 0;
        if ($password !== $passwordRepeat) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    function uidExists($conn, $username, $email) {
        $sql = "SELECT * FROM users WHERE usersEMAIL = ? OR usersUSERNAME = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../sign_up.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        } else {
            $result = false;
            return $result;
        }
        mysqli_stmt_close($stmt);
    }

    function createUser($conn, $name, $email, $username, $password) {
        $sql = "INSERT INTO users (usersNAME, usersEMAIL, usersUSERNAME, usersPWD) VALUES (?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../sign_up.php?error=stmtfailed");
            exit();
        }

        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../sign_in.php?error=none");
        exit();
    }
    