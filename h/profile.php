<?php
include 'inc/head.php';
include 'inc/header.php';
include 'inc/sidebar.php';

?>

<section class="content" id="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><a href="" style="color: #00b6ca;">ofsahin.com</a> / Pharmacy Profile</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Pharmacy Profile
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-xs-6" style="border-bottom: 8px solid #ffa700;">
                                <center>
                                    <h4>
                                        <a href="profile.php" style="text-decoration: none; color: #000;">Pharmacy Information</a>
                                    </h4>
                                </center>
                            </div>
                            <div class="col-xs-6" style="border-bottom: 2px solid #ffa700;">
                                <center>
                                    <h4>
                                        <a href="change_password.php" style="text-decoration: none; color: #000;">Change Password</a>
                                    </h4>
                                </center>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <label>Pharmacy Name</label>
                                <input type="text" name="" value="ŞEVVAL" disabled class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label>Pharmacy Gln Number</label>
                                <input type="text" name="" value="8680001448609" disabled class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label>System Start Date</label>
                                <input type="text" name="" value="12/14/2020" disabled class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label>Tax Administration</label>
                                <input type="text" name="" placeholder="Tax Administration" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label>Tax number</label>
                                <input type="text" name="" placeholder="Tax number" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label>Pharmacy Address</label>
                                <input type="text" name="" value="AŞIKPAŞA MAH. ZİYA ORALAY CAD. NO:367/A ÇANKAYA" placeholder="Pharmacy Address" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label>Pharmacy Telephone Number</label>
                                <input type="text" name="" value="03124481803" placeholder="Pharmacy Telephone Number" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label>Pharmacy E-Mail Address</label>
                                <input type="text" name="" placeholder="Pharmacy E-Mail Address" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label>Worked Warehouse</label>
                                <input type="text" name="" placeholder="Worked Warehouse" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label>Dealership</label>
                                <input type="text" name="" placeholder="Dealership" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label>Your İTS User Name </label>
                                <input type="text" name="" placeholder="Your İTS User Name " class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label>Your İTS Password </label>
                                <input type="password" name="" placeholder="Your İTS Password" class="form-control">
                            </div>
                            
                            <div class="col-sm-12">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3391.06496579614!2d72.88217891468113!3d31.79597934066315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39222f6e550291fb%3A0x9659c1dd13c04b97!2sSHAHBAZ514.INC!5e0!3m2!1sen!2s!4v1619869754690!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                                <input style="margin-top: 20px;" type="submit" class="form-control btn btn-warning" value="save">
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