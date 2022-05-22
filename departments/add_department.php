<?php include_once('../header.php');

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
                        <form action="manage_dept.php" class="form-group" method="POST">
                            <input type="text" name="deprt_name" class="form-control mb-3" placeholder="Department Name">
                            <input type="text" name="shortname" class="form-control mb-3" placeholder="Department Short Name">

                            <input type="submit" value="Add Department" name="add_department" class="btn btn-success">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
<?php include_once('../footer.php'); ?>