<?php
include 'inc/head.php';
include 'inc/header.php';
include 'inc/sidebar.php';

?>
<style type="text/css">
    .nav-tabs li{
        width: 33%;
    }
</style>
<section class="content"  id="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><a href="" style="color: #00b6ca;">ofsahin.com</a> / Group Balance</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Group Balance
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-xs-12" style="border-bottom: 2px solid #ffa700;">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#ShotingPot" aria-controls="ShotingPot" role="tab" data-toggle="tab">Shoting Pot</a></li>
                                    <li role="presentation"><a href="#Pos" aria-controls="Pos" role="tab" data-toggle="tab">Pos</a></li>
                                    <li role="presentation"><a href="#Cons" aria-controls="Cons" role="tab" data-toggle="tab">Cons</a></li>
                                </ul>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="ShotingPot" style="color: #002!important;">
                                        <div class="table-responsive">
                                             <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>District</th>
                                                        <th>Parmacy</th>
                                                        <th>Balance</th>
                                                        <th>Group Load</th>
                                                        <th>Buying this Mounth</th>
                                                        <th>Last Month Buying</th>
                                                        <th>Previous Month Buying</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>District</th>
                                                        <th>Parmacy</th>
                                                        <th>Balance</th>
                                                        <th>Group Load</th>
                                                        <th>Buying this Mounth</th>
                                                        <th>Last Month Buying</th>
                                                        <th>Previous Month Buying</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                <?php
                                                    $i = 0;
                                                    while ($i <= 20) {
                                                ?>
                                                    <tr style="text-align: center;">
                                                        <td>District</td>
                                                        <td>Parmacy</td>
                                                        <td>Balance</td>
                                                        <td>Group Load</td>
                                                        <td>Buying this Mounth</td>
                                                        <td>Last Month Buying</td>
                                                        <td>Previous Month Buying</td>
                                                    </tr>
                                                <?php
                                                    $i++;
                                                    }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Pos" style="color: black!important;">
                                        <div class="table-responsive">
                                             <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>District</th>
                                                        <th>Parmacy</th>
                                                        <th>Balance</th>
                                                        <th>Group Load</th>
                                                        <th>Buying this Mounth</th>
                                                        <th>Last Month Buying</th>
                                                        <th>Previous Month Buying</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>District</th>
                                                        <th>Parmacy</th>
                                                        <th>Balance</th>
                                                        <th>Group Load</th>
                                                        <th>Buying this Mounth</th>
                                                        <th>Last Month Buying</th>
                                                        <th>Previous Month Buying</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                <?php
                                                    $i = 0;
                                                    while ($i <= 20) {
                                                ?>
                                                    <tr style="text-align: center;">
                                                        <td>District</td>
                                                        <td>Parmacy</td>
                                                        <td>Balance</td>
                                                        <td>Group Load</td>
                                                        <td>Buying this Mounth</td>
                                                        <td>Last Month Buying</td>
                                                        <td>Previous Month Buying</td>
                                                    </tr>
                                                <?php
                                                    $i++;
                                                    }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Cons" style="color: #002!important;">
                                        <div class="table-responsive">
                                             <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>District</th>
                                                        <th>Parmacy</th>
                                                        <th>Balance</th>
                                                        <th>Group Load</th>
                                                        <th>Buying this Mounth</th>
                                                        <th>Last Month Buying</th>
                                                        <th>Previous Month Buying</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>District</th>
                                                        <th>Parmacy</th>
                                                        <th>Balance</th>
                                                        <th>Group Load</th>
                                                        <th>Buying this Mounth</th>
                                                        <th>Last Month Buying</th>
                                                        <th>Previous Month Buying</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                <?php
                                                    $i = 0;
                                                    while ($i <= 20) {
                                                ?>
                                                    <tr style="text-align: center;">
                                                        <td>District</td>
                                                        <td>Parmacy</td>
                                                        <td>Balance</td>
                                                        <td>Group Load</td>
                                                        <td>Buying this Mounth</td>
                                                        <td>Last Month Buying</td>
                                                        <td>Previous Month Buying</td>
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
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include "inc/footer.php";
?>