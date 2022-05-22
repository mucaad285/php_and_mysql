<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">

<?php
session_start();

include_once('../header.php');
include_once('../config.php');
if (isset($_GET['editid'])) {
    $query = mysqli_query($connection, "Select * from departments where id = " . $_GET['editid']);
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
                        <h3>Update Department</h3>
                        <a href="index.php" class="btn btn-primary float-end">
                            Back to list
                        </a>
                    </div>
                    <div class="card-body">

                        <form action="manage_dept.php" class="form-group" method="POST">
                            <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <input type="text" name="deprt_name" class="form-control mb-3"
                                value="<?php echo $row['dept_name']; ?>" placeholder="Department Name">
                            <input type="text" name="shortname" class="form-control mb-3"
                                placeholder="Department Short Name" value="<?php echo $row['dept_short_name']; ?>">

                            <input type="submit" value="Add Department" name="update_dept" class="btn btn-success">
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