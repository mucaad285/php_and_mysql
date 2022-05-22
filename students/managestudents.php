<?php

session_start();

include_once('../config.php');

//save
if (isset($_POST['Save'])) {
  $fname = $_POST['fname'];
  $sname = $_POST['sname'];
  $lname = $_POST['lname'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];
  $dob = date('Y-m-d', strtotime($_POST['dob']));
  $dept = $_POST['department'];

  $result = mysqli_query($connection, "insert into studentinfo(firstname , secondname ,
     lastname , phone, gender , department) values ('$fname' , '$sname' , '$lname' ,
      '$phone' , '$gender' , '$dept')");

  $_SESSION['message'] = "Student information is saved";
  $_SESSION['message-type'] = "success";

  header('location: index.php');
}

//delete
if (isset($_GET['deleteid'])) {
  $id = $_GET['deleteid'];

  $result = mysqli_query($connection, "delete from studentinfo where id = " . $id);

  $_SESSION['message'] = "Student information is deleted successfully from database";
  $_SESSION['message-type'] = "danger";

  header('location: index.php');
}

//udpate
if (isset($_POST['Update'])) {
  $id = $_POST['id'];
  $fname = $_POST['fname'];
  $sname = $_POST['sname'];
  $lname = $_POST['lname'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];
  $dept = $_POST['department'];

  $result = mysqli_query($connection, " update studentinfo set firstname = '$fname' , secondname = '$sname' ,
     lastname =  '$lname'  , phone = '$phone', gender = '$gender' , department = '$dept' where id = '$id' ");
  $_SESSION['message'] = "Student information is Updated Successfully";
  $_SESSION['message-type'] = "primary";

  header('location: index.php');
}