<?php

?>

<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">

<div class="container my-5">
    <div class="justify-content-center">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Login</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <input type="email" name="txtEmail" class="form-control mb-3" placeholder="Email" />


                            <input type="password" name="txtPassword" class="form-control mb-3"
                                placeholder="Password" />


                            <select name="role" class="form-control mb-3">
                                <option value="">-- Please Select your Role</option>
                                <option value="admin">Admin</option>
                                <option value="user">Standard User</option>
                            </select>

                            <div class=" mb-3">
                                <p><a class="text-center" href="#!">Forgot password?</a></p>
                                <button name="login" type="submit" class="btn btn-primary float-end">Sign
                                    in</button>
                            </div>





                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>

<?php include_once('../footer.php'); ?>