<?php
include 'inc/head.php';
include 'inc/header.php';
include 'inc/sidebar.php';

?>
<section class="content" id="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><a href="" style="color: #00b6ca;">ofsahin.com</a> / My Posts / According to Shipments</h2>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        My Posts
                    </h2>
                </div>
                <div class="body">
                	<div class="row">
                		<div class="col-xs-4" style="border-bottom: 2px solid #ffa700;">
                			<center>
                				<h4>
                					<a href="my-distributions-according-to-pharmacies.php" style="text-decoration: none; color: #000;">By Pharmacies</a>
                				</h4>
                			</center>
                		</div>
                		<div class="col-xs-4" style="border-bottom: 2px solid #ffa700;">
                			<center>
                				<h4>
                					<a href="my-distributions-according-to-products.php" style="text-decoration: none; color: #000;">By Products</a>
                				</h4>
                			</center>
                		</div>
                		<div class="col-xs-4" style="border-bottom: 8px solid #ffa700;">
                			<center>
                				<h4>
                					<a href="my-distributions-according-to-transfers.php" style="text-decoration: none; color: #000;">
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
                                        <input type="date" name="" class="form-control" title="Pick Date">
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
                                                            <th>Shipment Collection Date</th>
                                                            <th>Number of Posts</th>
                                                            <th>Status</th>
                                                        </tr>
                                                        </thead>
                                                        <tfoot>
                                                        <tr>
                                                            <th></th>
                                                            <th>Shipment Collection Date</th>
                                                            <th>Number of Posts</th>
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
                                                                    29 April 2021, Thursday
                                                                </td>
                                                                <td>5</td>
                                                                <td>Continues</td>
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
                                            <h5 style="color: #fff; margin-top: 10%;">
                                                <center>
                                                    <i class="fa fa-print"></i>
                                                    <br>
                                                    Print Label
                                                </center>
                                            </h5>
                                        </div>
                                        <div class="col-sm-4">
                                            <h5 style="color: #fff; margin-top: 10%;"  data-toggle="modal" data-target="#addreturn">
                                                <center>
                                                    <i class="fa fa-plus"></i>
                                                    <br>
                                                    Add Returns
                                                </center>
                                            </h5>
                                        </div>
                                        <div class="col-sm-4">
                                            <h5 style="color: #fff; margin-top: 10%;">
                                                <center>
                                                    <i class="fa fa-minus"></i>
                                                    <br>
                                                    Exclude from Shipment
                                                </center>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 20px;">

                                    <div class="col-xs-12">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#allright" aria-controls="allright" role="tab" data-toggle="tab">All</a></li>
                                            <li role="presentation"><a href="#notrecieved" aria-controls="notrecieved" role="tab" data-toggle="tab">Not Receiveed</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12">

                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="allright">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">

                                                        <thead>
                                                        <tr>
                                                            <td>
                                                                <form>
                                                                    <div class="demo-checkbox">
                                                                        <input type="checkbox" id="basic"/>
                                                                        <label for="basic"></label>
                                                                    </div>
                                                                </form>
                                                            </td>
                                                            <th>Product</th>
                                                            <th>Purchase</th>
                                                            <th>Transaction Status</th>
                                                            <th>Parmachy</th>
                                                            <th>Stock Date</th>
                                                            <th>Area Person</th>
                                                            <th>Explanation</th>
                                                            <th>Karekod</th>
                                                        </tr>
                                                        </thead>
                                                        <tfoot>
                                                        <tr>
                                                            <td>
                                                                <form>
                                                                    <div class="demo-checkbox">
                                                                        <input type="checkbox" id="basic_bottom"/>
                                                                        <label for="basic_bottom"></label>
                                                                    </div>
                                                                </form>
                                                            </td>
                                                            <th>Product</th>
                                                            <th>Purchase</th>
                                                            <th>Transaction Status</th>
                                                            <th>Parmachy</th>
                                                            <th>Stock Date</th>
                                                            <th>Area Person</th>
                                                            <th>Explanation</th>
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
                                                                <td style="color: grey;">BENEXOL B12 30 TB</td>
                                                                <td style="color: grey;">40</td>
                                                                <td style="color: grey;">Added to Shipment</td>
                                                                <td style="color: grey;">LEMAN</td>
                                                                <td style="color: grey;">-</td>
                                                                <td style="color: grey;">-</td>
                                                                <td style="color: grey;">-</td>
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
                                                            <td>
                                                                <form>
                                                                    <div class="demo-checkbox">
                                                                        <input type="checkbox" id="basic_not"/>
                                                                        <label for="basic_not"></label>
                                                                    </div>
                                                                </form>
                                                            </td>
                                                            <th>Product</th>
                                                            <th>Purchase</th>
                                                            <th>Transaction Status</th>
                                                            <th>Parmachy</th>
                                                            <th>Stock Date</th>
                                                            <th>Area Person</th>
                                                            <th>Explanation</th>
                                                            <th>Karekod</th>
                                                        </tr>
                                                        </thead>
                                                        <tfoot>
                                                        <tr>
                                                            <td>
                                                                <form>
                                                                    <div class="demo-checkbox">
                                                                        <input type="checkbox" id="basic_not_bottom"/>
                                                                        <label for="basic_not_bottom"></label>
                                                                    </div>
                                                                </form>
                                                            </td>
                                                            <th>Product</th>
                                                            <th>Purchase</th>
                                                            <th>Transaction Status</th>
                                                            <th>Parmachy</th>
                                                            <th>Stock Date</th>
                                                            <th>Area Person</th>
                                                            <th>Explanation</th>
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
                                                                            <input type="checkbox" id="basic_checkbox_not_right_<?php echo($i) ?>"/>
                                                                            <label for="basic_checkbox_not_right_<?php echo($i) ?>"></label>
                                                                        </div>
                                                                    </form>
                                                                </td>
                                                                <td style="color: red;">BENEXOL B12 30 TB</td>
                                                                <td style="color: red;">40</td>
                                                                <td style="color: red;">Added to Shipment</td>
                                                                <td style="color: red;">LEMAN</td>
                                                                <td style="color: red;">-</td>
                                                                <td style="color: red;">-</td>
                                                                <td style="color: red;">-</td>
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
                                <div id="addreturn" class="modal fade" role="dialog">
                                    <div class="modal-dialog" style="width: 70%;">

                                    <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">
                                                    <span style="border-bottom: 4px solid #ffa700;">Add Return to Shipment</span>
                                                </h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <p>Your Previous Purchases</p>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <input type="text" name="" placeholder="Product Name" class="form-control">
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <input type="text" name="" placeholder="Pharmacy Name" class="form-control">
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <a href="" class="btn btn-warning form-control"><i class="fa fa-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <?php
                                                            $i = 0;
                                                            while ($i <= 9) {
                                                        ?>
                                                            <div class="col-sm-12">
                                                                <form>
                                                                    <div class="demo-checkbox">
                                                                        <input type="checkbox" id="addreturn<?php echo($i) ?>"/>
                                                                        <label for="addreturn<?php echo($i) ?>">AYŞECAN 30 pcs purchase - AYŞECAN 30 pcs purchase</label>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        <?php
                                                            $i++;
                                                            }
                                                        ?>

                                                    <div class="row">
                                                        <div class="col-sm-10">
                                                            <ul class="pagination">
                                                                <li class="active"><a href="#">1</a></li>
                                                                <li><a href="#">2</a></li>
                                                                <li><a href="#">3</a></li>
                                                                <li><a href="#">4</a></li>
                                                                <li><a href="#">5</a></li>
                                                                <li><a href="#">6</a></li>
                                                                <li><a href="#">7</a></li>
                                                                <li><a href="#">8</a></li>
                                                                <li><a href="#">9</a></li>
                                                                <li><a href="#">10</a></li>
                                                                <li><a href="#">11</a></li>
                                                                <li><a href="#">12</a></li>
                                                                <li><a href="#">13</a></li>
                                                                <li><a href="#">14</a></li>
                                                                <li><a href="#">15</a></li>
                                                                <li><a href="#">16</a></li>
                                                                <li><a href="#">17</a></li>
                                                                <li><a href="#">18</a></li>
                                                                <li><a href="#">19</a></li>
                                                                <li><a href="#">20</a></li>
                                                                <li><a href="#">21</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-2 pagination">
                                                            <select class="form-control">
                                                                <option>10</option>
                                                                <option>25</option>
                                                                <option>50</option>
                                                                <option>100</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <label>Note</label>
                                                            <input type="text" name="" class="form-control" placeholder="Please Enter a Note.">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-warning">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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