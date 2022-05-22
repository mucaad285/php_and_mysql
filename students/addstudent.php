<?php
include_once('../header.php');
include_once('../config.php');
$query = mysqli_query($connection, "Select * from departments");
?>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">

<div class="container my-5">
    <div class="justify-content-center">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>save</h3>
                        <a href="index.php" class="btn btn-primary float-end">
                            Back to list
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="managestudents.php" class="form-group" method="POST">
                            <input type="text" name="fname" class="form-control mb-3" placeholder="First Name">
                            <input type="text" name="sname" class="form-control mb-3" placeholder="Second Name">
                            <input type="text" name="lname" class="form-control mb-3" placeholder="Last Name">
                            <input type="text" name="phone" class="form-control mb-3" placeholder="Phone">
                            <input type="radio" name="gender" class="mb-3" value="Male"> Male
                            <input type="radio" name="gender" class="mb-3" value="Female"> Female


                            <select name="department" class="form-control mb-3">
                                <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                                <option value="<?php echo $row['id']; ?> "> <?php echo $row['dept_name']; ?></option>;
                                <?php endwhile; ?>
                            </select>

                            <input type="submit" value="Save" name="Save" class="btn btn-success ">

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
<?php include_once('../footer.php'); ?>