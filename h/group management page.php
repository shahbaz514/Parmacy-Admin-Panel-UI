<?php
include 'inc/head.php';
include 'inc/header.php';
include 'inc/sidebar.php';

?>

<section class="content"  id="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><a href="" style="color: #00b6ca;">ofsahin.com</a> / Group Management</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Group Management
                            <button style="float: right; display: inline;" type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addgroup"><i class="fa fa-plus"></i></button>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-xs-6" style="border-bottom: 8px solid #ffa700;">
                                <center>
                                    <h4>
                                        <a href="group%20management%20page.php" style="text-decoration: none; color: #000;">Group Management</a>
                                    </h4>
                                </center>
                            </div>
                            <div class="col-xs-6" style="border-bottom: 2px solid #ffa700;">
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
                                                <th>Group Name</th>
                                                <th>Group City</th>
                                                <th>Group Admin</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Group Name</th>
                                                <th>Group City</th>
                                                <th>Group Admin</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>

                                        <?php
                                            $i = 0;
                                            while ($i <= 20) {
                                        ?>
                                            <tr style="text-align: center;">
                                                <td>Group Name</td>
                                                <td>Group City</td>
                                                <td>Group Admin</td>
                                                <td><a class="btn btn-warning" data-toggle="modal" data-target="#editGroup"><i class="fa fa-pencil"></i></a></td>
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
<div id="addgroup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Group</h4>
      </div>
      <div class="modal-body">

                        <div class="row">
                            <div class="col-sm-12">
                                <label>Group Name</label>
                                <input type="text" name="" placeholder="Group Name"  class="form-control">
                            </div>
                            <div class="col-sm-12">
                                <label>Group City</label>
                                <input type="text" name="" placeholder="Group City" class="form-control">
                            </div>
                            <div class="col-sm-12">
                                <label>Group Admin</label>
                                <input type="text" name="" placeholder="Group Admin" class="form-control">
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
<div id="editGroup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Group</h4>
      </div>
      <div class="modal-body">

                        <div class="row">
                            <div class="col-sm-12">
                                <label>Group Name</label>
                                <input type="text" name="" value="Group Name"  class="form-control">
                            </div>
                            <div class="col-sm-12">
                                <label>Group City</label>
                                <input type="text" name="" value="Group City" class="form-control">
                            </div>
                            <div class="col-sm-12">
                                <label>Group Admin</label>
                                <input type="text" name="" value="Group Admin" class="form-control">
                            </div>
                            
                            <div class="col-sm-12">
                                <label>Group Members</label>
                                <select class="form-control" multiple="">
                                    <option>Person 1</option>
                                    <option>Person 2</option>
                                    <option>Person 3</option>
                                    <option>Person 4</option>
                                    <option>Person 5</option>
                                    <option>Person 6</option>
                                    <option>Person 7</option>
                                </select>
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