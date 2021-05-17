<?php
include 'inc/head.php';
include 'inc/header.php';
include 'inc/sidebar.php';

?>

<section class="content"  id="content">
    <div class="container-fluid" style="width: 100%;">
        <div class="block-header">
            <h2><a href="" style="color: #00b6ca;">ofsahin.com</a> / Send Message</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Send Message
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Write Your Message:</label>
                                <textarea class="form-control" rows="10" style="resize: vertical;"></textarea>
                            </div>
                            
                            <div class="col-sm-12">
                                <label>Pharmacies to Send</label>
                                <select class="form-control" multiple>
                                    <option>All</option>
                                    <option>Pharmacy 01</option>
                                    <option>Pharmacy 02</option>
                                    <option>Pharmacy 03</option>
                                    <option>Pharmacy 04</option>
                                    <option>Pharmacy 05</option>
                                    <option>Pharmacy 06</option>
                                    <option>Pharmacy 07</option>
                                    <option>Pharmacy 08</option>
                                    <option>Pharmacy 09</option>
                                    <option>Pharmacy 10</option>
                                </select>
                            </div>
                            
                            <div class="col-sm-12">
                                    <input type="submit" class="form-control btn btn-warning" value="Send" style="width: 250px;">
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