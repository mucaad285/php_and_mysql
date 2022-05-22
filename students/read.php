<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">

<?php
session_start();
include_once('../header.php');
include_once('../config.php');
if (isset($_GET['viewid'])) {
    $query = mysqli_query($connection, "Select * from studentdisplay where id = " . $_GET['viewid']);
}

?>


<div class="container my-5">
    <div class="justify-content-center">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Student Info</h3>
                        <a href="addstudent.php" class="btn btn-primary float-end">
                            Add new Student info
                        </a>
                    </div>
                    <div class="card-body">
                        <?php if (isset($_SESSION['message'])) { ?>
                        <div class="<?php echo "alert alert-" . $_SESSION['message-type']; ?>">
                            <h3><?php echo $_SESSION['message']; ?></h3>
                            <?php unset($_SESSION['message']);
                                session_destroy();
                                ?>
                        </div>
                        <?php } ?>

                        <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                        <br>
                        <table class="table table-stripped">
                            <tr>
                                <td><b>ID</b></td>
                                <td> <?php echo $row['id']; ?> </td>
                            </tr>
                            <tr>
                                <td><b>First Name </b></td>
                                <td><?php echo $row['firstname']; ?></td>
                            </tr>

                            <tr>
                                <td><b>Second Name </b></td>
                                <td><?php echo $row['secondname']; ?></td>
                            </tr>

                            <tr>
                                <td><b>Last Name </b></td>
                                <td><?php echo $row['lastname']; ?></td>
                            </tr>

                            <tr>
                                <td><b>Phone </b></td>
                                <td><?php echo $row['phone']; ?></td>
                            </tr>

                            <tr>
                                <td><b>Gender</b></td>
                                <td><?php echo $row['gender']; ?></td>
                            </tr>
                            <tr>
                                <td><b>department</b></td>
                                <td><?php echo $row['dept_name']; ?></td>
                            </tr>
                        </table>
                        <?php endwhile; ?>

                        <a class="btn btn-success  col-4"
                            href="<?php echo "edit.php?editid=" . $_GET['viewid'] ?>">Edit</a>


                        <a class="btn btn-danger  col-4" title="Delete"
                            onclick="return confirm('Are you sure you want to delete?');"
                            href="<?php echo "managestudents.php?deleteid=" . $_GET['viewid'] ?>">Delete</a>




                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>


<?php include_once('../footer.php'); ?>