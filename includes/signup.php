<?php

session_start();

if (isset($_POST['submit'])) {

    include_once 'connect.php';

    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //error handlers
    //check for empty fields
    if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
        header("Location: ../register.php?signup=empty");
        exit();
    } else {
        //check if input character are valid
        if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
            header("Location: ../register.php?signup=invalid");
            exit();
        } else {
            //chack if email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../register.php?signup=email");
                exit();
            } else {
                $sql = "SELECT * FROM users WHERE user_uid='$uid'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    header("Location: ../register.php?signup=usertaken");
                    exit();
                } else {
                    //hashing the password
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    //insert the user into the database
                    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
                    mysqli_query($conn, $sql);
                    
                    //login nakon registriranja
                    if (isset($_POST['submit'])) {

                        include_once 'connect.php';

                        $uid = mysqli_real_escape_string($conn, $_POST['uid']);
                        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

                        //error handlers
                        //check for empty fields
                        if (empty($uid) || empty($pwd)) {
                            header("Location: ../index.php?login=empty");
                            exit();
                        } else {
                            $sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);
                            if ($resultCheck < 1) {
                                header("Location: ../index.php?login=nedostaje");
                                exit();
                            } else {
                                if ($row = mysqli_fetch_assoc($result)) {
                                    //de-hashing the password
                                    $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
                                    if ($hashedPwdCheck == false) {
                                        header("Location: ../index.php?login=lozinka");
                                        exit();
                                    } elseif ($hashedPwdCheck == true) {
                                        //log in the user here
                                        $_SESSION['u_id'] = $row['user_id'];
                                        $_SESSION['u_first'] = $row['user_first'];
                                        $_SESSION['u_last'] = $row['user_last'];
                                        $_SESSION['u_email'] = $row['user_email'];
                                        $_SESSION['u_uid'] = $row['user_uid'];
                                        header("Location: ../index.php?login=success");
                                        exit();
                                    }
                                }
                            }
                        }  

                    } else {
                        header("Location: ../index.php?login=error");
                        exit();
                    }
                }
            }
        }
    }

} else {
    header("Location: ../register.php");
    exit();
}