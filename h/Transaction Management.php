<?php
include 'inc/head.php';
include 'inc/header.php';
include 'inc/sidebar.php';

?>

<section class="content"  id="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><a href="" style="color: #00b6ca;">ofsahin.com</a> / Transaction Management</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Transaction Management
                        </h2>
                    </div>
                    <style type="text/css">
                        .nav-tabs li{
                            width: 25%;
                            text-align: center;
                        }
                    </style>
                    <div class="body">
                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#senderpharmacy" aria-controls="senderpharmacy" role="tab" data-toggle="tab">Sender pharmacy</a></li>
                                    <li role="presentation"><a href="#receiverpharmacy" aria-controls="receiverpharmacy" role="tab" data-toggle="tab">Receiver pharmacy</a></li>
                                    <li role="presentation"><a href="#approvaldate" aria-controls="approvaldate" role="tab" data-toggle="tab">Approval date</a></li>
                                    <li role="presentation"><a href="#packagecounts" aria-controls="packagecounts" role="tab" data-toggle="tab">Package counts</a></li>
                                </ul>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="senderpharmacy" style="color: red!important;">
                                        <div class="table-responsive">
                                             <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Drug Name</th>
                                                        <th>Barcode</th>
                                                        <th>Image</th>
                                                        <th>Producer Company</th>
                                                        <th>Warehouse Price</th>
                                                        <th>Government price</th>
                                                        <th>Counter Price</th>
                                                        <th>Data Matrix</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Drug Name</th>
                                                        <th>Barcode</th>
                                                        <th>Image</th>
                                                        <th>Producer Company</th>
                                                        <th>Warehouse Price</th>
                                                        <th>Government price</th>
                                                        <th>Counter Price</th>
                                                        <th>Data Matrix</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                <?php
                                                    $i = 0;
                                                    while ($i <= 20) {
                                                ?>
                                                    <tr style="text-align: center;">
                                                        <td>Drug Name</td>
                                                        <td>Barcode</td>
                                                        <td>Image</td>
                                                        <td>Producer Company</td>
                                                        <td>Warehouse Price</td>
                                                        <td>Government price</td>
                                                        <td>Counter Price</td>
                                                        <td>Data Matrix</td>
                                                        <td><a class="btn btn-warning" data-toggle="modal" data-target="#editDrug"><i class="fa fa-pencil"></i></a></td>
                                                        <td><a class="btn btn-danger" href=""><i class="fa fa-cut"></i></a></td>
                                                    </tr>
                                                <?php
                                                    $i++;
                                                    }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="receiverpharmacy" style="color: green!important;">
                                        <div class="table-responsive">
                                             <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Drug Name</th>
                                                        <th>Barcode</th>
                                                        <th>Image</th>
                                                        <th>Producer Company</th>
                                                        <th>Warehouse Price</th>
                                                        <th>Government price</th>
                                                        <th>Counter Price</th>
                                                        <th>Data Matrix</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Drug Name</th>
                                                        <th>Barcode</th>
                                                        <th>Image</th>
                                                        <th>Producer Company</th>
                                                        <th>Warehouse Price</th>
                                                        <th>Government price</th>
                                                        <th>Counter Price</th>
                                                        <th>Data Matrix</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                <?php
                                                    $i = 0;
                                                    while ($i <= 20) {
                                                ?>
                                                    <tr style="text-align: center;">
                                                        <td>Drug Name</td>
                                                        <td>Barcode</td>
                                                        <td>Image</td>
                                                        <td>Producer Company</td>
                                                        <td>Warehouse Price</td>
                                                        <td>Government price</td>
                                                        <td>Counter Price</td>
                                                        <td>Data Matrix</td>
                                                        <td><a class="btn btn-warning" data-toggle="modal" data-target="#editDrug"><i class="fa fa-pencil"></i></a></td>
                                                        <td><a class="btn btn-danger" href=""><i class="fa fa-cut"></i></a></td>
                                                    </tr>
                                                <?php
                                                    $i++;
                                                    }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="approvaldate" style="color: purple!important;">
                                        <div class="table-responsive">
                                             <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Drug Name</th>
                                                        <th>Barcode</th>
                                                        <th>Image</th>
                                                        <th>Producer Company</th>
                                                        <th>Warehouse Price</th>
                                                        <th>Government price</th>
                                                        <th>Counter Price</th>
                                                        <th>Data Matrix</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Drug Name</th>
                                                        <th>Barcode</th>
                                                        <th>Image</th>
                                                        <th>Producer Company</th>
                                                        <th>Warehouse Price</th>
                                                        <th>Government price</th>
                                                        <th>Counter Price</th>
                                                        <th>Data Matrix</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                <?php
                                                    $i = 0;
                                                    while ($i <= 20) {
                                                ?>
                                                    <tr style="text-align: center;">
                                                        <td>Drug Name</td>
                                                        <td>Barcode</td>
                                                        <td>Image</td>
                                                        <td>Producer Company</td>
                                                        <td>Warehouse Price</td>
                                                        <td>Government price</td>
                                                        <td>Counter Price</td>
                                                        <td>Data Matrix</td>
                                                        <td><a class="btn btn-warning" data-toggle="modal" data-target="#editDrug"><i class="fa fa-pencil"></i></a></td>
                                                        <td><a class="btn btn-danger" href=""><i class="fa fa-cut"></i></a></td>
                                                    </tr>
                                                <?php
                                                    $i++;
                                                    }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="packagecounts" style="color: blue!important;">
                                        <div class="table-responsive">
                                             <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Drug Name</th>
                                                        <th>Barcode</th>
                                                        <th>Image</th>
                                                        <th>Producer Company</th>
                                                        <th>Warehouse Price</th>
                                                        <th>Government price</th>
                                                        <th>Counter Price</th>
                                                        <th>Data Matrix</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Drug Name</th>
                                                        <th>Barcode</th>
                                                        <th>Image</th>
                                                        <th>Producer Company</th>
                                                        <th>Warehouse Price</th>
                                                        <th>Government price</th>
                                                        <th>Counter Price</th>
                                                        <th>Data Matrix</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                <?php
                                                    $i = 0;
                                                    while ($i <= 20) {
                                                ?>
                                                    <tr style="text-align: center;">
                                                        <td>Drug Name</td>
                                                        <td>Barcode</td>
                                                        <td>Image</td>
                                                        <td>Producer Company</td>
                                                        <td>Warehouse Price</td>
                                                        <td>Government price</td>
                                                        <td>Counter Price</td>
                                                        <td>Data Matrix</td>
                                                        <td><a class="btn btn-warning" data-toggle="modal" data-target="#editDrug"><i class="fa fa-pencil"></i></a></td>
                                                        <td><a class="btn btn-danger" href=""><i class="fa fa-cut"></i></a></td>
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
<div id="editDrug" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Transaction</h4>
      </div>
      <div class="modal-body">

                        <div class="row">
                            <div class="col-sm-6">
                                <label>Producer Company</label>
                                <input type="text" name="" placeholder="Producer Company" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label>Warehouse Producer</label>
                                <input type="text" name="" placeholder="Warehouse Producer" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label>Government Price</label>
                                <input type="text" name="" placeholder="Government Price" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label>Counter Price</label>
                                <input type="text" name="" placeholder="Counter Price" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <form>
                                    <div class="demo-checkbox">
                                        <label></label>
                                        <input type="checkbox" id="edit_drug"/>
                                        <label for="edit_drug">Data Matrix</label>
                                    </div>
                                </form>
                            </div>

                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-warning">Update</button>
      </div>
    </div>

  </div>
</div>
<?php
include "inc/footer.php";
?>