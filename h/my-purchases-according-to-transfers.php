<?php
include 'inc/head.php';
include 'inc/header.php';
include 'inc/sidebar.php';

?>
<section class="content" id="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><a href="" style="color: #00b6ca;">ofsahin.com</a> / My Purchases / According to Shipment</h2>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        My purchases
                    </h2>
                </div>
                <div class="body">
                	<div class="row">
                		<div class="col-xs-4" style="border-bottom: 2px solid #ffa700;">
                			<center>
                				<h4>
                					<a href="my-purchases-according-to-pharmacies.php" style="text-decoration: none; color: #000;">By Pharmacies</a>
                				</h4>
                			</center>
                		</div>
                		<div class="col-xs-4" style="border-bottom: 2px solid #ffa700;">
                			<center>
                				<h4>
                					<a href="my-purchases-according-to-products.php" style="text-decoration: none; color: #000;">By Products</a>
                				</h4>
                			</center>
                		</div>
                		<div class="col-xs-4" style="border-bottom: 8px solid #ffa700;">
                			<center>
                				<h4>
                					<a href="my-purchases-according-to-transfers.php" style="text-decoration: none; color: #000;">
                						According to Shipment
                					</a>
                				</h4>
                			</center>
                		</div>
                	</div>
                        <style>
                            .modal-dialog {
                                width: 100%;
                                margin: auto;
                                margin-top: 30px;
                            }
                        </style>
                        
                        <div class="row">
                            <div class="col-sm-5">
                                <div style="background: url('https://supereczacilar.com/supereczacilar/app-assets/images/backgrounds/button-bg.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center; height: 100px;">
                                    <div class="row" style="display: flex; margin: auto;">
                                        <div class="col-sm-12">
                                            <h5 style="color: #fff; margin-top: 7%;">
                                                <center>
                                                    <i class="fa fa-print"></i>
                                                    <br>
                                                    Print List
                                                </center>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 20px;">
                                    <div class="col-xs-10">
                                        <input type="date" name="" class="form-control" title="Select Date">
                                    </div>
                                    <div class="col-xs-2">
                                        <button class="btn" style="background-color: transparent;">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                    <div class="col-xs-12">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">All</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="all">
                                                <!-- Basic Examples -->
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                        <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Release Date</th>
                                                            <th>Number of Purchases</th>
                                                            <th>Status</th>
                                                        </tr>
                                                        </thead>
                                                        <tfoot>
                                                        <tr>
                                                            <th></th>
                                                            <th>Release Date</th>
                                                            <th>Number of Purchases</th>
                                                            <th>Status</th>
                                                        </tr>
                                                        </tfoot>
                                                        <tbody>

                                                        <?php
                                                        $i = 0;
                                                        while ($i <= 20) {
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <form>
                                                                        <div class="demo-checkbox">
                                                                            <input type="checkbox" id="basic_checkbox_all_<?php echo($i) ?>"/>
                                                                            <label for="basic_checkbox_all_<?php echo($i) ?>"></label>
                                                                        </div>
                                                                    </form>
                                                                </td>
                                                                <td>
                                                                    03 May 2021, Monday
                                                                </td>
                                                                <td>4</td>
                                                                <td>Completed</td>
                                                            </tr>
                                                            <?php
                                                            $i++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div style="background: url('https://supereczacilar.com/supereczacilar/app-assets/images/backgrounds/button-bg.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center; height: 100px;">
                                    <div class="row" style="display: flex; margin: auto;">
                                        <div class="col-sm-4">
                                            <h5 style="color: #fff; margin-top: 20%;">
                                                <center>
                                                    <i class="fa fa-info"></i>
                                                    <br>
                                                    Notify ITS Buyer
                                                </center>
                                            </h5>
                                        </div>
                                        <div class="col-sm-4">
                                            <h5 style="color: #fff; margin-top: 20%;">
                                                <center>
                                                    <i class="fa fa-qrcode"></i>
                                                    <br>
                                                    Karekod All
                                                </center>
                                            </h5>
                                        </div>
                                        <div class="col-sm-4">
                                            <h5 style="color: #fff; margin-top: 20%;">
                                                <center>
                                                    <i class="fa fa-qrcode"></i>
                                                    <br>
                                                    Buy in Stock
                                                </center>
                                            </h5>
                                        </div>

                                    </div>
                                </div>
                                <div class="row" style="margin-top: 20px;">

                                    <div class="col-xs-12">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#allright" aria-controls="allright" role="tab" data-toggle="tab">All</a></li>
                                            <li role="presentation"><a href="#kareKodsuzier" aria-controls="kareKodsuzier" role="tab" data-toggle="tab">KareKodsuzier</a></li>
                                            <li role="presentation"><a href="#notdeleivered" aria-controls="notdeleivered" role="tab" data-toggle="tab">Not Deleivered</a></li>
                                            <li role="presentation"><a href="#notrecieved" aria-controls="notrecieved" role="tab" data-toggle="tab">Not Receivered</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12">

                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="allright">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">

                                                        <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Product</th>
                                                            <th>Transaction Status</th>
                                                            <th>Pharmacy</th>
                                                            <th>Condition</th>
                                                            <th>Piece</th>
                                                            <th>Net Price</th>
                                                            <th>Warehouse Price</th>
                                                            <th>Total</th>
                                                            <th>System Gain</th>
                                                            <th>Stock Date</th>
                                                            <th>Sending Date</th>
                                                            <th>Offer Type</th>
                                                            <th>Karekod</th>
                                                        </tr>
                                                        </thead>
                                                        <tfoot>
                                                        <tr>
                                                            <th></th>
                                                            <th>Product</th>
                                                            <th>Transaction Status</th>
                                                            <th>Pharmacy</th>
                                                            <th>Condition</th>
                                                            <th>Piece</th>
                                                            <th>Net Price</th>
                                                            <th>Warehouse Price</th>
                                                            <th>Total</th>
                                                            <th>System Gain</th>
                                                            <th>Stock Date</th>
                                                            <th>Sending Date</th>
                                                            <th>Offer Type</th>
                                                            <th>Karekod</th>
                                                        </tr>
                                                        </tfoot>
                                                        <tbody>

                                                        <?php
                                                        $i = 0;
                                                        while ($i <= 10) {
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <form>
                                                                        <div class="demo-checkbox">
                                                                            <input type="checkbox" id="basic_checkbox_all_right_<?php echo($i) ?>"/>
                                                                            <label for="basic_checkbox_all_right_<?php echo($i) ?>"></label>
                                                                        </div>
                                                                    </form>
                                                                </td>
                                                                <td>Product</td>
                                                                <td>Transaction Status</td>
                                                                <td>
                                                                    <center>
                                                                        <a type="button" data-toggle="modal" data-target="#Bid">
                                                                            AKCAY
                                                                        </a>
                                                                    </center>
                                                                </td>
                                                                <td>Condition</td>
                                                                <td>Piece</td>
                                                                <td>Net Price</td>
                                                                <td>Warehouse Price</td>
                                                                <td>Total</td>
                                                                <td>System Gain</td>
                                                                <td>Stock Date</td>
                                                                <td>Sending Date</td>
                                                                <td>Offer Type</td>
                                                                <td>
                                                                    <a href="" class="btn btn-danger">
                                                                        <i class="fa fa-cut"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                            $i++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="kareKodsuzier">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">

                                                        <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Product</th>
                                                            <th>Transaction Status</th>
                                                            <th>Pharmacy</th>
                                                            <th>Condition</th>
                                                            <th>Piece</th>
                                                            <th>Net Price</th>
                                                            <th>Warehouse Price</th>
                                                            <th>Total</th>
                                                            <th>System Gain</th>
                                                            <th>Stock Date</th>
                                                            <th>Sending Date</th>
                                                            <th>Offer Type</th>
                                                            <th>Karekod</th>
                                                        </tr>
                                                        </thead>
                                                        <tfoot>
                                                        <tr>
                                                            <th></th>
                                                            <th>Product</th>
                                                            <th>Transaction Status</th>
                                                            <th>Pharmacy</th>
                                                            <th>Condition</th>
                                                            <th>Piece</th>
                                                            <th>Net Price</th>
                                                            <th>Warehouse Price</th>
                                                            <th>Total</th>
                                                            <th>System Gain</th>
                                                            <th>Stock Date</th>
                                                            <th>Sending Date</th>
                                                            <th>Offer Type</th>
                                                            <th>Karekod</th>
                                                        </tr>
                                                        </tfoot>
                                                        <tbody>

                                                        <?php
                                                        $i = 0;
                                                        while ($i <= 10) {
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <form>
                                                                        <div class="demo-checkbox">
                                                                            <input type="checkbox" id="basic_checkbox_all_right_<?php echo($i) ?>"/>
                                                                            <label for="basic_checkbox_all_right_<?php echo($i) ?>"></label>
                                                                        </div>
                                                                    </form>
                                                                </td>
                                                                <td>Product</td>
                                                                <td>Transaction Status</td>
                                                                <td>
                                                                    <center>
                                                                        <a type="button" data-toggle="modal" data-target="#Bid">
                                                                            AKCAY
                                                                        </a>
                                                                    </center>
                                                                </td>
                                                                <td>Condition</td>
                                                                <td>Piece</td>
                                                                <td>Net Price</td>
                                                                <td>Warehouse Price</td>
                                                                <td>Total</td>
                                                                <td>System Gain</td>
                                                                <td>Stock Date</td>
                                                                <td>Sending Date</td>
                                                                <td>Offer Type</td>
                                                                <td>
                                                                    <a href="" class="btn btn-danger">
                                                                        <i class="fa fa-cut"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                            $i++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="notdeleivered">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">

                                                        <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Product</th>
                                                            <th>Transaction Status</th>
                                                            <th>Pharmacy</th>
                                                            <th>Condition</th>
                                                            <th>Piece</th>
                                                            <th>Net Price</th>
                                                            <th>Warehouse Price</th>
                                                            <th>Total</th>
                                                            <th>System Gain</th>
                                                            <th>Stock Date</th>
                                                            <th>Sending Date</th>
                                                            <th>Offer Type</th>
                                                            <th>Karekod</th>
                                                        </tr>
                                                        </thead>
                                                        <tfoot>
                                                        <tr>
                                                            <th></th>
                                                            <th>Product</th>
                                                            <th>Transaction Status</th>
                                                            <th>Pharmacy</th>
                                                            <th>Condition</th>
                                                            <th>Piece</th>
                                                            <th>Net Price</th>
                                                            <th>Warehouse Price</th>
                                                            <th>Total</th>
                                                            <th>System Gain</th>
                                                            <th>Stock Date</th>
                                                            <th>Sending Date</th>
                                                            <th>Offer Type</th>
                                                            <th>Karekod</th>
                                                        </tr>
                                                        </tfoot>
                                                        <tbody>

                                                        <?php
                                                        $i = 0;
                                                        while ($i <= 10) {
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <form>
                                                                        <div class="demo-checkbox">
                                                                            <input type="checkbox" id="basic_checkbox_all_right_<?php echo($i) ?>"/>
                                                                            <label for="basic_checkbox_all_right_<?php echo($i) ?>"></label>
                                                                        </div>
                                                                    </form>
                                                                </td>
                                                                <td>Product</td>
                                                                <td>Transaction Status</td>
                                                                <td>
                                                                    <center>
                                                                        <a type="button" data-toggle="modal" data-target="#Bid">
                                                                            AKCAY
                                                                        </a>
                                                                    </center>
                                                                </td>
                                                                <td>Condition</td>
                                                                <td>Piece</td>
                                                                <td>Net Price</td>
                                                                <td>Warehouse Price</td>
                                                                <td>Total</td>
                                                                <td>System Gain</td>
                                                                <td>Stock Date</td>
                                                                <td>Sending Date</td>
                                                                <td>Offer Type</td>
                                                                <td>
                                                                    <a href="" class="btn btn-danger">
                                                                        <i class="fa fa-cut"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                            $i++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="notrecieved">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">

                                                        <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Product</th>
                                                            <th>Transaction Status</th>
                                                            <th>Pharmacy</th>
                                                            <th>Condition</th>
                                                            <th>Piece</th>
                                                            <th>Net Price</th>
                                                            <th>Warehouse Price</th>
                                                            <th>Total</th>
                                                            <th>System Gain</th>
                                                            <th>Stock Date</th>
                                                            <th>Sending Date</th>
                                                            <th>Offer Type</th>
                                                            <th>Karekod</th>
                                                        </tr>
                                                        </thead>
                                                        <tfoot>
                                                        <tr>
                                                            <th></th>
                                                            <th>Product</th>
                                                            <th>Transaction Status</th>
                                                            <th>Pharmacy</th>
                                                            <th>Condition</th>
                                                            <th>Piece</th>
                                                            <th>Net Price</th>
                                                            <th>Warehouse Price</th>
                                                            <th>Total</th>
                                                            <th>System Gain</th>
                                                            <th>Stock Date</th>
                                                            <th>Sending Date</th>
                                                            <th>Offer Type</th>
                                                            <th>Karekod</th>
                                                        </tr>
                                                        </tfoot>
                                                        <tbody>

                                                        <?php
                                                        $i = 0;
                                                        while ($i <= 10) {
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <form>
                                                                        <div class="demo-checkbox">
                                                                            <input type="checkbox" id="basic_checkbox_all_right_<?php echo($i) ?>"/>
                                                                            <label for="basic_checkbox_all_right_<?php echo($i) ?>"></label>
                                                                        </div>
                                                                    </form>
                                                                </td>
                                                                <td>Product</td>
                                                                <td>Transaction Status</td>
                                                                <td>
                                                                    <center>
                                                                        <a type="button" data-toggle="modal" data-target="#Bid">
                                                                            AKCAY
                                                                        </a>
                                                                    </center>
                                                                </td>
                                                                <td>Condition</td>
                                                                <td>Piece</td>
                                                                <td>Net Price</td>
                                                                <td>Warehouse Price</td>
                                                                <td>Total</td>
                                                                <td>System Gain</td>
                                                                <td>Stock Date</td>
                                                                <td>Sending Date</td>
                                                                <td>Offer Type</td>
                                                                <td>
                                                                    <a href="" class="btn btn-danger">
                                                                        <i class="fa fa-cut"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                            $i++;
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div id="Bid" class="modal fade" role="dialog">
                                    <div class="modal-dialog">


                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title"><span style="border-bottom: 4px solid #ffa700;">Pharmacy Detail</span></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-xs-12" style="border-bottom: 4px solid #ffa700;">
                                                        <h4 style="text-align: center;">Pharmacist / Pharmacy Information</h4>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <h4 style="border-left: 4px solid rgba(0, 182, 202, 1);">Pharmacist Information</h4>
                                                        <center>
                                                            <img src="images/profile.png" class="img-circle img-responsive" style="width: 30%;">
                                                            <h6>HABİBE ATALAY</h6>
                                                            <h6 style="color: grey;">8680001597598</h6>
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    <p>
                                                                    <span style="color: rgba(0, 182, 202, 1);">
                                                                        Date of birth:
                                                                    </span>
                                                                        <br>
                                                                        12-12-1998
                                                                    </p>
                                                                    <br>
                                                                    <p>
                                                                    <span style="color: rgba(0, 182, 202, 1);">
                                                                        University:
                                                                    </span>
                                                                        <br>
                                                                        RIU
                                                                    </p>
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <p>
                                                                    <span style="color: rgba(0, 182, 202, 1);">
                                                                        Phone Number:
                                                                    </span>
                                                                        <br>
                                                                        +92 346 3806125
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </center>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <h4 style="border-left: 4px solid  rgba(0, 182, 202, 1);">Pharmacy Information</h4>
                                                        <h3>PURSAKLAR SQUARE</h3>
                                                        <p>
                                                        <span style="color: rgba(0, 182, 202, 1);">
                                                            Address
                                                        </span>
                                                            <br>
                                                            MİMAR SİNAN MAH. ÇAĞATAY CAD. NO: 41 / E <br> Pursaklar Ankara
                                                        </p>
                                                        <p>
                                                        <span style="color: rgba(0, 182, 202, 1);">
                                                            Phone number
                                                        </span>
                                                            <br>
                                                            +92 346 3806125
                                                        </p>
                                                        <p>
                                                        <span style="color: rgba(0, 182, 202, 1);">
                                                            E-mail address
                                                        </span>
                                                            <br>
                                                            shahbaz@gmail.com
                                                        </p>
                                                        <p>
                                                        <span style="color: rgba(0, 182, 202, 1);">
                                                            Tax Administration
                                                        </span>
                                                            <br>
                                                            -------------------------
                                                        </p>
                                                        <p>
                                                        <span style="color: rgba(0, 182, 202, 1);">
                                                            Tax number
                                                        </span>
                                                            <br>
                                                            -------------------------
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>


                                    </div>
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