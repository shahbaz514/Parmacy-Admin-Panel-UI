<?php
include 'inc/head.php';
include 'inc/header.php';
include 'inc/sidebar.php';

?>

<section class="content"  id="content">
    <div class="container-fluid" style="width: 100%;">
        <div class="block-header">
            <h2><a href="" style="color: #00b6ca;">ofsahin.com</a> / My debts</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                             My debts
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                             <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Debt Date</th>
                                        <th>Number of Purchases</th>
                                        <th>Number of Purchases</th>
                                        <th>System Gain</th>
                                        <th>System Debt</th>
                                        <th>Shipment Debt</th>
                                        <th>Total debt</th>
                                        <th>Payment Due Date</th>
                                        <th>Collection Date</th>
                                        <th>Status</th>
                                        <th>Operation</th>
                                        <th>Invoice</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Debt Date</th>
                                        <th>Number of Purchases</th>
                                        <th>Number of Purchases</th>
                                        <th>System Gain</th>
                                        <th>System Debt</th>
                                        <th>Shipment Debt</th>
                                        <th>Total debt</th>
                                        <th>Payment Due Date</th>
                                        <th>Collection Date</th>
                                        <th>Status</th>
                                        <th>Operation</th>
                                        <th>Invoice</th>
                                    </tr>
                                </tfoot>

                                <?php
                                    $i = 0;
                                    while ($i <= 20) {
                                ?>
                                    <tr style="color: #36d39b; text-align: center;">
                                        <td>Mart 2021</td>
                                        <td>41</td>
                                        <td>6567.44</td>
                                        <td>1656.12</td>
                                        <td>0.00 TL</td>
                                        <td>200.00 TL</td>
                                        <td>200.00 TL</td>
                                        <td>31-03-2021</td>
                                        <td>31-03-2021</td>
                                        <td>Paid</td>
                                        <td><i style="color: #36d39b;" class="fa fa-check"></i></td>
                                        <td>-</td>
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
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include "inc/footer.php";
?>