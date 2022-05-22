<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">

<?php
session_start();
include_once('../header.php');
include_once('../config.php');
$query = mysqli_query($connection, "Select * from studentdisplay");
?>


<div class="container my-5">
    <div class="justify-content-center">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Students List</h3>
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

                        <table class="table table-border table-stripped">
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Second Name</th>
                                <th>Last Name</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th colspan="3">Action</th>
                            </tr>

                            <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['secondname']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['dept_name']; ?></td>
                                <td><a class="btn btn-primary"
                                        href="<?php echo "read.php?viewid=" . $row['id']; ?>">View</a> |
                                    <a class="btn btn-success"
                                        href="<?php echo "edit.php?editid=" . $row['id']; ?>">Edit</a> |

                                    <a class="btn btn-danger" title="Delete"
                                        onclick="return confirm('Are you sure you want to delete?');"
                                        href="<?php echo "managestudents.php?deleteid=" . $row['id']; ?>">Delete</a>
                                </td>


                            </tr>
                            <?php endwhile; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('../footer.php'); ?>