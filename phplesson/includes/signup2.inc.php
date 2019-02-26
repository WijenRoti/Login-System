<?php
//check if user has clicked the signup button
    if (isset($_POST['submit'])) {
        //then include the database conncetion
        include_once 'dbh.inc.php';
        //and get the data from the signup form
        $first = $_POST['first'];
        $last = $_POST['last'];
        $email = $_POST['email'];
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];


        //check if input are empty
        if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
            header("Location: ../index.php?signup=empty");
            exit();
        }else{
            //check if characters are valid
            if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
                header("Location: ../index.php?signup=char");
                exit();
            }else{
                //check if email is valid
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: ../index.php?signup=invalidemail");    
                    exit();
                }else{
                        header("Location: ../index.php?signup=success");
                        exit();
                    }
                }
            }
        }else{
                header("Location: ../index.php");
                exit();
            } 
