<?php
session_start();
include_once('../config.php');

//create user
if (isset($_POST['singup'])) {
    $fname = $_POST['firstname'];
    $sname = $_POST['secondname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $pass1 = $_POST['password'];
    $pass2 = $_POST['cpassword'];
    $role = $_POST['role'];
    if ($pass1 == $pass2) {
        $qry_insert = "insert into users (firstname , secondname, lastname , email , password , role) values ('$fname','$sname','$lname','$email', '$pass1', '$role')";
        $saved = mysqli_query($connection, $qry_insert);
        if ($saved) {
            echo 'user saved';
        } else {
            echo 'user not saved';
        }
    } else {
        echo 'passwords does not match';
    }
}