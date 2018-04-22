

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
    <div class="container-fluid gettingstarted">
        <div class="row">
            <?php include_once('navigation.php'); ?>
            <main class="col-md-9 ml-sm-auto col-lg-10 px-4" role="main">
               <div class="row py-5">
                    <div class="col-md-12">
                        <h2>Getting started</h2>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card bg-dark text-white text-center card-video">
                                  <img src="<?php echo FULL_URL ?>assets/images/placeholders/typing.jpg" alt="" class=" card-img-top">
                                  <a href="#" class="card-link"></a>
                                  <div class="card-img-overlay card-video">
                                    <div class="card-content">
                                      <h5 class="card-title">Quick Start</h5>
                                      <span data-feather="play-circle" data-color="white"></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="py-3"></div>
                            </div>

                            <div class="col-md-6">
                              <div class="card bg-dark text-white text-center card-video">
                                <img src="<?php echo FULL_URL ?>assets/images/placeholders/writing.jpg" alt="" class=" card-img-top">
                                <a href="#" class="card-link"></a>
                                <div class="card-img-overlay">
                                  <div class="card-content">
                                    <h5 class="card-title">What to expect.</h5>
                                    <span data-feather="play-circle" data-color="white"></span>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="card mb-3">
                                <img src="<?php echo FULL_URL ?>assets/images/placeholders/flowchart.jpg" alt="" class=" card-img-top">
                                <div class="card-body">
                                  <h5 class="card-title">Quick start quide.</h5>
                                  <p class="card-text">This content is a little bit longer.</p>
                                  <p class="card-text"></p>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="card mb-3">
                                <img src="<?php echo FULL_URL ?>assets/images/placeholders/group.jpg" alt="" class=" card-img-top">
                                <div class="card-body">
                                  <h5 class="card-title">More resources</h5>
                                  <p class="card-text">More text here.</p>
                                  <p class="card-text"></p>
                                </div>
                              </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">
                                <span data-feather="info"></span> &nbsp; <strong>NAB Support</strong>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="<?php echo FULL_URL ?>dashboard/resources#loancredits">Loan Credits</a></li>
                                <li class="list-group-item"><a href="<?php echo FULL_URL ?>dashboard/resources#creditcards">Credit Cards</a></li>
                                <li class="list-group-item"><a href="<?php echo FULL_URL ?>dashboard/resources#businessconsultancy">Business Consultancy</a></li>
                                <li class="list-group-item"><a href="<?php echo FULL_URL ?>dashboard/resources#customerservice">Customer Service</a></li>
                            </ul>
                        </div>
                        <div class="py-3"></div>
                        <div class="card py-10">
                            <div class="card-header">
                                <span data-feather="file-text"></span> &nbsp; <strong>Improve Your Sells</strong>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="<?php echo FULL_URL ?>dashboard/resources#bestpractices">Best Practices</a></li>
                                <li class="list-group-item"><a href="<?php echo FULL_URL ?>dashboard/resources#regulations">Regulations</a></li>
                                <li class="list-group-item"><a href="<?php echo FULL_URL ?>dashboard/resources#faqs">FAQs</a></li>
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
</body>
</html>
