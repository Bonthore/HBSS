<?php include "../core/core.php";
if(isset($_GET["q"]) && !empty($_GET["q"])){
    $search = $_GET["q"];
}
else $search = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/png">

    <title>Bracket Responsive Bootstrap3 Admin</title>

    <link href="../assets/css/style.default.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../assets/js/html5shiv.js"></script>
    <script src="../assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Preloader -->
<section>

    <?php include "../core/leftpanel.php"; ?>

    <div class="mainpanel">

        <?php include "../core/header.php"; ?>

        <div class="pageheader">
            <h2><i class="fa fa-search"></i> Search Results <span>Subtitle goes here...</span></h2>
        </div>

        <div class="contentpanel">

            <div class="row">
                <div class="col-sm-4 col-md-3">
                    <h4 class="subtitle mb5">Search:</h4>
                    <form action="index.php" method="get">
                    <input type="text" value="<?php echo $search; ?>" class="form-control" name="q"/>
                        <input type="submit" value="Submit" hidden>
                    </form>
                    <div class="mb20"></div>

                    <h4 class="subtitle mb5">Type</h4>
                    <select class="form-control chosen-select" data-placeholder="Choose Media Type...">
                        <option value=""></option>
                        <option value="TV">TV</option>
                        <option value="Movie">Movie</option>
                        <option value="OVA">OVA</option>
                        <option value="ONA">ONA</option>
                        <option value="Manga">Manga</option>
                    </select>

                    <div class="mb20"></div>

                    <h4 class="subtitle mb5">Release Date</h4>
                    <div id="slider" class="slider-primary mb20"></div>

                    <div class="mb20"></div>

                    <h4 class="subtitle mb5">Age Rating</h4>
                    <ul class="nav nav-sr">
                        <li><a href="#"><i class="glyphicon glyphicon-file"></i> G</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-picture"></i> PG</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-facetime-video"></i> PG13</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-music"></i> R17+</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-music"></i> R18+</a></li>
                    </ul>

                    <div class="mb20"></div>

                    <h4 class="subtitle mb5">Date Created</h4>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>

                    <br />

                </div><!-- col-sm-4 -->
                <div class="col-sm-8 col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <ul class="pagination nomargin pull-right">
                                <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                            <h4 class="panel-title">Search results for "<?php echo $search; ?>"</h4>
                            <p>About 1,370 results (0.13 seconds)</p>
                        </div><!-- panel-heading -->
                        <div class="panel-body">

                            <div class="results-list">

                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img alt="" src="images/photos/media1.jpg" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="filename text-primary">Pizza.png</h4>
                                        <small class="text-muted">Type: JPG Image</small><br />
                                        <small class="text-muted">Created: January 10, 2014 at 7:30am</small><br />
                                        <small class="text-muted">Modified: January 13, 2014 at 11:30am</small>
                                    </div>
                                </div>

                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img alt="" src="images/photos/media-doc.png" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="filename text-primary">MyDocument.pdf</h4>
                                        <small class="text-muted">Type: PDF Document</small><br />
                                        <small class="text-muted">Created: January 13, 2014 at 7:30am</small><br />
                                        <small class="text-muted">Modified: January 13, 2014 at 11:30am</small>
                                    </div>
                                </div>

                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img alt="" src="images/photos/media2.png" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="filename text-primary">SwimmingPool.png</h4>
                                        <small class="text-muted">Type: PNG Image</small><br />
                                        <small class="text-muted">Created: January 10, 2014 at 7:30am</small><br />
                                        <small class="text-muted">Modified: January 13, 2014 at 11:30am</small>
                                    </div>
                                </div>

                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img alt="" src="images/photos/media-audio.png" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="filename text-primary">WreckingBall.mp3</h4>
                                        <small class="text-muted">Type: MP3 Audio</small><br />
                                        <small class="text-muted">Created: January 13, 2014 at 7:30am</small><br />
                                        <small class="text-muted">Modified: January 13, 2014 at 11:30am</small>
                                    </div>
                                </div>

                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img alt="" src="images/photos/media3.png" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="filename text-primary">Painting.mp4</h4>
                                        <small class="text-muted">Type: MP4 Video</small><br />
                                        <small class="text-muted">Created: January 13, 2014 at 7:30am</small><br />
                                        <small class="text-muted">Modified: January 13, 2014 at 11:30am</small>
                                    </div>
                                </div>

                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img alt="" src="images/photos/media1.jpg" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="filename text-primary">Pizza.png</h4>
                                        <small class="text-muted">Type: JPG Image</small><br />
                                        <small class="text-muted">Created: January 10, 2014 at 7:30am</small><br />
                                        <small class="text-muted">Modified: January 13, 2014 at 11:30am</small>
                                    </div>
                                </div>

                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img alt="" src="images/photos/media-doc.png" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="filename text-primary">MyDocument.pdf</h4>
                                        <small class="text-muted">Type: PDF Document</small><br />
                                        <small class="text-muted">Created: January 13, 2014 at 7:30am</small><br />
                                        <small class="text-muted">Modified: January 13, 2014 at 11:30am</small>
                                    </div>
                                </div>

                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img alt="" src="images/photos/media2.png" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="filename text-primary">SwimmingPool.png</h4>
                                        <small class="text-muted">Type: PNG Image</small><br />
                                        <small class="text-muted">Created: January 10, 2014 at 7:30am</small><br />
                                        <small class="text-muted">Modified: January 13, 2014 at 11:30am</small>
                                    </div>
                                </div>

                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img alt="" src="images/photos/media-audio.png" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="filename text-primary">WreckingBall.mp3</h4>
                                        <small class="text-muted">Type: MP3 Audio</small><br />
                                        <small class="text-muted">Created: January 13, 2014 at 7:30am</small><br />
                                        <small class="text-muted">Modified: January 13, 2014 at 11:30am</small>
                                    </div>
                                </div>

                            </div><!-- results-list -->

                        </div><!-- panel-body -->
                    </div><!-- panel -->
                </div><!-- col-sm-8 -->
            </div><!-- row -->

        </div>

    </div><!-- mainpanel -->

    <div class="rightpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified">
            <li class="active"><a href="#rp-alluser" data-toggle="tab"><i class="fa fa-users"></i></a></li>
            <li><a href="#rp-favorites" data-toggle="tab"><i class="fa fa-heart"></i></a></li>
            <li><a href="#rp-history" data-toggle="tab"><i class="fa fa-clock-o"></i></a></li>
            <li><a href="#rp-settings" data-toggle="tab"><i class="fa fa-gear"></i></a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="rp-alluser">
                <h5 class="sidebartitle">Online Users</h5>
                <ul class="chatuserlist">
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="images/photos/userprofile.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Eileen Sideways</strong>
                                <small>Los Angeles, CA</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="images/photos/user1.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <span class="pull-right badge badge-danger">2</span>
                                <strong>Zaham Sindilmaca</strong>
                                <small>San Francisco, CA</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="images/photos/user2.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Nusja Nawancali</strong>
                                <small>Bangkok, Thailand</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="images/photos/user3.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Renov Leongal</strong>
                                <small>Cebu City, Philippines</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="images/photos/user4.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Weno Carasbong</strong>
                                <small>Tokyo, Japan</small>
                            </div>
                        </div><!-- media -->
                    </li>
                </ul>

                <div class="mb30"></div>

                <h5 class="sidebartitle">Offline Users</h5>
                <ul class="chatuserlist">
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="images/photos/user5.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Eileen Sideways</strong>
                                <small>Los Angeles, CA</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="images/photos/user2.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Zaham Sindilmaca</strong>
                                <small>San Francisco, CA</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="images/photos/user3.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Nusja Nawancali</strong>
                                <small>Bangkok, Thailand</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="images/photos/user4.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Renov Leongal</strong>
                                <small>Cebu City, Philippines</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="images/photos/user5.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Weno Carasbong</strong>
                                <small>Tokyo, Japan</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="images/photos/user4.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Renov Leongal</strong>
                                <small>Cebu City, Philippines</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="images/photos/user5.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Weno Carasbong</strong>
                                <small>Tokyo, Japan</small>
                            </div>
                        </div><!-- media -->
                    </li>
                </ul>
            </div>
            <div class="tab-pane" id="rp-favorites">
                <h5 class="sidebartitle">Favorites</h5>
                <ul class="chatuserlist">
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="images/photos/user2.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Eileen Sideways</strong>
                                <small>Los Angeles, CA</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="images/photos/user1.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Zaham Sindilmaca</strong>
                                <small>San Francisco, CA</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="images/photos/user3.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Nusja Nawancali</strong>
                                <small>Bangkok, Thailand</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="images/photos/user4.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Renov Leongal</strong>
                                <small>Cebu City, Philippines</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="images/photos/user5.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Weno Carasbong</strong>
                                <small>Tokyo, Japan</small>
                            </div>
                        </div><!-- media -->
                    </li>
                </ul>
            </div>
            <div class="tab-pane" id="rp-history">
                <h5 class="sidebartitle">History</h5>
                <ul class="chatuserlist">
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="images/photos/user4.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Eileen Sideways</strong>
                                <small>Hi hello, ctc?... would you mind if I go to your...</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="images/photos/user2.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Zaham Sindilmaca</strong>
                                <small>This is to inform you that your product that we...</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="images/photos/user3.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Nusja Nawancali</strong>
                                <small>Are you willing to have a long term relat...</small>
                            </div>
                        </div><!-- media -->
                    </li>
                </ul>
            </div>
            <div class="tab-pane pane-settings" id="rp-settings">

                <h5 class="sidebartitle mb20">Settings</h5>
                <div class="form-group">
                    <label class="col-xs-8 control-label">Show Offline Users</label>
                    <div class="col-xs-4 control-label">
                        <div class="toggle toggle-success"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-8 control-label">Enable History</label>
                    <div class="col-xs-4 control-label">
                        <div class="toggle toggle-success"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-8 control-label">Show Full Name</label>
                    <div class="col-xs-4 control-label">
                        <div class="toggle-chat1 toggle-success"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-8 control-label">Show Location</label>
                    <div class="col-xs-4 control-label">
                        <div class="toggle toggle-success"></div>
                    </div>
                </div>

            </div><!-- tab-pane -->

        </div><!-- tab-content -->
    </div><!-- rightpanel -->

</section>


<script src="../assets/js/jquery-1.10.2.min.js"></script>
<script src="../assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/modernizr.min.js"></script>
<script src="../assets/js/jquery.sparkline.min.js"></script>
<script src="../assets/js/toggles.min.js"></script>
<script src="../assets/js/retina.min.js"></script>
<script src="../assets/js/jquery.cookies.js"></script>

<script src="../assets/js/jquery-ui-1.10.3.min.js"></script>
<script src="../assets/js/chosen.jquery.min.js"></script>

<script src="../assets/js/custom.js"></script>
<script>
    jQuery(document).ready(function() {

        // Basic Slider
        jQuery('#slider').slider({
            range: "min",
            max: 100,
            value: 50
        });

        // Chosen Select
        jQuery(".chosen-select").chosen({'width':'100%','white-space':'nowrap'});

        // Date Picker
        jQuery('#datepicker').datepicker();

    });
</script>

</body>
</html>
