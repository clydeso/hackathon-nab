
<?php 

include_once( '../config.php' );
include_once( __DIR__.'/../class/Session.php' );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content=""> 
    <link rel="icon" href="../favicon.ico">
    <title><?php echo APP_NAME ?></title>

    <!-- Bootstrap core CSS -->
 
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="../assets/css/dashboard.css" rel="stylesheet">
</head>
<body>
    
    <?php include_once('header.php'); ?>
    <div class="container-fluid">
        <div class="row">
            <?php include_once('navigation.php'); ?>
            <main class="col-md-9 ml-sm-auto col-lg-10 px-4" role="main">
                <div class="row py-5">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-primary btn-sm float-right ml-2" onclick="window.location='<?php echo FULL_URL ?>dashboard/create-product'">Create product</button> 
                        <button type="button" class="btn btn-primary btn-sm float-right" onclick="window.location='<?php echo FULL_URL ?>dashboard/import-product'">Import CSV</button>
                        <h2>Product</h2> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card"> 
                            <div class="card-header"> 
                                <div class="row">
                                    <div class="col-md-3"><img src="<?php echo FULL_URL ?>assets/images/products/1.jpg" alt="Product 1" style="width:100%"></div>
                                    <div class="col-md-6">Thank You Hand Lotion Botanical Patchouli & Vanilla 500ML</div>
                                    <div class="col-md-3"><a href="#viewproduct" class="float-right">Edit | View</a></div>
                                </div> 
                            </div>
                            <div class="card-body">  
                                <div class="row">
                                    <div class="col-md-6">Product Pricing</div>
                                    <div class="col-md-6">$6 AUD | ¥28.24</div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">Platform</div>
                                    <div class="col-md-6">Taobao.com</div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">Product Views</div>
                                    <div class="col-md-6">20000</div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">Sessions</div>
                                    <div class="col-md-6">500</div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">YTD Revenue</div>
                                    <div class="col-md-6">$500.00</div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">Bounce Rate</div>
                                    <div class="col-md-6">20%</div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">Ratings</div>
                                    <div class="col-md-6">4 out of 5</div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">Status</div>
                                    <div class="col-md-6">Published</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header"> 
                                <div class="row">
                                    <div class="col-md-3"><img src="<?php echo FULL_URL ?>assets/images/products/1.jpg" alt="Product 1" style="width:100%"></div>
                                    <div class="col-md-6">Thank You Hand Lotion Botanical Patchouli & Vanilla 500ML</div>
                                    <div class="col-md-3"><a href="#viewproduct" class="float-right">Edit | View</a></div>
                                </div> 
                            </div>
                            <div class="card-body"> 
                                <div class="row">
                                    <div class="col-md-6">Product Pricing</div>
                                    <div class="col-md-6">$6 AUD | ¥28.24</div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">Platform</div>
                                    <div class="col-md-6">Tmall.com</div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">Product Views</div>
                                    <div class="col-md-6">40000</div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">Sessions</div>
                                    <div class="col-md-6">2000</div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">YTD Revenue</div>
                                    <div class="col-md-6">$2000.00</div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">Bounce Rate</div>
                                    <div class="col-md-6">5%</div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">Ratings</div>
                                    <div class="col-md-6">5 out of 5</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">Status</div>
                                    <div class="col-md-6">Published</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header"> 
                                <div class="row">
                                    <div class="col-md-3"><img src="<?php echo FULL_URL ?>assets/images/products/1.jpg" alt="Product 1" style="width:100%"></div>
                                    <div class="col-md-6">Thank You Hand Lotion Botanical Patchouli & Vanilla 500ML</div>
                                    <div class="col-md-3"><a href="#viewproduct" class="float-right">Edit | View</a></div>
                                </div> 
                            </div>
                            <div class="card-body"> 
                                <div class="row">
                                    <div class="col-md-6">Product Pricing</div>
                                    <div class="col-md-6">$6 AUD | ¥28.24</div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">Platform</div>
                                    <div class="col-md-6">Tmall.com</div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">Product Views</div>
                                    <div class="col-md-6">0</div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">Sessions</div>
                                    <div class="col-md-6">0</div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">YTD Revenue</div>
                                    <div class="col-md-6">0</div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">Bounce Rate</div>
                                    <div class="col-md-6">n/a</div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">Ratings</div>
                                    <div class="col-md-6">n/a</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">Status</div>
                                    <div class="col-md-6">Pending</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>  
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script> 
    <script>feather.replace();</script> <!-- Graphs --> 
</body>
</html>
