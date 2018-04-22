
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
    <div class="container-fluid resources">
        <div class="row">
            <?php include_once('navigation.php'); ?>
            <main class="col-md-9 ml-sm-auto col-lg-10 px-4" role="main">
                <div class="row py-5">
                    <div class="col-md-12">
                        <h2>Resources</h2>
                    </div>
                </div>
                <div class="py-2">
                  <nav class="nav nav-pills nav-fill filter">
                  <button type="button" class="btn btn-outline-dark">Best Practices</button>
                  <button type="button" class="btn btn-outline-dark">Create a Listing</button>
                  <button type="button" class="btn btn-outline-dark">Connect to a Business</button>
                  <button type="button" class="btn btn-outline-dark">Other Resources</button>
                </nav>

                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="<?php echo FULL_URL ?>assets/images/placeholders/typing.jpg" alt="" class=" card-img-top">
                            <div class="card-body">
                                <p class="card-text">Metrics social media alpha value proposition buzz. Stealth interaction design early adopters seed money. Gamification pivot lean startup business-to-consumer twitter analytics. Prototype launch party responsive web design assets</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                      <button class="btn btn-sm btn-outline-secondary" type="button">Learn More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img alt="Thumbnail [100%x225]" class="card-img-top" data-holder-rendered="true" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Tmall.com" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_162e8329415%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_162e8329415%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.71875%22%20y%3D%22120.15%22%3ETmall.com%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" style="height: 225px; width: 100%; display: block;">
                            <div class="card-body">
                                <p class="card-text">Infrastructure handshake twitter prototype android seed round marketing customer early adopters scrum project social proof leverage. Direct mailing A/B testing MVP release technology metrics series A financing leverage accelerator bootstrapping user experience freemium crowdsource vesting period.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                      <button class="btn btn-sm btn-outline-secondary" type="button">Learn More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img alt="Thumbnail [100%x225]" class="card-img-top" data-holder-rendered="true" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Alibaba" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_162e8329415%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_162e8329415%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.71875%22%20y%3D%22120.15%22%3EAlibaba.com%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" style="height: 225px; width: 100%; display: block;">
                            <div class="card-body">
                                <p class="card-text">Early adopters infrastructure stock bandwidth direct mailing sales research & development equity hypotheses partnership growth hacking twitter churn rate ownership. Prototype angel investor deployment infrastructure pivot technology holy grail A/B testing.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                      <button class="btn btn-sm btn-outline-secondary" type="button">Learn More</button>
                                    </div>
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
