<?php
include 'inc/head.php';
include 'inc/header.php';
include 'inc/sidebar.php';

?>

<section class="content"  id="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><a href="" style="color: #00b6ca;">ofsahin.com</a> / Bargain Management</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Bargain Management
                        </h2>

                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-xs-6" style="border-bottom: 8px solid #ffa700;">
                                <center>
                                    <h4>
                                        <a href="Bargain Management By Product.php" style="text-decoration: none; color: #000;">By Products</a>
                                    </h4>
                                </center>
                            </div>
                            <div class="col-xs-6" style="border-bottom: 2px solid #ffa700;">
                                <center>
                                    <h4>
                                        <a href="Bargain Management.php" style="text-decoration: none; color: #000;">According to the experts</a>
                                    </h4>
                                </center>
                            </div>
                        </div>
                        <style type="text/css">
                            .shahbaz514 li{
                                width: 33%;
                                text-align: center;
                            }
                        </style>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-xs-12"  style="border-bottom: 8px solid #ffa700;">
                                        <center>
                                            <h4>
                                                <a style="text-decoration: none; color: #000;">All</a>
                                            </h4>
                                        </center>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                     <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>Select</th>
                                                <th>Representative Name</th>
                                                <th>Phone number</th>
                                                <th>Medicines</th>
                                                <th>Not</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Select</th>
                                                <th>Representative Name</th>
                                                <th>Phone number</th>
                                                <th>Medicines</th>
                                                <th>Not</th>
                                            </tr>
                                        </tfoot>

                                        <?php
                                            $i = 0;
                                            while ($i <= 20) {
                                        ?>
                                            <tr style="text-align: center;">
                                                <td>
                                                    <form>
                                                        <div class="demo-checkbox">
                                                            <input type="checkbox" id="basic_all_<?php echo($i) ?>"/>
                                                            <label for="basic_all_<?php echo($i) ?>"></label>
                                                        </div>
                                                    </form>
                                                </td>
                                                <td>Representative Name</td>
                                                <td>Phone number</td>
                                                <td>Medicines</td>
                                                <td>Not</td>
                                            </tr>
                                        <?php
                                            $i++;
                                            }
                                        ?>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <ul class="nav nav-tabs shahbaz514" role="tablist">
                                            <li role="presentation" class="active"><a href="#allright" aria-controls="allright" role="tab" data-toggle="tab">All</a></li>
                                            <li role="presentation"><a href="#charged" aria-controls="charged" role="tab" data-toggle="tab">Charged</a></li>
                                            <li role="presentation"><a href="#notcollected" aria-controls="notcollected" role="tab" data-toggle="tab">Not Collected</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="allright" style="color: #002!important;">
                                                <div class="table-responsive">
                                                     <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                        <thead>
                                                            <tr>
                                                                <th>Select</th>
                                                                <th>Status</th>
                                                                <th>Collection Date</th>
                                                                <th>Product</th>
                                                                <th>Condition</th>
                                                                <th>Extra Received</th>
                                                            </tr>
                                                        </thead>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Select</th>
                                                                <th>Status</th>
                                                                <th>Collection Date</th>
                                                                <th>Product</th>
                                                                <th>Condition</th>
                                                                <th>Extra Received</th>
                                                            </tr>
                                                        </tfoot>
                                                        <tbody>
                                                        <?php
                                                            $i = 0;
                                                            while ($i <= 20) {
                                                        ?>
                                                            <tr style="text-align: center;">
                                                                <td>
                                                                    <form>
                                                                        <div class="demo-checkbox">
                                                                            <input type="checkbox" id="basic_checkbox_all_<?php echo($i) ?>"/>
                                                                            <label for="basic_checkbox_all_<?php echo($i) ?>"></label>
                                                                        </div>
                                                                    </form>
                                                                </td>
                                                                <td>Status</td>
                                                                <td>Collection Date</td>
                                                                <td>Product</td>
                                                                <td>Condition</td>
                                                                <td>Extra Received</td>
                                                            </tr>
                                                        <?php
                                                            $i++;
                                                            }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="charged" style="color: #2e2e2e!important;">
                                                <div class="table-responsive">
                                                     <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                        <thead>
                                                            <tr>
                                                                <th>Select</th>
                                                                <th>Status</th>
                                                                <th>Collection Date</th>
                                                                <th>Product</th>
                                                                <th>Condition</th>
                                                                <th>Extra Received</th>
                                                            </tr>
                                                        </thead>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Select</th>
                                                                <th>Status</th>
                                                                <th>Collection Date</th>
                                                                <th>Product</th>
                                                                <th>Condition</th>
                                                                <th>Extra Received</th>
                                                            </tr>
                                                        </tfoot>
                                                        <tbody>
                                                        <?php
                                                            $i = 0;
                                                            while ($i <= 20) {
                                                        ?>
                                                            <tr style="text-align: center;">
                                                                <td>
                                                                    <form>
                                                                        <div class="demo-checkbox">
                                                                            <input type="checkbox" id="basic_checkbox_all_<?php echo($i) ?>"/>
                                                                            <label for="basic_checkbox_all_<?php echo($i) ?>"></label>
                                                                        </div>
                                                                    </form>
                                                                </td>
                                                                <td>Status</td>
                                                                <td>Collection Date</td>
                                                                <td>Product</td>
                                                                <td>Condition</td>
                                                                <td>Extra Received</td>
                                                            </tr>
                                                        <?php
                                                            $i++;
                                                            }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="notcollected" style="color: #002!important;">
                                                <div class="table-responsive">
                                                     <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                        <thead>
                                                            <tr>
                                                                <th>Select</th>
                                                                <th>Status</th>
                                                                <th>Collection Date</th>
                                                                <th>Product</th>
                                                                <th>Condition</th>
                                                                <th>Extra Received</th>
                                                            </tr>
                                                        </thead>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Select</th>
                                                                <th>Status</th>
                                                                <th>Collection Date</th>
                                                                <th>Product</th>
                                                                <th>Condition</th>
                                                                <th>Extra Received</th>
                                                            </tr>
                                                        </tfoot>
                                                        <tbody>
                                                        <?php
                                                            $i = 0;
                                                            while ($i <= 20) {
                                                        ?>
                                                            <tr style="text-align: center;">
                                                                <td>
                                                                    <form>
                                                                        <div class="demo-checkbox">
                                                                            <input type="checkbox" id="basic_checkbox_all_<?php echo($i) ?>"/>
                                                                            <label for="basic_checkbox_all_<?php echo($i) ?>"></label>
                                                                        </div>
                                                                    </form>
                                                                </td>
                                                                <td>Status</td>
                                                                <td>Collection Date</td>
                                                                <td>Product</td>
                                                                <td>Condition</td>
                                                                <td>Extra Received</td>
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
        </div>
    </div>
</section>
<?php
include "inc/footer.php";
?>