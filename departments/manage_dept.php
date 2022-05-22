<?php

session_start();

include_once('../config.php');

//save
if (isset($_POST['add_department'])) {
  $dept_name = $_POST['deprt_name'];
  $dept_short = $_POST['shortname'];
  $result = mysqli_query($connection, "insert into departments(dept_name , dept_short_name) values ('$dept_name' , '$dept_short')");

  $_SESSION['message'] = "Department information is saved";
  $_SESSION['message-type'] = "success";

  header('location: index.php');
}

//delete
if (isset($_GET['deleteid'])) {
  $id = $_GET['deleteid'];

  $result = mysqli_query($connection, "delete from departments where id = " . $id);

  $_SESSION['message'] = "Department successfully deleted";
  $_SESSION['message-type'] = "danger";

  header('location: index.php');
}


//udpate
if (isset($_POST['update_dept'])) {
  $id = $_POST['id'];
  $dept_name = $_POST['deprt_name'];
  $dept_short = $_POST['shortname'];

  $result = mysqli_query($connection, " update departments set dept_name = '$dept_name' , dept_short_name = '$dept_short' where id = '$id' ");
  $_SESSION['message'] = "Department information is Updated Successfully";
  $_SESSION['message-type'] = "primary";

  header('location: index.php');
}
