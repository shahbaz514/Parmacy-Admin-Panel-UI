<?php
include 'inc/head.php';
include 'inc/header.php';
include 'inc/sidebar.php';

?>

<section class="content"  id="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><a href="" style="color: #00b6ca;">ofsahin.com</a> / Drug Management</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Drug Management
                            <button style="float: right; display: inline;" type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addDrug"><i class="fa fa-plus"></i></button>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-xs-6" style="border-bottom: 2px solid #ffa700;">
                                <center>
                                    <h4>
                                        <a href="group%20management%20page.php" style="text-decoration: none; color: #000;">Group Management</a>
                                    </h4>
                                </center>
                            </div>
                            <div class="col-xs-6" style="border-bottom: 8px solid #ffa700;">
                                <center>
                                    <h4>
                                        <a href="drug.php" style="text-decoration: none; color: #000;">Drug Management</a>
                                    </h4>
                                </center>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                
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