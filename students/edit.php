<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">

<?php
session_start();
include_once('../header.php');
include_once('../config.php');

$dept_sel_query = mysqli_query($connection, "Select * from departments");

if (isset($_GET['editid'])) {
    $query = mysqli_query($connection, "Select * from studentinfo where id = " . $_GET['editid']);
    $result = mysqli_num_rows($query);
}

?>
<div class="container my-5">
    <div class="justify-content-center">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Update Student Information</h3>
                        <a href="index.php" class="btn btn-primary float-end">
                            Back to list
                        </a>
                    </div>
                    <div class="card-body">

                        <form action="managestudents.php" class="form-group" method="POST">
                            <?php while ($row_std = mysqli_fetch_assoc($query)) : ?>
                            <input type="hidden" value="<?php echo $row_std['id']; ?> " name="id"
                                class="form-control mb-3">
                            <input type="text" value="<?php echo $row_std['firstname']; ?> " name="fname"
                                class="form-control mb-3" placeholder="First Name">
                            <input type="text" value="<?php echo $row_std['secondname']; ?> " name="sname"
                                class="form-control mb-3" placeholder="Second Name">
                            <input type="text" value="<?php echo $row_std['lastname']; ?> " name="lname"
                                class="form-control mb-3" placeholder="Last Name">
                            <input type="text" value="<?php echo $row_std['phone']; ?> " name="phone"
                                class="form-control mb-3" placeholder="Phone">
                            <?php if ($row_std['gender'] == "Male") { ?>
                            <input type="radio" name="gender" class="mb-3" value="Male" checked> Male
                            <input type="radio" name="gender" class="mb-3" value="Female"> Female
                            <?php } else { ?>
                            <input type="radio" name="gender" class="mb-3" value="Male"> Male
                            <input type="radio" name="gender" class="mb-3" value="Female" checked> Female
                            <?php } ?>

                            <select name="department" class="form-control mb-3">
                                <?php while ($row_dept = mysqli_fetch_assoc($dept_sel_query)) :
                                        if ($row_std['depatment'] == $row_dept['id']) {
                                            $selected = 'selected';
                                        } else {
                                            $selected = '';
                                        } ?>
                                <option class="form-control mb-3" selected=" <?php echo $selected; ?>"
                                    value="<?php echo $row_dept['id']; ?>">
                                    <?php echo $row_dept['dept_name']; ?>
                                </option>;
                                <?php endwhile; ?>
                            </select>


                            <input type="submit" value="Update" name="Update" class="btn btn-success">
                            <?php endwhile; ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
<?php include_once('../footer.php'); ?>