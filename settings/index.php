<?php
include "../core/core.php";
?>
<!DOCTYPE html>
<html lang="en" style="overflow: scroll;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/png">

    <title>Bracket Responsive Bootstrap3 Admin</title>

    <link rel="stylesheet" href="../assets/css/style.default.css" />

    <link rel="stylesheet" href="../assets/css/bootstrap-fileupload.min.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap-timepicker.min.css" />
    <link rel="stylesheet" href="../assets/css/jquery.tagsinput.css" />
    <link rel="stylesheet" href="../assets/css/colorpicker.css" />
    <link rel="stylesheet" href="../assets/css/dropzone.css" />


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../assets/js/html5shiv.js"></script>
    <script src="../assets/js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Preloader -->

<section>
    <?php
    if(isset($_GET["action"]) && $_GET["action"]== "remove" && isset($_GET["success"]) && $_GET["success"]== "true") {
    ?>
        <div class="alert alert-success" style="
    position: fixed;
    top: 60px;
    right: 10px;
    z-index: 1000;
">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <strong>Done!</strong> We successfully removed your authentication key.
        </div>
        <?php
    }
    elseif(isset($_GET["action"]) && $_GET["action"]== "add" && isset($_GET["success"]) && $_GET["success"]== "true"){?>
    <div class="alert alert-success" style="
    position: fixed;
    top: 60px;
    right: 10px;
    z-index: 1000;
">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>Done!</strong> We successfully added your authentication key.
    </div>
    <?php } ?>
    <?php include "../core/leftpanel.php"; ?>

    <div class="mainpanel">

        <?php include "../core/header.php"; ?>

        <div class="pageheader">
            <h2><i class="fa fa-cog"></i> Account Settings <span>Here, you can change your settings and authenticate your account.</span></h2>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="/">Dashboard</a></li>
                    <li class="active">Settings</li>
                </ol>
            </div>
        </div>

        <div class="contentpanel">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-btns">
                        <a href="#" class="minimize">&minus;</a>
                    </div>
                    <h4 class="panel-title">Authenticate with hummingbird.</h4>


                        <?php
                        $conn = @mysqli_connect('localhost', 'root', 'root', 'anime');
                        $query = "SELECT `authkey` FROM `users` WHERE id = '". $user["id"] ."'";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_array($result);
                        if ($row[0] == "" || empty($row[0])) {
                            ?>
                    <p>Input your humminbird password to retrieve your authentication key, this is required for some features such as library updates.</p>
                </div>
                <div class="panel-body panel-body-nopadding">

                <form action="getauthkey.php" name="password" method="post" class="form-horizontal form-bordered">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Authenticate</label>
                                <div class="col-sm-6">
                                        <input type="password" name="password" id="password" placeholder="Password" class="form-control" />
                                        <span class="help-block">Input your Hummingbird password to get your authentication key which is required for some features.</span>
                                </div>
                            </div>


                </div><!-- panel-body -->

                <div class="panel-footer">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <button class="btn btn-primary" type="submit">Submit</button>&nbsp;
                            <button class="btn btn-default">Cancel</button>
                        </div>
                    </div>
                </div><!-- panel-footer -->
                </form>
                            <?php
                        }
                        else{
                            ?>
                <p>Your accound is successfully authenticated, Your authentication key is:</p>
            </div>
            <div class="panel-body panel-body-nopadding">

            <form action="removeauthkey.php" class="form-horizontal form-bordered">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="disabledinput">Key:</label>
                                <div class="col-sm-6">
                                    <input type="text" value="<?php echo mb_strimwidth($user["authkey"], 1, 60, "..."); ?>" id="readonlyinput" class="form-control" readonly="readonly" /></div>
                            </div>
            </div><!-- panel-body -->
            <div class="panel-footer">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <button class="btn btn-danger" type="submit">Remove</button>
                    </div>
                </div>
            </div><!-- panel-footer -->
            </form>
                            <?php
                        }
                        ?>
            </div><!-- panel -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-btns">
                    <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">Change Your Settings.</h4>

                <p>Here you can change your Hummingbird account settings.</p>
            </div>
            <div class="panel-body panel-body-nopadding">

                <form action="getauthkey.php" name="password" method="post" class="form-horizontal form-bordered">

                    <div class="form-group">
                        <label class="col-sm-3 control-label">About:</label>
                        <div class="col-sm-6">
                            <input type="text" placeholder="<?php echo $user["about"]; ?>" value="<?php echo $user["about"]; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Bio:</label>
                        <div class="col-sm-6">
                            <input type="text" placeholder="<?php echo $user["bio"]; ?>" value="<?php echo $user["bio"]; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Show NSFW content:</label>
                        <div class="col-sm-6">
                            <select id="fruits" class="form-control" required="">
                                <?php
                                if($user["show_adult_content"]==1){
                                    ?>
                                    <option value="1">True</option>
                                    <option value="0">False</option>
                                <?php
                                }
                                elseif ($user["show_adult_content"]==0){
                                    ?>
                                    <option value="0">False</option>
                                    <option value="1">True</option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Title Lang Pref:</label>
                        <div class="col-sm-6">
                            <input type="text" placeholder="<?php echo $user["title_language_preference"]; ?>" value="<?php echo $user["title_language_preference"]; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Manual playlist:</label>
                        <div class="col-sm-6">
                            <input type="text" placeholder="<?php echo $user["playlist"]; ?>" value="<?php echo $user["playlist"]; ?>" class="form-control">
                        </div>
                    </div>



            </div><!-- panel-body -->

            <div class="panel-footer">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <button class="btn btn-primary" type="submit">Submit</button>&nbsp;
                        <button class="btn btn-default">Cancel</button>
                    </div>
                </div>
            </div><!-- panel-footer -->
            </form>

</div>










        </div><!-- contentpanel -->
    </div><!-- mainpanel -->

<?php include "../core/rightpanel.php" ?>

</section>




<script src="../assets/js/jquery-1.10.2.min.js"></script>
<script src="../assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="../assets/js/jquery-ui-1.10.3.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/modernizr.min.js"></script>
<script src="../assets/js/jquery.sparkline.min.js"></script>
<script src="../assets/js/toggles.min.js"></script>
<script src="../assets/js/retina.min.js"></script>
<script src="../assets/js/jquery.cookies.js"></script>

<script src="../assets/js/jquery.autogrow-textarea.js"></script>
<script src="../assets/js/bootstrap-fileupload.min.js"></script>
<script src="../assets/js/bootstrap-timepicker.min.js"></script>
<script src="../assets/js/jquery.maskedinput.min.js"></script>
<script src="../assets/js/jquery.tagsinput.min.js"></script>
<script src="../assets/js/jquery.mousewheel.js"></script>
<script src="../assets/js/chosen.jquery.min.js"></script>
<script src="../assets/js/dropzone.min.js"></script>
<script src="../assets/js/colorpicker.js"></script>


<script src="../assets/js/custom.js"></script>

<script>
    jQuery(document).ready(function(){

        // Chosen Select
        jQuery(".chosen-select").chosen({'width':'100%','white-space':'nowrap'});

        // Tags Input
        jQuery('#tags').tagsInput({width:'auto'});

        // Textarea Autogrow
        jQuery('#autoResizeTA').autogrow();

        // Color Picker
        if(jQuery('#colorpicker').length > 0) {
            jQuery('#colorSelector').ColorPicker({
                onShow: function (colpkr) {
                    jQuery(colpkr).fadeIn(500);
                    return false;
                },
                onHide: function (colpkr) {
                    jQuery(colpkr).fadeOut(500);
                    return false;
                },
                onChange: function (hsb, hex, rgb) {
                    jQuery('#colorSelector span').css('backgroundColor', '#' + hex);
                    jQuery('#colorpicker').val('#'+hex);
                }
            });
        }

        // Color Picker Flat Mode
        jQuery('#colorpickerholder').ColorPicker({
            flat: true,
            onChange: function (hsb, hex, rgb) {
                jQuery('#colorpicker3').val('#'+hex);
            }
        });

        // Date Picker
        jQuery('#datepicker').datepicker();

        jQuery('#datepicker-inline').datepicker();

        jQuery('#datepicker-multiple').datepicker({
            numberOfMonths: 3,
            showButtonPanel: true
        });

        // Spinner
        var spinner = jQuery('#spinner').spinner();
        spinner.spinner('value', 0);

        // Input Masks
        jQuery("#date").mask("99/99/9999");
        jQuery("#phone").mask("(999) 999-9999");
        jQuery("#ssn").mask("999-99-9999");

        // Time Picker
        jQuery('#timepicker').timepicker({defaultTIme: false});
        jQuery('#timepicker2').timepicker({showMeridian: false});
        jQuery('#timepicker3').timepicker({minuteStep: 15});


    });
</script>


</body>
</html>
