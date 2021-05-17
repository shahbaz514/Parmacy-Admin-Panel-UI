<?php
include 'inc/head.php';
include 'inc/header.php';
include 'inc/sidebar.php';

?>

<section class="content"  id="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><a href="" style="color: #00b6ca;">ofsahin.com</a> / My Wish List</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            My Wish List
                        </h2>

                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row" style="background: url(https://supereczacilar.com/supereczacilar/app-assets/images/backgrounds/button-bg.jpg) no-repeat center!important; background-size: cover;">
                                    <div class="col-sm-4 col-xs-6" style="color: #fff; cursor: pointer;">
                                        <p>
                                            <center>
                                                <a style="display: inline;">
                                                    <h2 style="color: #fff;">
                                                        <i class="fa fa-plus"></i>
                                                    </h2>
                                                </a>
                                                <font style="vertical-align: inherit; display: inline;">
                                                    <font style="vertical-align: inherit;">Add New Request</font>
                                                </font>
                                            </center>
                                        </p>
                                    </div>
                                    <div class="col-sm-4 col-xs-6" style="color: #fff; cursor: pointer;">
                                        <p>
                                            <center>
                                                <a style="display: inline;">
                                                    <h2 style="color: #fff;">
                                                        <i class="fa fa-pencil"></i>
                                                    </h2>
                                                </a>
                                                <font style="vertical-align: inherit; display: inline;">
                                                    <font style="vertical-align: inherit;">Edit</font>
                                                </font>
                                            </center>
                                        </p>
                                    </div>
                                    <div class="col-sm-4 col-xs-6" style="color: #fff; cursor: pointer;">
                                        <p>
                                            <center>
                                                <a style="display: inline;">
                                                    <h2 style="color: #fff;">
                                                        <i class="fa fa-cut"></i>
                                                    </h2>
                                                </a>
                                                <font style="vertical-align: inherit; display: inline;">
                                                    <font style="vertical-align: inherit;">Del</font>
                                                </font>
                                            </center>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="table-responsive">
                                     <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>Select</th>
                                                <th>Pharmacy</th>
                                                <th>Name of the product</th>
                                                <th>Product Barcode</th>
                                                <th>Auto. Purchase Upper Limit</th>
                                                <th>Number of Products</th>
                                                <th>Request Added Date</th>
                                                <th>Auto Demand</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Select</th>
                                                <th>Pharmacy</th>
                                                <th>Name of the product</th>
                                                <th>Product Barcode</th>
                                                <th>Auto. Purchase Upper Limit</th>
                                                <th>Number of Products</th>
                                                <th>Request Added Date</th>
                                                <th>Auto Demand</th>
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
                                                            <input type="checkbox" id="basic_checkbox_all_<?php echo($i) ?>"/>
                                                            <label for="basic_checkbox_all_<?php echo($i) ?>"></label>
                                                        </div>
                                                    </form>
                                                </td>
                                                <td>Pharmacy</td>
                                                <td>Name of the product</td>
                                                <td>Product Barcode</td>
                                                <td>Auto. Purchase Upper Limit</td>
                                                <td>Number of Products</td>
                                                <td>Request Added Date</td>
                                                <td>Auto Demand</td>
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
        </div>
    </div>
</section>
<div id="addDrug" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Drug</h4>
      </div>
      <div class="modal-body">

                        <div class="row">
                            <div class="col-sm-6">
                                <label>Drug Name</label>
                                <input type="text" name="" placeholder="Drug Name"  class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label>Barcode</label>
                                <input type="text" name="" placeholder="Barcode" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label>Image</label>
                                <input type="file" name="" title="Image" class="form-control">
                            </div>
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
                                        <input type="checkbox" id="add_drug"/>
                                        <label for="add_drug">Data Matrix</label>
                                    </div>
                                </form>
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
<div id="editDrug" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Drug</h4>
      </div>
      <div class="modal-body">

                        <div class="row">
                            <div class="col-sm-6">
                                <label>Drug Name</label>
                                <input type="text" name="" placeholder="Drug Name"  class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label>Barcode</label>
                                <input type="text" name="" placeholder="Barcode" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label>Image</label>
                                <input type="file" name="" title="Image" class="form-control">
                            </div>
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