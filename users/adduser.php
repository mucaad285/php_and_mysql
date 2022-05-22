<?php
include_once('../header.php');


?>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">

<div class="container my-5">
    <div class="justify-content-center">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Create Account</h3>
                    </div>
                    <div class="card-body">
                        <form action="manageusers.php" class="form-group" method="POST">
                            <input type="text" name="firstname" class="form-control mb-3" placeholder="First Name">
                            <input type="text" name="secondname" class="form-control mb-3" placeholder="Second Name">
                            <input type="text" name="lastname" class="form-control mb-3" placeholder="Last Name">
                            <input type="email" name="email" class="form-control mb-3" placeholder="Email">
                            <input type="password" name="password" class="form-control mb-3" placeholder="Password">
                            <input type="password" name="cpassword" class="form-control mb-3"
                                placeholder="Confirm Password">
                            <select name="role" class="form-control mb-3">
                                <option value="">-- Please Select your Role</option>
                                <option value="admin">Admin</option>
                                <option value="user">Standard User</option>
                            </select>
                            <input type="submit" value="Sing Up" name="singup"
                                class="btn btn-success form-control mb-3">

                            <p>Already have an account - <a href="#">Sing in instead</a></p>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>

<?php include_once('../footer.php'); ?>