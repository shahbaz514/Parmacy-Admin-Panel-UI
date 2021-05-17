<?php
include 'inc/head.php';
include 'inc/header.php';
include 'inc/sidebar.php';

?>
    <section class="content" id="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><a href="" style="color: #00b6ca;">ofsahin.com</a> / Offer Updates</h2>
            </div>
        </div>

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Offer Updates
                        </h2>
                    </div>
                    <div class="body">
                        <div class="">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>Date of arrangement</th>
                                    <th>Bid</th>
                                    <th>Organized by</th>
                                    <th>Operation</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Date of arrangement</th>
                                    <th>Bid</th>
                                    <th>Organized by</th>
                                    <th>Operation</th>
                                </tr>
                                </tfoot>
                                <tbody>

                                <?php
                                $i = 0;
                                while ($i <= 20) {
                                    ?>
                                    <tr>
                                        <td>26-04-2021 16:18:21</td>
                                        <td>
                                            <center>
                                                <a type="button" data-toggle="modal" data-target="#Bid<?php echo($i); ?>">
                                                    IRDAPIN 300 MG / 10 MG 28 TB
                                                </a>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <a type="button" data-toggle="modal" data-target="#OrganizedBy<?php echo($i); ?>">
                                                    PURSAKLAR SQUARE
                                                </a>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal<?php echo($i); ?>">
                                                    <i class="material-icons">preview</i>
                                                </button>
                                            </center>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                                ?>
                                </tbody>
                            </table>
                            <?php
                            $j = 0;
                            while ($j <= 20) {
                                ?>

                                <div id="Bid<?php echo($j); ?>" class="modal fade" role="dialog">
                                    <div class="modal-dialog" style="width: 80%;">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">
                                                    <span style="border-bottom: 4px solid #ffa700;">Offer Details</span>
                                                </h4>
                                            </div>
                                            <div class="modal-body">
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
                                                        <ul class="nav nav-tabs" role="tablist">
                                                            <li role="presentation" class="active"><a href="#whogotit<?php echo($j); ?>" aria-controls="whogotit<?php echo($j); ?>" role="tab" data-toggle="tab">Who Got It?</a></li>
                                                            <li role="presentation"><a href="#whowseenit<?php echo($j); ?>" aria-controls="whowseenit<?php echo($j); ?>" role="tab" data-toggle="tab">Who has seen it?</a></li>
                                                            <li role="presentation"><a href="#offerinfo<?php echo($j); ?>" aria-controls="offerinfo<?php echo($j); ?>" role="tab" data-toggle="tab">Offer Information</a></li>
                                                            <li role="presentation"><a href="#requestinfo<?php echo($j); ?>" aria-controls="requestinfo<?php echo($j); ?>" role="tab" data-toggle="tab">Request Information</a></li>
                                                            <li role="presentation"><a href="#previousoffers<?php echo($j); ?>" aria-controls="previousoffers<?php echo($j); ?>" role="tab" data-toggle="tab">Previous Offers</a></li>
                                                            <li role="presentation"><a href="#baremes<?php echo($j); ?>" aria-controls="baremes<?php echo($j); ?>" role="tab" data-toggle="tab">Baremes</a></li>
                                                            <li role="presentation"><a href="#operations<?php echo($j); ?>" aria-controls="operations<?php echo($j); ?>" role="tab" data-toggle="tab">Operations</a></li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div role="tabpanel" class="tab-pane active" id="whogotit<?php echo($j); ?>">


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
                                                                                <div class="">
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
                                                            <div role="tabpanel" class="tab-pane" id="whowseenit<?php echo($j); ?>">

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
                                                                                <div class="">
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
                                                            <div role="tabpanel" class="tab-pane" id="offerinfo<?php echo($j); ?>">

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
                                                                                <div class="">
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
                                                            <div role="tabpanel" class="tab-pane" id="requestinfo<?php echo($j); ?>">

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
                                                                                <div class="">
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
                                                            <div role="tabpanel" class="tab-pane" id="previousoffers<?php echo($j); ?>">
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
                                                                                <div class="">
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
                                                            <div role="tabpanel" class="tab-pane" id="baremes<?php echo($j); ?>">

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
                                                                                <div class="">
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
                                                            <div role="tabpanel" class="tab-pane" id="operations<?php echo($j); ?>">

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
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div id="OrganizedBy<?php echo($j); ?>" class="modal fade" role="dialog">
                                    <div class="modal-dialog" style="width: 70%;">

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
                                <div id="myModal<?php echo($j); ?>" class="modal fade" role="dialog">
                                    <div class="modal-dialog" style="width: 70%;">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title"><span style="border-bottom: 5px solid #ffa700;">Bid Arrangement Information</span></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <h5>The First Version of the Offer</h5>
                                                        <table class="table-bordered table-striped table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    Drug Name: IRDAPIN 300 MG / 10 MG 28 TB
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Drug Barcode: 8699262090717
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Warehouse Price: 31.87
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Main: 5
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    MF: 1
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Net Price: 26.56
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Goal Status: Passable
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Goal: 3
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Medication Expiry: -
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Distributor: PURSAKLAR SQUARE
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Offer Type: Screen Requirement
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Offer Status: Not Balanced
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Description: Special to BEYZA UZUN pharmacy
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <h5>Final Version of the Offer</h5>
                                                        <table class="table-bordered table-striped table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    Drug Name: IRDAPIN 300 MG / 10 MG 28 TB
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Drug Barcode: 8699262090717
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Warehouse Price: 31.87
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Main: 5
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    MF: 1
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Net Price: 26.56
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Goal Status: Passable
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Goal: 3
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Medication Expiry: -
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Distributor: PURSAKLAR SQUARE
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Offer Type: Screen Requirement
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Offer Status: Not Balanced
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Description: Special to BEYZA UZUN pharmacy
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <?php
                                $j++;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
include 'inc/footer.php';
?>