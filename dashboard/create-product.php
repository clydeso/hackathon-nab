
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
 
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script> 
    <script src="../assets/js/app/app.js"></script>   
    <script src="../assets/js/app/product.js"></script>    -->
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

    .inner-wrapper { 
        max-width: 1000px;
        width: 100%;
        margin: 0 auto;
    }

    .select-card {
        height: 200px;
        background-size: 200px auto;
        background-position: center;
        background-repeat: no-repeat;
        cursor: pointer;
        opacity: 0.5;
    }
    .select-card:hover,
    .select-card:active,
    .select-card:focus,
    .select-card.active {
        opacity: 1;
    }

    .hide { display: none; }

    .btn-file {
        position: relative;
        overflow: hidden;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }

    #img-upload{
        width: 100%;
        height: auto;
        min-height: 200px;
        border: 1px solid #ced4da
    }

    .fake-form .entry {
        margin-bottom: 10px;
    }
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
                            <div class="col-md-4 bs-wizard-step complete step-1">
                                <div class="text-center bs-wizard-stepnum">Select Your Marketplace</div>
                                <div class="progress"><div class="progress-bar"></div></div>
                                <a href="#" class="bs-wizard-dot"></a> 
                            </div> 
                            <div class="col-md-4 bs-wizard-step disabled step-2"><!-- complete -->
                                <div class="text-center bs-wizard-stepnum">Product Details</div>
                                <div class="progress"><div class="progress-bar"></div></div>
                                <a href="#" class="bs-wizard-dot"></a> 
                            </div>  
                            <div class="col-md-4 bs-wizard-step disabled step-3"><!-- active -->
                                <div class="text-center bs-wizard-stepnum">Review</div>
                                <div class="progress"><div class="progress-bar"></div></div>
                                <a href="#" class="bs-wizard-dot"></a> 
                            </div>
                        </div> 
                    </div>
                </div> 

                <!-- Steps  -->
                <div class="row py-5">
                    <div class="col-md-12"> 
                        <!-- Step1: Product Creation --> 
                        <div class="market-place row step-1 step"> 
                            <div class="col-md-12 mt-2">
                                <h5>Select Your Marketplace</h5>
                            </div>
                            <div class="col-md-4">
                                <div class="market-place-card-1 select-card shadow" style="background-image: url('<?php echo FULL_URL ?>/assets/images/tmall.jpg')" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?" data-placement="bottom"></div>
                            </div>
                            <div class="col-md-4">
                                <div class="market-place-card-2 select-card shadow" style="background-image: url('<?php echo FULL_URL ?>/assets/images/taoboa.png')"></div>
                            </div>
                             <div class="col-md-4">
                                <div class="market-place-card-2 select-card shadow" style="background-image: url('<?php echo FULL_URL ?>/assets/images/alibaba2.jpg')"></div>
                            </div>  
                            <div class="col-md-12 my-5 py-3" style="border-top: 1px solid #f5f5f5">
                                <button type="button" class="btn btn-primary float-right btn-next-step">Ready to Create</button> 
                            </div>
                        </div>

                        <!-- Step2: Product Creation --> 
                        <div class="product-creation hide step-2 step"> 
                            <div class="inner-wrapper row"> 
                                <div class="col-md-12 mt-2 mb-2">
                                    <h5>Create Your Product</h5>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">  
                                        <img id="img-upload"/>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <span class="btn btn-default btn-file">
                                                    Upload product images <span data-feather="info"></span> <input type="file" id="imgInp">
                                                </span>
                                            </span>
                                            <input type="hidden" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">           
                                        <div class="col-md-12">                            
                                            <div class="form-group">
                                                <label for="p_brand">Brand Name <span data-feather="info"></span></label>
                                                <input type="text" class="form-control" id="p_brand" placeholder="XiaoMate">
                                            </div>
                                        </div>
                                        <div class="col-md-12">  
                                            <div class="form-group">
                                                <label for="p_name">Product Name <span data-feather="info"></span></label>
                                                <input type="text" class="form-control" id="p_name" placeholder="Worst Keyboard Ever">
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="row">    
                                        <div class="col-md-6">                                  
                                            <div class="form-group">
                                                <label for="p_price">Product Price <span data-feather="info"></span></label> 
                                                 <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">AUD</span>
                                                    </div>
                                                    <input type="text" class="form-control" id="p_price" placeholder="4.20" value="">
                                                </div> 
                                            </div> 
                                        </div>
                                        <div class="col-md-6">                                  
                                            <div class="form-group">
                                                <label for="p_price_yuan">Conversion to YUAN (¥)</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">¥</span>
                                                    </div>
                                                    <input type="text" class="form-control" id="p_price_yuan" placeholder="" value="" disabled>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="row">    
                                        <div class="col-md-6">                                  
                                            <div class="form-group">
                                                <label for="p_price">Product Description <span data-feather="info"></span></label> 
                                                 <div class="input-group">
                                                    <textarea class="form-control" id="p_description_en" placeholder="" rows="5"></textarea>
                                                </div> 
                                            </div> 
                                        </div>
                                        <div class="col-md-6">                                  
                                            <div class="form-group">
                                                <label for="p_price_yuan">Translated Product Description </label>
                                                <div class="input-group"> 
                                                    <textarea class="form-control" id="p_description_cn" placeholder="" rows="5"></textarea>
                                                </div> 
                                            </div> 
                                        </div>
                                        <div class="col-md-12">   
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="p_require_translator">
                                                <label class="form-check-label" for="p_require_translator">Request a Translator</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row"> 
                                        <div class="col-md-12"> 
                                            <div class="form-group">
                                                <label for="p_html_content">HTML Content </label>
                                                <div class="input-group"> 
                                                    <textarea class="form-control" id="p_html_content" placeholder="" rows="10"></textarea>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div> 
                                    <div class="row"> 
                                        <div class="control-group col-md-12" id="fields">
                                            <label class="control-label" for="field1">Additional Custom Fields <span data-feather="info"></span></label>
                                            <div class="controls">
                                                <div class="fake-form"> 
                                                    <div class="entry input-group col-xs-3">
                                                        <input class="form-control" name="fields[]" type="text" placeholder="'Field Name', 'Field Value'" />
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-success btn-add" type="button">
                                                                <span data-feather="plus"></span>
                                                            </button>
                                                        </span>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div> 
                            <!-- <product-creation></product-creation> -->

                            <div class="col-md-12 my-5 py-3" style="border-top: 1px solid #f5f5f5">
                                <button type="button" class="btn btn-primary float-left btn-back-step">Back to Marketplace</button> 
                                <button type="button" class="btn btn-primary float-right btn-next-step">Ready to Review</button> 
                            </div>
                        </div>

                        <!-- Step3: Product Creation --> 
                        <div class="product-review hide step-3 step">
                            step 3
                            <!-- <product-review></product-review> -->
                            <div class="col-md-12 my-5 py-3" style="border-top: 1px solid #f5f5f5">
                                <button type="button" class="btn btn-primary float-left btn-back-step">Back to Create</button> 
                                <button type="button" class="btn btn-primary float-right btn-next-step">Save and Continue</button> 
                            </div>
                        </div>
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
        // Step #
        var process_step = 1;
        var product = [];

        // Navigation
        jQuery('.btn-next-step').click(function(){ 
            process_step = process_step + 1;
            jQuery('.step').addClass('hide');
            jQuery('.step-'+process_step).removeClass('hide');

            // Wizard
            count = 1;
            jQuery('.bs-wizard-step').removeClass('disabled').removeClass('complete'); 
            while (process_step >= count) { 
                jQuery('.bs-wizard-step.step-'+count).addClass('complete');
                count = count + 1;
            }
        }); 
        jQuery('.btn-back-step').click(function(){ 
            process_step = process_step - 1;
            jQuery('.step').addClass('hide');
            jQuery('.step-'+process_step).removeClass('hide');

            // Wizard
            jQuery('.bs-wizard-step').removeClass('disabled').removeClass('complete'); 
            count = 1;
            while (process_step >= count) { 
                jQuery('.bs-wizard-step.step-'+count).addClass('complete');
                count = count + 1;
            }
        });

        // Step 1
        jQuery('.step-1 .select-card').on('click', function(){
            jQuery('.step-1 .select-card').removeClass('active');
            jQuery(this).addClass('active');
        }); 

        jQuery(document).on('change', '.btn-file :file', function() {
            var input = jQuery(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [label]);
        });

        jQuery('.btn-file :file').on('fileselect', function(event, label) {
            var input = jQuery(this).parents('.input-group').find(':text'),
                log = label;
            
            if (input.length) {
                input.val(log);
            } else {
                if (log) console.log(log);
            } 
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    jQuery('#img-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        jQuery("#imgInp").change(function(){
            readURL(this);
        });  

        jQuery('#p_price').on('change', function(){
            jQuery('#p_price_yuan').val(jQuery('#p_price').val()*4.82);
        })

        jQuery(document).on('click', '.btn-add', function(e) {
                e.preventDefault();
                var controlForm = jQuery('.controls .fake-form:first'),
                    currentEntry = jQuery(this).parents('.entry:first'),
                    newEntry = jQuery(currentEntry.clone()).appendTo(controlForm);

                newEntry.find('input').val('');
                controlForm.find('.entry:not(:last) .btn-add')
                    .removeClass('btn-add').addClass('btn-remove')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('<span data-feather="plus"></span>');
                feather.replace();
            }).on('click', '.btn-remove', function(e) {
                jQuery(this).parents('.entry:first').remove();

                e.preventDefault();
                return false;
            });
    </script>
</body>
</html>
