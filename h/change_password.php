<?php
include 'inc/head.php';
include 'inc/header.php';
include 'inc/sidebar.php';

?>

<section class="content"  id="content">
    <div class="container-fluid" style="width: 100%;">
        <div class="block-header">
            <h2><a href="" style="color: #00b6ca;">ofsahin.com</a> / Change Password</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Change Password
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-xs-6" style="border-bottom: 2px solid #ffa700;">
                                <center>
                                    <h4>
                                        <a href="profile.php" style="text-decoration: none; color: #000;">Pharmacy Information</a>
                                    </h4>
                                </center>
                            </div>
                            <div class="col-xs-6" style="border-bottom: 8px solid #ffa700;">
                                <center>
                                    <h4>
                                        <a href="change_password.php" style="text-decoration: none; color: #000;">Change Password</a>
                                    </h4>
                                </center>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <input type="password" name="" placeholder="Your New Password" class="form-control">
                            </div>
                            
                            <div class="col-sm-6">
                                <input type="password" name="" placeholder="Your New Password Again" class="form-control">
                            </div>
                            
                            <div class="col-sm-12">
                                <center>
                                    <input type="submit" class="form-control btn btn-warning" value="save" style="width: 250px;">
                                </center>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include "inc/footer.php";
?>