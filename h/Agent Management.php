<?php
include 'inc/head.php';
include 'inc/header.php';
include 'inc/sidebar.php';

?>

<section class="content" id="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><a href="" style="color: #00b6ca;">ofsahin.com</a> / Agent Management</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Agent Management
                        </h2>

                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row" style="background: url(https://supereczacilar.com/supereczacilar/app-assets/images/backgrounds/button-bg.jpg) no-repeat center!important; background-size: cover;">
                                    <div class="col-sm-6 col-xs-6" style="color: #fff; cursor: pointer;">
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
                                    <div class="col-sm-6 col-xs-6" style="color: #fff; cursor: pointer;">
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
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="">
                                     <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>Select</th>
                                                <th>Representative Name</th>
                                                <th>Phone number</th>
                                                <th>Medicines</th>
                                                <th>İli</th>
                                                <th>Districts</th>
                                                <th>Not</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Select</th>
                                                <th>Representative Name</th>
                                                <th>Phone number</th>
                                                <th>Medicines</th>
                                                <th>İli</th>
                                                <th>Districts</th>
                                                <th>Not</th>
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
                                                <td>Representative Name</td>
                                                <td>Phone number</td>
                                                <td>Medicines</td>
                                                <td>İli</td>
                                                <td>Districts</td>
                                                <td>Not</td>
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
</section>
<?php
include "inc/footer.php";
?>