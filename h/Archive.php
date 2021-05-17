<?php
include 'inc/head.php';
include 'inc/header.php';
include 'inc/sidebar.php';

?>

<section class="content"  id="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><a href="" style="color: #00b6ca;">ofsahin.com</a> / Archive</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Archive
                        </h2>
                    </div>
                    <style type="text/css">
                        .shahbaz514 li{
                            width: 25%;
                            text-align: center;
                        }
                    </style>
                    <div class="body">
                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="nav nav-tabs shahbaz514" role="tablist">
                                    <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">All</a></li>
                                    <li role="presentation"><a href="#online" aria-controls="online" role="tab" data-toggle="tab">Online</a></li>
                                    <li role="presentation"><a href="#balanced" aria-controls="balanced" role="tab" data-toggle="tab">Not Balanced</a></li>
                                    <li role="presentation"><a href="#passive" aria-controls="passive" role="tab" data-toggle="tab">Not Passive</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">        
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="all" style="color: #002!important;">
                                        <div class="row">
                                            <?php
                                            $i = 0;
                                            while ($i < 20) 
                                            {
                                            ?>
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="product-wrapper mb-45 text-center">
                                                    <div class="product-img"> 
                                                        <center>
                                                            <p style="font-size: 16px; font-weight: 200;">Product Name</p>
                                                            <img src="https://supereczacilar.com/supereczacilar/app-assets/files/pantactive.jpg" style="width: 100%;">
                                                            <p style="font-size: 12px; font-weight: 200;"><span style="color: orange;">130 + 110</span> | 10.32 <i class="fa fa-try"></i></p>
                                                            <p style="font-size: 11px; font-weight: 200;"><span style="color: black;">130 + 110</span> | Geçilebilir</p>
                                                            <p>
                                                                <div class="progress" style="width: 80%;">
                                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                                  </div>
                                                                </div>
                                                            </p>
                                                        </center>
                                                        <div class="product-action">
                                                            <div class="product-action-style"> 
                                                                <a data-toggle="modal" data-target="#enterrequirements" title="Enter Requirement"> <i class="fa fa-plus"></i> </a>
                                                                <a data-toggle="modal" data-target="#showdetails" title="Show Details"> <i class="fa fa-eye"></i> </a> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $i++;
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="online" style="color: #002!important;">
                                        <div class="row">
                                            <?php
                                            $i = 0;
                                            while ($i < 20) 
                                            {
                                            ?>
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="product-wrapper mb-45 text-center">
                                                    <div class="product-img"> 
                                                        <center>
                                                            <p style="font-size: 16px; font-weight: 200;">Product Name</p>
                                                            <img src="https://supereczacilar.com/supereczacilar/app-assets/files/pantactive.jpg" style="width: 100%;">
                                                            <p style="font-size: 12px; font-weight: 200;"><span style="color: orange;">130 + 110</span> | 10.32 <i class="fa fa-try"></i></p>
                                                            <p style="font-size: 11px; font-weight: 200;"><span style="color: black;">130 + 110</span> | Geçilebilir</p>
                                                            <p>
                                                                <div class="progress" style="width: 80%;">
                                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                                  </div>
                                                                </div>
                                                            </p>
                                                        </center>
                                                        <div class="product-action">
                                                            <div class="product-action-style"> 
                                                                <a data-toggle="modal" data-target="#enterrequirements" title="Enter Requirement"> <i class="fa fa-plus"></i> </a>
                                                                <a data-toggle="modal" data-target="#showdetails" title="Show Details"> <i class="fa fa-eye"></i> </a> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $i++;
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="balanced" style="color: #002!important;">
                                        <div class="row">
                                            <?php
                                            $i = 0;
                                            while ($i < 20) 
                                            {
                                            ?>
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="product-wrapper mb-45 text-center">
                                                    <div class="product-img"> 
                                                        <center>
                                                            <p style="font-size: 16px; font-weight: 200;">Product Name</p>
                                                            <img src="https://supereczacilar.com/supereczacilar/app-assets/files/pantactive.jpg" style="width: 100%; opacity: 0.5; overflow: hidden;">
                                                            <h2 style="margin-top: -40%;"><i class="fa fa-check"></i></h2>
                                                            <p style="font-size: 12px; font-weight: 200; margin-top: 40%;"><span style="color: orange;">130 + 110</span> | 10.32 <i class="fa fa-try"></i></p>
                                                            <p style="font-size: 11px; font-weight: 200;"><span style="color: black;">130 + 110</span> | Geçilebilir</p>
                                                            <p>
                                                                <div class="progress" style="width: 80%;">
                                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                                  </div>
                                                                </div>
                                                            </p>
                                                        </center>
                                                        <div class="product-action">
                                                            <div class="product-action-style"> 
                                                                <a data-toggle="modal" data-target="#enterrequirements" title="Enter Requirement"> <i class="fa fa-plus"></i> </a>
                                                                <a data-toggle="modal" data-target="#showdetails" title="Show Details"> <i class="fa fa-eye"></i> </a> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $i++;
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="passive" style="color: #002!important;">
                                        <div class="row">
                                            <?php
                                            $i = 0;
                                            while ($i < 20) 
                                            {
                                            ?>
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="product-wrapper mb-45 text-center">
                                                    <div class="product-img"> 
                                                        <center>
                                                            <p style="font-size: 16px; font-weight: 200;">Product Name</p>
                                                            <img src="https://supereczacilar.com/supereczacilar/app-assets/files/pantactive.jpg" style="width: 100%; opacity: 0.5; overflow: hidden;">
                                                            <h2 style="margin-top: -40%;"><i class="fa fa-power-off"></i></h2>
                                                            <p style="font-size: 12px; font-weight: 200; margin-top: 40%;"><span style="color: orange;">130 + 110</span> | 10.32 <i class="fa fa-try"></i></p>
                                                            <p style="font-size: 11px; font-weight: 200;"><span style="color: black;">130 + 110</span> | Geçilebilir</p>
                                                            <p>
                                                                <div class="progress" style="width: 80%;">
                                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                                  </div>
                                                                </div>
                                                            </p>
                                                        </center>
                                                        <div class="product-action">
                                                            <div class="product-action-style"> 
                                                                <a data-toggle="modal" data-target="#enterrequirements" title="Enter Requirement"> <i class="fa fa-plus"></i> </a>
                                                                <a data-toggle="modal" data-target="#showdetails" title="Show Details"> <i class="fa fa-eye"></i> </a> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $i++;
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                <div id="enterrequirements" class="modal fade" role="dialog">
                                    <div class="modal-dialog" style="width: 80%;">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">
                                                    <span style="border-bottom: 4px solid #ffa700;">Make an Offer</span>
                                                </h4>
                                            </div>
                                            <div class="modal-body">
                                                <h3><center>BACTROBAN POMAD 15 GR</center></h3>
                                                <h4><center><span style="color: #ffa700;">75 + 25</span> | ₺13.63</center></h4>

                                                <div class="row" style="background: url('https://supereczacilar.com/supereczacilar/app-assets/images/backgrounds/button-bg.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                                                    <div class="col-sm-2">
                                                        <h5 style="color: #fff!important;">
                                                            <center>
                                                                <i class="fa fa-reply"></i>
                                                                <br>
                                                                <br>
                                                                Distributor
                                                                <br>
                                                                <br>
                                                                <small style="color: lightgrey!important;">AYKAT</small>
                                                            </center>
                                                        </h5>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <h5 style="color: #fff!important;">
                                                            <center>
                                                                <i class="fa fa-circle"></i>
                                                                <br>
                                                                <br>
                                                                Goal
                                                                <br>
                                                                <br>
                                                                <small style="color: lightgrey!important;">100</small>
                                                            </center>
                                                        </h5>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <h5 style="color: #fff!important;">
                                                            <center>
                                                                <i class="fa fa-shopping-bag"></i>
                                                                <br>
                                                                <br>
                                                                Request
                                                                <br>
                                                                <br>
                                                                <small style="color: lightgrey!important;">0</small>
                                                            </center>
                                                        </h5>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <h5 style="color: #fff!important;">
                                                            <center>
                                                                <i class="fa fa-minus"></i>
                                                                <br>
                                                                <br>
                                                                Remaining
                                                                <br>
                                                                <br>
                                                                <small style="color: lightgrey!important;">100</small>
                                                            </center>
                                                        </h5>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <h5 style="color: #fff!important;">
                                                            <center>
                                                                <i class="fa fa-plug"></i>
                                                                <br>
                                                                <br>
                                                                Goal Connected
                                                                <br>
                                                                <br>
                                                                <small style="color: lightgrey!important;">crossed</small>
                                                            </center>
                                                        </h5>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <h5 style="color: #fff!important;">
                                                            <center>
                                                                <i class="fa fa-desktop"></i>
                                                                <br>
                                                                <br>
                                                                Offer Type
                                                                <br>
                                                                <br>
                                                                <small style="color: lightgrey!important;">Screen Required</small>
                                                            </center>
                                                        </h5>
                                                    </div>
                                                </div>

                                                <div class="row" style="margin-top: 20px;">
                                                    <div class="col-sm-12">
                                                        <input type="number" name="" placeholder="Enter your Required Amount..." class="form-control">
                                                    </div>
                                                    <div class="col-xs-2">
                                                        <img src="https://supereczacilar.com/supereczacilar//app-assets/images/money-bank.jpg" class="img-responsive img-rounded img-thumbnail">
                                                    </div>
                                                    <div class="col-xs-10">
                                                        <h3>
                                                            Your System Earnings
                                                            <br><br>
                                                            <small>0.00 <i class="fa fa-try"></i></small>
                                                        </h3>

                                                        <a href="" class="btn btn-warning">Add</a>

                                                    </div>
                                                    <div class="col-sm-12">
                                                          <a data-toggle="collapse" href="#collapse2">
                                                            My Previous Offers
                                                            <i class="fa fa-arrow-down" style="float: right;"></i>
                                                          </a>
                                                    </div>
                                                </div>
                                                <div id="collapse2" class="panel-collapse collapse">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <h5>
                                                                My previous purchases 
                                                            </h5>
                                                            <div class="">
                                                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">

                                                                    <thead>
                                                                    <tr>
                                                                        <th>Balance Date</th>
                                                                        <th>Product</th>
                                                                        <th>Condition</th>
                                                                        <th>Purchase</th>
                                                                        <th>Net Price</th>
                                                                        <th>Warehouse Price</th>
                                                                        <th>Transaction Status</th>
                                                                        <th>Collection Date</th>
                                                                        <th>Stock Date</th>
                                                                        <th>Area Person</th>
                                                                        <th>Karekod</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <th>Balance Date</th>
                                                                        <th>Product</th>
                                                                        <th>Condition</th>
                                                                        <th>Purchase</th>
                                                                        <th>Net Price</th>
                                                                        <th>Warehouse Price</th>
                                                                        <th>Transaction Status</th>
                                                                        <th>Collection Date</th>
                                                                        <th>Stock Date</th>
                                                                        <th>Area Person</th>
                                                                        <th>Karekod</th>
                                                                    </tr>
                                                                    </tfoot>
                                                                    <tbody>

                                                                    <?php
                                                                    $i = 0;
                                                                    while ($i <= 10) {
                                                                        ?>
                                                                        <tr>
                                                                            <td style="color: grey;">Balance Date</td>
                                                                            <td style="color: grey;">Product</td>
                                                                            <td style="color: grey;">Condition</td>
                                                                            <td style="color: grey;">Purchase</td>
                                                                            <td style="color: grey;">Net Price</td>
                                                                            <td style="color: grey;">Warehouse Price</td>
                                                                            <td style="color: grey;">Transaction Status</td>
                                                                            <td style="color: grey;">Collection Date</td>
                                                                            <td style="color: grey;">Stock Date</td>
                                                                            <td style="color: grey;">Area Person</td>
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
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <div id="showdetails" class="modal fade" role="dialog">
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