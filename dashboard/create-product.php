
<?php 

include_once( '../config.php' );
include_once( __DIR__.'/../class/Session.php' );

?>
<!DOCTYPE html>
<html lang="en" ng-app="productApp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content=""> 
    <link rel="icon" href="../favicon.ico">
    <title><?php echo APP_NAME ?> </title>

    <!-- Bootstrap core CSS -->
 
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script> 
    <script src="../assets/js/app/app.js"></script>   
    <script src="../assets/js/app/product.js"></script>   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="../assets/css/dashboard.css" rel="stylesheet">
    <style>
    .bs-wizard {margin-top: 40px;}

    /*Form Wizard*/
    .bs-wizard {border-bottom: solid 1px #e0e0e0; padding: 0 0 10px 0;}
    .bs-wizard > .bs-wizard-step {padding: 0; position: relative;}
    .bs-wizard > .bs-wizard-step + .bs-wizard-step {}
    .bs-wizard > .bs-wizard-step .bs-wizard-stepnum {color: #000000; font-size: 16px; margin-bottom: 5px;}
    .bs-wizard > .bs-wizard-step .bs-wizard-info {color: #999; font-size: 14px;}
    .bs-wizard > .bs-wizard-step > .bs-wizard-dot {position: absolute; width: 30px; height: 30px; display: block; background: #000; top: 47px; left: 50%; margin-top: -15px; margin-left: -15px; border-radius: 50%;} 
    .bs-wizard > .bs-wizard-step > .bs-wizard-dot:after {content: ' '; width: 14px; height: 14px; background: #be0d00; border-radius: 50px; position: absolute; top: 8px; left: 8px; } 
    .bs-wizard > .bs-wizard-step > .progress {position: relative; border-radius: 0px; height: 8px; box-shadow: none; margin: 20px 0;}
    .bs-wizard > .bs-wizard-step > .progress > .progress-bar {width:0px; box-shadow: none; background: #000;}
    .bs-wizard > .bs-wizard-step.complete > .progress > .progress-bar {width:100%;}
    .bs-wizard > .bs-wizard-step.active > .progress > .progress-bar {width:50%;}
    .bs-wizard > .bs-wizard-step:first-child.active > .progress > .progress-bar {width:0%;}
    .bs-wizard > .bs-wizard-step:last-child.active > .progress > .progress-bar {width: 100%;}
    .bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot {background-color: #f5f5f5;}
    .bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot:after {opacity: 0;}
    .bs-wizard > .bs-wizard-step:first-child  > .progress {left: 50%; width: 50%;}
    .bs-wizard > .bs-wizard-step:last-child  > .progress {width: 50%;}
    .bs-wizard > .bs-wizard-step.disabled a.bs-wizard-dot{ pointer-events: none; }
    /*END Form Wizard*/

    .select-card {
        height: 200px;
        background-size: 200px auto;
        background-position: center;
        background-repeat: no-repeat;
        cursor: pointer;
    }
    .select-card:hover,
    .select-card:active,
    .select-card:focus {
        opacity: 0.8;
    }

    .hide { display: none; }
    </style>
</head>
<body>
    
    <?php include_once('header.php'); ?>
    <div class="container-fluid">
        <div class="row">
            <?php include_once('navigation.php'); ?>
            <main class="col-md-9 ml-sm-auto col-lg-10 px-4" role="main"> 

                <!-- Step Process Indicator  -->
                <div class="row py-5">
                    <div class="col-md-12">    
                        <div class="row bs-wizard" style="border-bottom:0;">
                            <div class="col-md-4 bs-wizard-step complete">
                                <div class="text-center bs-wizard-stepnum">Select Your Marketplace</div>
                                <div class="progress"><div class="progress-bar"></div></div>
                                <a href="#" class="bs-wizard-dot"></a> 
                            </div> 
                            <div class="col-md-4 bs-wizard-step disabled"><!-- complete -->
                                <div class="text-center bs-wizard-stepnum">Product Details</div>
                                <div class="progress"><div class="progress-bar"></div></div>
                                <a href="#" class="bs-wizard-dot"></a> 
                            </div>  
                            <div class="col-md-4 bs-wizard-step disabled"><!-- active -->
                                <div class="text-center bs-wizard-stepnum">Review</div>
                                <div class="progress"><div class="progress-bar"></div></div>
                                <a href="#" class="bs-wizard-dot"></a> 
                            </div>
                        </div> 
                    </div>
                </div>

                <!-- Steps Navigation  -->
          <!--       <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-primary float-right btn-next-step">Next</button>
                        <button type="button" class="btn btn-primary float-left btn-back-step">Back</button>
                    </div>
                </div> -->

                <!-- Steps  -->
                <div class="row py-5">
                    <div class="col-md-12"> 
                        <!-- Step1: Product Creation --> 
                        <div class="market-place row step-1 step">
                            <!-- <product-marketplace></product-marketplace> -->
                            <div class="col-md-4">
                                <div class="market-place-card-1 select-card shadow" style="background-image: url('<?php echo FULL_URL ?>/assets/images/tmall.jpg')"></div>
                            </div>
                            <div class="col-md-4">
                                <div class="market-place-card-2 select-card shadow" style="background-image: url('<?php echo FULL_URL ?>/assets/images/taoboa.png')"></div>
                            </div>
                             <div class="col-md-4">
                                <div class="market-place-card-2 select-card shadow" style="background-image: url('<?php echo FULL_URL ?>/assets/images/alibaba2.jpg')"></div>
                            </div>
                        </div>

                        <!-- Step2: Product Creation --> 
                        <div class="product-creation hide step-2 step">
                            step 2
                            <!-- <product-creation></product-creation> -->
                        </div>

                        <!-- Step3: Product Creation --> 
                        <div class="product-review hide step-3 step">
                            step 3
                            <!-- <product-review></product-review> -->
                        </div>
                    </div>
                </div>

                <!-- Steps Navigation  -->
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-primary float-right btn-next-step">Next</button>
                        <button type="button" class="btn btn-primary float-left btn-back-step hide">Back</button>
                    </div>
                </div>

                <!-- Steps Navigation  -->
                <div class="row bg-dark mt-5 py-5 mt-5" style="margin-left: -1.5rem; margin-right: -1.5rem; padding: 10px">
                    <div class="col-md-12 my-2">
                        <h2 class="text-white text-center">Learn more</h2>
                        <p class="mb-5 text-white text-center">If you are unsure of which Marketplace to choose, please use the following resources to help you.</p>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card">
                            <div class="card-header">
                                <span data-feather="file-text"></span> &nbsp; <strong>Learn how to optimise your products in Alibaba</strong>
                            </div> 
                            <div class="card-body">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/lBraYfw7Ih4?rel=0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2"> 
                        <div class="card">
                            <div class="card-header">
                                <span data-feather="dollar-sign"></span> &nbsp; <strong>Improve Your Sells</strong>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="<?php echo FULL_URL ?>dashboard/resources#keyaudience">Target Key Audience</a></li>
                                <li class="list-group-item"><a href="<?php echo FULL_URL ?>dashboard/resources#loancredits">Best Practices</a></li>
                                <li class="list-group-item"><a href="<?php echo FULL_URL ?>dashboard/resources#creditcards">Policies</a></li>
                                <li class="list-group-item"><a href="<?php echo FULL_URL ?>dashboard/resources#businessconsultancy">FAQs</a></li> 
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card">
                            <div class="card-header">
                                <span data-feather="file-text"></span> &nbsp; <strong>Other Tutorials</strong>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="<?php echo FULL_URL ?>dashboard/resources#bestpractices">Optimise for Taobao</a></li>
                                <li class="list-group-item"><a href="<?php echo FULL_URL ?>dashboard/resources#regulations">Optimise for Tmall</a></li>  
                                <li class="list-group-item"><a href="<?php echo FULL_URL ?>dashboard/resources#regulations">Optimise for Alibaba <span class="badge badge-primary">New</span></a></li> 
                                <li class="list-group-item"><a href="<?php echo FULL_URL ?>dashboard/resources#regulations">Key Opinion Leaders in China <span class="badge badge-primary">New</span></a></li> 
                                <li class="list-group-item"><a href="<?php echo FULL_URL ?>dashboard/resources#regulations">Social Media / Influencers and how it works <span class="badge badge-primary">New</span></a></li> 
                            </ul>
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
    <script>
        var process_step = 1;
        jQuery('.btn-next-step').click(function(){ 
            process_step = process_step + 1;
            jQuery('.step').addClass('hide');
            jQuery('.step-'+process_step).removeClass('hide');
        });
    </script>
</body>
</html>
