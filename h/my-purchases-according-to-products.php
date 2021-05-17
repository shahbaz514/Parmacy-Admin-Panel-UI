<?php
include 'inc/head.php';
include 'inc/header.php';
include 'inc/sidebar.php';

?>
<section class="content" id="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><a href="" style="color: #00b6ca;">ofsahin.com</a> / My Purchases / By Products</h2>
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
                		<div class="col-xs-4" style="border-bottom: 8px solid #ffa700;">
                			<center>
                				<h4>
                					<a href="my-purchases-according-to-products.php" style="text-decoration: none; color: #000;">By Products</a>
                				</h4>
                			</center>
                		</div>
                		<div class="col-xs-4" style="border-bottom: 2px solid #ffa700;">
                			<center>
                				<h4>
                					<a href="my-purchases-according-to-transfers.php" style="text-decoration: none; color: #000;">
                						According to Shipment
                					</a>
                				</h4>
                			</center>
                		</div>
                	</div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div style="background: url('https://supereczacilar.com/supereczacilar/app-assets/images/backgrounds/button-bg.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center; height: 100px;">
                                <div class="row" style="display: flex; margin: auto;">
                                    <div class="col-sm-3">
                                        <h5 style="color: #fff; margin-top: 7%;">
                                            <center>
                                                <i class="fa fa-cut"></i>
                                                <br>
                                                Delete Purchase
                                            </center>
                                        </h5>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5 style="color: #fff; margin-top: 7%;">
                                            <center>
                                                <i class="fa fa-info"></i>
                                                <br>
                                                Notify ITS Buyer
                                            </center>
                                        </h5>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5 style="color: #fff; margin-top: 7%;">
                                            <center>
                                                <i class="fa fa-qrcode"></i>
                                                <br>
                                                Karekod All
                                            </center>
                                        </h5>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5 style="color: #fff; margin-top: 7%;">
                                            <center>
                                                <i class="fa fa-qrcode"></i>
                                                <br>
                                                Buy in Stock
                                            </center>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <center>
                                <form class="form-inline" action="">
                                    <input type="text" class="form-control" placeholder="Name of the Product ...">
                                    <input type="text" class="form-control" placeholder="Phamacy Name ...">
                                    <input type="date" class="form-control" title="Select Date ...">
                                    <input type="date" class="form-control" title="Select Date ...">
                                    <button type="submit" class="btn btn-info form-control">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                            </center>
                        </div>
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs text-center" role="tablist">
                                <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">All</a></li>
                                <li role="presentation"><a href="#online" aria-controls="online" role="tab" data-toggle="tab">Online</a></li>
                                <li role="presentation"><a href="#balanced" aria-controls="balanced" role="tab" data-toggle="tab">Balanced</a></li>
                                <li role="presentation"><a href="#waitingfortrans" aria-controls="waitingfortrans" role="tab" data-toggle="tab">Waiting for Transaction</a></li>
                                <li role="presentation"><a href="#waitingshipment" aria-controls="waitingshipment" role="tab" data-toggle="tab">Waiting Shipment</a></li>
                                <li role="presentation"><a href="#onshipment" aria-controls="onshipment" role="tab" data-toggle="tab">On Shipment</a></li>
                                <li role="presentation"><a href="#instock" aria-controls="instock" role="tab" data-toggle="tab">In Stock</a></li>
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
                                                <th>Offer Status</th>
                                                <th>Balance Date</th>
                                                <th>Release Date</th>
                                                <th>Name of the product</th>
                                                <th>Charter</th>
                                                <th>Piece</th>
                                                <th>Net price</th>
                                                <th>Warehouse Price</th>
                                                <th>Distributor</th>
                                                <th>Offer Type</th>
                                                <th>Expiration date</th>
                                                <th>Karekod</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th></th>
                                                <th>Offer Status</th>
                                                <th>Balance Date</th>
                                                <th>Release Date</th>
                                                <th>Name of the product</th>
                                                <th>Charter</th>
                                                <th>Piece</th>
                                                <th>Net price</th>
                                                <th>Warehouse Price</th>
                                                <th>Distributor</th>
                                                <th>Offer Type</th>
                                                <th>Expiration date</th>
                                                <th>Karekod</th>
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
                                                    <td>Balanced</td>
                                                    <td>28-04-2021 08:12:09</td>
                                                    <td>30 April 2021, Friday</td>
                                                    <td>
                                                        <center>
                                                            <a type="button" data-toggle="modal" data-target="#Bid">
                                                                EPDANTOINE 100 MG 100 TB
                                                            </a>
                                                        </center>
                                                    </td>
                                                    <td>10 + 1</td>
                                                    <td>12</td>
                                                    <td>20.78</td>
                                                    <td>22.86</td>
                                                    <td>
                                                        <center>
                                                            <a type="button" data-toggle="modal" data-target="#distributor">
                                                                MEVLANA
                                                            </a>
                                                        </center>
                                                    </td>
                                                    <td>From stock</td>
                                                    <td>30-10-2021</td>
                                                    <td>Yes</td>
                                                </tr>
                                                <?php
                                                $i++;
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="online">
                                    <!-- Basic Examples -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Offer Status</th>
                                                <th>Balance Date</th>
                                                <th>Release Date</th>
                                                <th>Name of the product</th>
                                                <th>Charter</th>
                                                <th>Piece</th>
                                                <th>Net price</th>
                                                <th>Warehouse Price</th>
                                                <th>Distributor</th>
                                                <th>Offer Type</th>
                                                <th>Expiration date</th>
                                                <th>Karekod</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th></th>
                                                <th>Offer Status</th>
                                                <th>Balance Date</th>
                                                <th>Release Date</th>
                                                <th>Name of the product</th>
                                                <th>Charter</th>
                                                <th>Piece</th>
                                                <th>Net price</th>
                                                <th>Warehouse Price</th>
                                                <th>Distributor</th>
                                                <th>Offer Type</th>
                                                <th>Expiration date</th>
                                                <th>Karekod</th>
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
                                                                <input type="checkbox" id="basic_checkbox_online_<?php echo($i) ?>"/>
                                                                <label for="basic_checkbox_online_<?php echo($i) ?>"></label>
                                                            </div>
                                                        </form>
                                                    </td>
                                                    <td>Balanced</td>
                                                    <td>28-04-2021 08:12:09</td>
                                                    <td>30 April 2021, Friday</td>
                                                    <td>
                                                        <center>
                                                            <a type="button" data-toggle="modal" data-target="#Bid">
                                                                EASYFISHOIL BETAGLU.OMEGA3 30TB
                                                            </a>
                                                        </center>
                                                    </td>
                                                    <td>10 + 1</td>
                                                    <td>12</td>
                                                    <td>20.78</td>
                                                    <td>22.86</td>
                                                    <td>
                                                        <center>
                                                            <a type="button" data-toggle="modal" data-target="#distributor">
                                                                MEVLANA
                                                            </a>
                                                        </center>
                                                    </td>
                                                    <td>From stock</td>
                                                    <td>30-10-2021</td>
                                                    <td>Yes</td>
                                                </tr>
                                                <?php
                                                $i++;
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="balanced">
                                    <!-- Basic Examples -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Offer Status</th>
                                                <th>Balance Date</th>
                                                <th>Release Date</th>
                                                <th>Name of the product</th>
                                                <th>Charter</th>
                                                <th>Piece</th>
                                                <th>Net price</th>
                                                <th>Warehouse Price</th>
                                                <th>Distributor</th>
                                                <th>Offer Type</th>
                                                <th>Expiration date</th>
                                                <th>Karekod</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th></th>
                                                <th>Offer Status</th>
                                                <th>Balance Date</th>
                                                <th>Release Date</th>
                                                <th>Name of the product</th>
                                                <th>Charter</th>
                                                <th>Piece</th>
                                                <th>Net price</th>
                                                <th>Warehouse Price</th>
                                                <th>Distributor</th>
                                                <th>Offer Type</th>
                                                <th>Expiration date</th>
                                                <th>Karekod</th>
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
                                                                <input type="checkbox" id="basic_checkbox_balanced_<?php echo($i) ?>"/>
                                                                <label for="basic_checkbox_balanced_<?php echo($i) ?>"></label>
                                                            </div>
                                                        </form>
                                                    </td>
                                                    <td>Balanced</td>
                                                    <td>28-04-2021 08:12:09</td>
                                                    <td>30 April 2021, Friday</td>
                                                    <td>
                                                        <center>
                                                            <a type="button" data-toggle="modal" data-target="#Bid">
                                                                PRABEX 20 MG 28 TB
                                                            </a>
                                                        </center>
                                                    </td>
                                                    <td>10 + 1</td>
                                                    <td>12</td>
                                                    <td>20.78</td>
                                                    <td>22.86</td>
                                                    <td>
                                                        <center>
                                                            <a type="button" data-toggle="modal" data-target="#distributor">
                                                                MEVLANA
                                                            </a>
                                                        </center>
                                                    </td>
                                                    <td>From stock</td>
                                                    <td>30-10-2021</td>
                                                    <td>Yes</td>
                                                </tr>
                                                <?php
                                                $i++;
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="waitingfortrans">
                                    <!-- Basic Examples -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Offer Status</th>
                                                <th>Balance Date</th>
                                                <th>Release Date</th>
                                                <th>Name of the product</th>
                                                <th>Charter</th>
                                                <th>Piece</th>
                                                <th>Net price</th>
                                                <th>Warehouse Price</th>
                                                <th>Distributor</th>
                                                <th>Offer Type</th>
                                                <th>Expiration date</th>
                                                <th>Karekod</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th></th>
                                                <th>Offer Status</th>
                                                <th>Balance Date</th>
                                                <th>Release Date</th>
                                                <th>Name of the product</th>
                                                <th>Charter</th>
                                                <th>Piece</th>
                                                <th>Net price</th>
                                                <th>Warehouse Price</th>
                                                <th>Distributor</th>
                                                <th>Offer Type</th>
                                                <th>Expiration date</th>
                                                <th>Karekod</th>
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
                                                                <input type="checkbox" id="basic_checkbox_awaiting_for_trans_<?php echo($i) ?>"/>
                                                                <label for="basic_checkbox_awaiting_for_trans_<?php echo($i) ?>"></label>
                                                            </div>
                                                        </form>
                                                    </td>
                                                    <td>Balanced</td>
                                                    <td>28-04-2021 08:12:09</td>
                                                    <td>30 April 2021, Friday</td>
                                                    <td>
                                                        <center>
                                                            <a type="button" data-toggle="modal" data-target="#Bid">
                                                                ZOVIRAX 2 GR UCUK CREAM
                                                            </a>
                                                        </center>
                                                    </td>
                                                    <td>10 + 1</td>
                                                    <td>12</td>
                                                    <td>20.78</td>
                                                    <td>22.86</td>
                                                    <td>
                                                        <center>
                                                            <a type="button" data-toggle="modal" data-target="#distributor">
                                                                MEVLANA
                                                            </a>
                                                        </center>
                                                    </td>
                                                    <td>From stock</td>
                                                    <td>30-10-2021</td>
                                                    <td>Yes</td>
                                                </tr>
                                                <?php
                                                $i++;
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="waitingshipment">
                                    <!-- Basic Examples -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Offer Status</th>
                                                <th>Balance Date</th>
                                                <th>Release Date</th>
                                                <th>Name of the product</th>
                                                <th>Charter</th>
                                                <th>Piece</th>
                                                <th>Net price</th>
                                                <th>Warehouse Price</th>
                                                <th>Distributor</th>
                                                <th>Offer Type</th>
                                                <th>Expiration date</th>
                                                <th>Karekod</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th></th>
                                                <th>Offer Status</th>
                                                <th>Balance Date</th>
                                                <th>Release Date</th>
                                                <th>Name of the product</th>
                                                <th>Charter</th>
                                                <th>Piece</th>
                                                <th>Net price</th>
                                                <th>Warehouse Price</th>
                                                <th>Distributor</th>
                                                <th>Offer Type</th>
                                                <th>Expiration date</th>
                                                <th>Karekod</th>
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
                                                                <input type="checkbox" id="basic_checkbox_waiting_shipment_<?php echo($i) ?>"/>
                                                                <label for="basic_checkbox_waiting_shipment_<?php echo($i) ?>"></label>
                                                            </div>
                                                        </form>
                                                    </td>
                                                    <td>Balanced</td>
                                                    <td>28-04-2021 08:12:09</td>
                                                    <td>30 April 2021, Friday</td>
                                                    <td>
                                                        <center>
                                                            <a type="button" data-toggle="modal" data-target="#Bid">
                                                                MOXAI 400 MG 7 TB
                                                            </a>
                                                        </center>
                                                    </td>
                                                    <td>10 + 1</td>
                                                    <td>12</td>
                                                    <td>20.78</td>
                                                    <td>22.86</td>
                                                    <td>
                                                        <center>
                                                            <a type="button" data-toggle="modal" data-target="#distributor">
                                                                MEVLANA
                                                            </a>
                                                        </center>
                                                    </td>
                                                    <td>From stock</td>
                                                    <td>30-10-2021</td>
                                                    <td>Yes</td>
                                                </tr>
                                                <?php
                                                $i++;
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="onshipment">
                                    <!-- Basic Examples -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Offer Status</th>
                                                <th>Balance Date</th>
                                                <th>Release Date</th>
                                                <th>Name of the product</th>
                                                <th>Charter</th>
                                                <th>Piece</th>
                                                <th>Net price</th>
                                                <th>Warehouse Price</th>
                                                <th>Distributor</th>
                                                <th>Offer Type</th>
                                                <th>Expiration date</th>
                                                <th>Karekod</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th></th>
                                                <th>Offer Status</th>
                                                <th>Balance Date</th>
                                                <th>Release Date</th>
                                                <th>Name of the product</th>
                                                <th>Charter</th>
                                                <th>Piece</th>
                                                <th>Net price</th>
                                                <th>Warehouse Price</th>
                                                <th>Distributor</th>
                                                <th>Offer Type</th>
                                                <th>Expiration date</th>
                                                <th>Karekod</th>
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
                                                                <input type="checkbox" id="basic_checkbox_on_shipment_<?php echo($i) ?>"/>
                                                                <label for="basic_checkbox_on_shipment_<?php echo($i) ?>"></label>
                                                            </div>
                                                        </form>
                                                    </td>
                                                    <td>Balanced</td>
                                                    <td>28-04-2021 08:12:09</td>
                                                    <td>30 April 2021, Friday</td>
                                                    <td>
                                                        <center>
                                                            <a type="button" data-toggle="modal" data-target="#Bid">
                                                                FIXDUAL 5 MG/10 MG 30 TB
                                                            </a>
                                                        </center>
                                                    </td>
                                                    <td>10 + 1</td>
                                                    <td>12</td>
                                                    <td>20.78</td>
                                                    <td>22.86</td>
                                                    <td>
                                                        <center>
                                                            <a type="button" data-toggle="modal" data-target="#distributor">
                                                                MEVLANA
                                                            </a>
                                                        </center>
                                                    </td>
                                                    <td>From stock</td>
                                                    <td>30-10-2021</td>
                                                    <td>Yes</td>
                                                </tr>
                                                <?php
                                                $i++;
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="instock">
                                    <!-- Basic Examples -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Offer Status</th>
                                                <th>Balance Date</th>
                                                <th>Release Date</th>
                                                <th>Name of the product</th>
                                                <th>Charter</th>
                                                <th>Piece</th>
                                                <th>Net price</th>
                                                <th>Warehouse Price</th>
                                                <th>Distributor</th>
                                                <th>Offer Type</th>
                                                <th>Expiration date</th>
                                                <th>Karekod</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th></th>
                                                <th>Offer Status</th>
                                                <th>Balance Date</th>
                                                <th>Release Date</th>
                                                <th>Name of the product</th>
                                                <th>Charter</th>
                                                <th>Piece</th>
                                                <th>Net price</th>
                                                <th>Warehouse Price</th>
                                                <th>Distributor</th>
                                                <th>Offer Type</th>
                                                <th>Expiration date</th>
                                                <th>Karekod</th>
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
                                                                <input type="checkbox" id="basic_checkbox_in_stock_<?php echo($i) ?>"/>
                                                                <label for="basic_checkbox_in_stock_<?php echo($i) ?>"></label>
                                                            </div>
                                                        </form>
                                                    </td>
                                                    <td>Balanced</td>
                                                    <td>28-04-2021 08:12:09</td>
                                                    <td>30 April 2021, Friday</td>
                                                    <td>
                                                        <center>
                                                            <a type="button" data-toggle="modal" data-target="#Bid">
                                                                BABY BISCUISES KECISUTLU & VIT400
                                                            </a>
                                                        </center>
                                                    </td>
                                                    <td>10 + 1</td>
                                                    <td>12</td>
                                                    <td>20.78</td>
                                                    <td>22.86</td>
                                                    <td>
                                                        <center>
                                                            <a type="button" data-toggle="modal" data-target="#distributor">
                                                                MEVLANA
                                                            </a>
                                                        </center>
                                                    </td>
                                                    <td>From stock</td>
                                                    <td>30-10-2021</td>
                                                    <td>Yes</td>
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

                        <style>
                            .modal-dialog {
                                width: 100%;
                                margin: auto;
                                margin-top: 30px;
                            }
                        </style>
                        <div class="col-sm-12">
                            <div id="Bid" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">
                                                <span style="border-bottom: 4px solid #ffa700;">Offer Details</span>
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <img src="https://supereczacilar.com/supereczacilar/app-assets/files/coreg.png" class="img-rounded img-responsive img-thumbnail">
                                                        <h2 style="text-align: center;">COREGA SUPER CREAM 40 GR</h2>
                                                        <h3 style="text-align: center;"><span style="color: #ffa700;">300 + 75</span> | Rs 20.00</h3>
                                                                            <div class="row">
                                                                                <div class="col-sm-6" style="background: #00bcd4;">
                                                                                    <h6 style="color: #FFFFFF">
                                                                                        <center>
                                                                                            <i class="fa fa-arrow-up" style="font-size:60px;"></i>
                                                                                            <br>
                                                                                            Max Put
                                                                                        </center>
                                                                                    </h6>

                                                                                </div>
                                                                                <div class="col-sm-6" style="background: #00bcd4;">
                                                                                    <h6 style="color: #FFFFFF">
                                                                                        <center>
                                                                                            <i class="fa fa-warning" style="font-size:60px;"></i>
                                                                                            <br>
                                                                                            Max Put
                                                                                        </center>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="col-sm-6" style="background: #00bcd4;">
                                                                                    <h6 style="color: #FFFFFF">
                                                                                        <center>
                                                                                            <i class="fa fa-cut" style="font-size:60px;"></i>
                                                                                            <br>
                                                                                            Plenty
                                                                                        </center>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="col-sm-6" style="background: #00bcd4;">
                                                                                    <h6 style="color: #FFFFFF">
                                                                                        <center>
                                                                                            <i class="fa fa-chain" style="font-size:60px;"></i>
                                                                                            <br>
                                                                                            Combine
                                                                                        </center>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="col-sm-6" style="background: #00bcd4;">
                                                                                    <h6 style="color: #FFFFFF">
                                                                                        <center>
                                                                                            <i class="fa fa-edit" style="font-size:60px;"></i>
                                                                                            <br>
                                                                                            Edit Offer
                                                                                        </center>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="col-sm-6" style="background: #00bcd4;">
                                                                                    <h6 style="color: #FFFFFF">
                                                                                        <center>
                                                                                            <i class="fa fa-percent" style="font-size:60px;"></i>
                                                                                            <br>
                                                                                            Edit Requests
                                                                                        </center>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="col-sm-6" style="background: #00bcd4;">
                                                                                    <h6 style="color: #FFFFFF">
                                                                                        <center>
                                                                                            <i class="fa fa-power-off" style="font-size:60px;"></i>
                                                                                            <br>
                                                                                            Passive Check
                                                                                        </center>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="col-sm-6" style="background: #00bcd4;">
                                                                                    <h6 style="color: #FFFFFF">
                                                                                        <center>
                                                                                            <i class="fa fa-send" style="font-size:60px;"></i>
                                                                                            <br>
                                                                                            Redirect
                                                                                        </center>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="col-sm-6" style="background: #00bcd4;">
                                                                                    <h6 style="color: #FFFFFF">
                                                                                        <center>
                                                                                            <i class="fa fa-comment" style="font-size:60px;"></i>
                                                                                            <br>
                                                                                            Chat Room
                                                                                        </center>
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="col-sm-6" style="background: #00bcd4;">
                                                                                    <h6 style="color: #FFFFFF">
                                                                                        <center>
                                                                                            <i class="fa fa-check" style="font-size:60px;"></i>
                                                                                            <br>
                                                                                            <small style="color: #FFFFFF;">Process My Balance</small>
                                                                                        </center>
                                                                                    </h6>
                                                                                </div>
                                                                            </div>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="container">
                                                            <ul class="nav nav-tabs" role="tablist">
                                                                <li role="presentation" class="active"><a href="#whogotit" aria-controls="whogotit" role="tab" data-toggle="tab">Who Got It?</a></li>
                                                                <li role="presentation"><a href="#whowseenit" aria-controls="whowseenit" role="tab" data-toggle="tab">Who has seen it?</a></li>
                                                                <li role="presentation"><a href="#offerinfo" aria-controls="offerinfo" role="tab" data-toggle="tab">Offer Information</a></li>
                                                                <li role="presentation"><a href="#requestinfo" aria-controls="requestinfo" role="tab" data-toggle="tab">Request Information</a></li>
                                                                <li role="presentation"><a href="#previousoffers" aria-controls="previousoffers" role="tab" data-toggle="tab">Previous Offers</a></li>
                                                                <li role="presentation"><a href="#baremes" aria-controls="baremes" role="tab" data-toggle="tab">Baremes</a></li>
                                                                <li role="presentation"><a href="#operations" aria-controls="operations" role="tab" data-toggle="tab">Operations</a></li>
                                                            </ul>
                                                            <div class="tab-content">
                                                                <div role="tabpanel" class="tab-pane active" id="whogotit">


                                                                    <!-- Basic Examples -->
                                                                    <div class="row clearfix">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="card">
                                                                                <div class="header">
                                                                                    <h2>
                                                                                        Request Information
                                                                                    </h2>
                                                                                </div>
                                                                                <div class="body">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                                                            <thead>
                                                                                            <tr>
                                                                                                <th>Pharmacy</th>
                                                                                                <th>Demand ( 300 / 0 )  </th>
                                                                                                <th>Request Time</th>
                                                                                            </tr>
                                                                                            </thead>
                                                                                            <tfoot>
                                                                                            <tr>
                                                                                                <th>Pharmacy</th>
                                                                                                <th>Demand ( 300 / 0 )  </th>
                                                                                                <th>Request Time</th>
                                                                                            </tr>
                                                                                            </tfoot>
                                                                                            <tbody>

                                                                                            <?php
                                                                                            $i = 0;
                                                                                            while ($i <= 20) {
                                                                                                ?>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        Pharmacy <?php echo $i; ?>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        Demand <?php echo $i; ?>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        26-04-2021 18:01:42
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
                                                                <div role="tabpanel" class="tab-pane" id="whowseenit">

                                                                    <!-- Basic Examples -->
                                                                    <div class="row clearfix">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="card">
                                                                                <div class="header">
                                                                                    <h2>
                                                                                        Those who saw the offer
                                                                                    </h2>
                                                                                </div>
                                                                                <div class="body">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                                                            <thead>
                                                                                            <tr>
                                                                                                <th>Pharmacy</th>
                                                                                                <th>Time To See</th>
                                                                                            </tr>
                                                                                            </thead>
                                                                                            <tfoot>
                                                                                            <tr>
                                                                                                <th>Pharmacy</th>
                                                                                                <th>Time To See</th>
                                                                                            </tr>
                                                                                            </tfoot>
                                                                                            <tbody>

                                                                                            <?php
                                                                                            $i = 0;
                                                                                            while ($i <= 20) {
                                                                                                ?>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        Pharmacy <?php echo $i; ?>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        26-04-2021 18:01:42
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
                                                                <div role="tabpanel" class="tab-pane" id="offerinfo">

                                                                    <!-- Basic Examples -->
                                                                    <div class="row clearfix">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="card">
                                                                                <div class="header">
                                                                                    <h2>
                                                                                        Offer Information
                                                                                    </h2>
                                                                                </div>
                                                                                <div class="body">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table table-bordered table-striped table-hover">
                                                                                            <tr>
                                                                                                <td>
                                                                                                    Name of Product
                                                                                                </td>
                                                                                                <td>
                                                                                                    HUMIRA 40 MG / 0.4 ML 2 PEN
                                                                                                </td>
                                                                                                <td>
                                                                                                    History
                                                                                                </td>
                                                                                                <td>
                                                                                                    27-04-2021 10:26:46
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    Barcode
                                                                                                </td>
                                                                                                <td>
                                                                                                    8680656080421
                                                                                                </td>
                                                                                                <td>
                                                                                                    Group
                                                                                                </td>
                                                                                                <td>
                                                                                                    ANKARA
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    Charter
                                                                                                </td>
                                                                                                <td>
                                                                                                    1 + 0
                                                                                                </td>
                                                                                                <td>
                                                                                                    Type
                                                                                                </td>
                                                                                                <td>
                                                                                                    Screen Requirement
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    Target
                                                                                                </td>
                                                                                                <td>
                                                                                                    4
                                                                                                </td>
                                                                                                <td>
                                                                                                    Demand Limit
                                                                                                </td>
                                                                                                <td>
                                                                                                    Passable
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    Net Price
                                                                                                </td>
                                                                                                <td>
                                                                                                    ₺ 1415.59
                                                                                                </td>
                                                                                                <td>
                                                                                                    Expiration date
                                                                                                </td>
                                                                                                <td>
                                                                                                    New to be shot
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    Warehouse Price
                                                                                                </td>
                                                                                                <td>
                                                                                                    ₺1415.59
                                                                                                </td>
                                                                                                <td>
                                                                                                    Distributor
                                                                                                </td>
                                                                                                <td>
                                                                                                    VALIANT
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    PSF / PUBLIC Price
                                                                                                </td>
                                                                                                <td>
                                                                                                    1597.02
                                                                                                </td>
                                                                                                <td>
                                                                                                    Explanation
                                                                                                </td>
                                                                                                <td>
                                                                                                    TANRIVERDİ PHARMACY
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div role="tabpanel" class="tab-pane" id="requestinfo">

                                                                    <!-- Basic Examples -->
                                                                    <div class="row clearfix">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="card">
                                                                                <div class="header">
                                                                                    <h2>
                                                                                        Request Information
                                                                                    </h2>
                                                                                </div>
                                                                                <div class="body">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table table-bordered table-striped table-hover">
                                                                                            <tr>
                                                                                                <td>
                                                                                                    Charter
                                                                                                </td>
                                                                                                <td>
                                                                                                    1 + 0
                                                                                                </td>
                                                                                                <td>
                                                                                                    Net Price
                                                                                                </td>
                                                                                                <td>
                                                                                                    ₺ 1415.59
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    Group Request
                                                                                                </td>
                                                                                                <td>
                                                                                                    4
                                                                                                </td>
                                                                                                <td>
                                                                                                    Number of Requests
                                                                                                </td>
                                                                                                <td>
                                                                                                    ----------------
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    Group Amount
                                                                                                </td>
                                                                                                <td>
                                                                                                    5662.36
                                                                                                </td>
                                                                                                <td>
                                                                                                    My Demand Amount
                                                                                                </td>
                                                                                                <td>
                                                                                                    -----------------
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    Number of Distribution
                                                                                                </td>
                                                                                                <td>
                                                                                                    4
                                                                                                </td>
                                                                                                <td>
                                                                                                    My System Earnings
                                                                                                </td>
                                                                                                <td>
                                                                                                    -----------------
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    Distribution Amount
                                                                                                </td>
                                                                                                <td>
                                                                                                    5662.36
                                                                                                </td>
                                                                                                <td>
                                                                                                    My Overall Earning
                                                                                                </td>
                                                                                                <td>
                                                                                                    0
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div role="tabpanel" class="tab-pane" id="previousoffers">
                                                                    <!-- Basic Examples -->
                                                                    <div class="row clearfix">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="card">
                                                                                <div class="header">
                                                                                    <h2>
                                                                                        Background Information
                                                                                    </h2>
                                                                                </div>
                                                                                <div class="body">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                                                            <thead>
                                                                                            <tr>
                                                                                                <th>Date of registration</th>
                                                                                                <th>Dispenser Pharmacy</th>
                                                                                                <th>Condition</th>
                                                                                                <th>Warehouse Price</th>
                                                                                                <th>Net price</th>
                                                                                                <th>Offer Status</th>
                                                                                            </tr>
                                                                                            </thead>
                                                                                            <tfoot>
                                                                                            <tr>
                                                                                                <th>Date of registration</th>
                                                                                                <th>Dispenser Pharmacy</th>
                                                                                                <th>Condition</th>
                                                                                                <th>Warehouse Price</th>
                                                                                                <th>Net price</th>
                                                                                                <th>Offer Status</th>
                                                                                            </tr>
                                                                                            </tfoot>
                                                                                            <tbody>

                                                                                            <?php
                                                                                            $i = 0;
                                                                                            while ($i <= 20) {
                                                                                                ?>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        27-04-2021 10:26:46
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <a href="" style="color: #00b6ca; text-decoration: none;">VALIANT</a>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        1+0
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        1415.59
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        1415.59
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <a href="" style="color: #3cd49e; text-decoration: none;">Balanced</a>
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
                                                                <div role="tabpanel" class="tab-pane" id="baremes">

                                                                    <!-- Basic Examples -->
                                                                    <div class="row clearfix">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="card">
                                                                                <div class="header">
                                                                                    <h2>
                                                                                        Bid Scales
                                                                                    </h2>
                                                                                </div>
                                                                                <div class="body">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                                                            <thead>
                                                                                            <tr>
                                                                                                <th>Condition</th>
                                                                                                <th>Net Price</th>
                                                                                            </tr>
                                                                                            </thead>
                                                                                            <tfoot>
                                                                                            <tr>
                                                                                                <th>Condition</th>
                                                                                                <th>Net Price</th>
                                                                                            </tr>
                                                                                            </tfoot>
                                                                                            <tbody>

                                                                                            <?php
                                                                                            $i = 0;
                                                                                            while ($i <= 20) {
                                                                                                ?>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        Condition<?php echo $i; ?>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        Net price<?php echo $i; ?>
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
                                                                <div role="tabpanel" class="tab-pane" id="operations">

                                                                    <div class="row clearfix">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="card">
                                                                                <div class="header">
                                                                                    <h2>
                                                                                        Movements of the Product
                                                                                    </h2>
                                                                                </div>
                                                                                <div class="body">
                                                                                    <div class="table-responsive">
                                                                                        <h6>
                                                                                                <span style="border-bottom: 4px solid #ffa700;">
                                                                                                    No action yet <i class="fa fa-car"></i>
                                                                                                </span>
                                                                                        </h6>
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
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                                <div id="distributor" class="modal fade" role="dialog">
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