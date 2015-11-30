<?php
include "../core/core.php";
?>
<html lang="en" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/png">
    <title>Bracket Responsive Bootstrap3 Admin</title>
    <link href="/assets/css/style.default.css" rel="stylesheet">
    <link href="/assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="/assets/css/jquery.datatables.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
    <style id="/assets/holderjs-style" type="text/css">.holderjs-fluid {font-size:16px;font-weight:bold;text-align:center;font-family:sans-serif;margin:0}</style>
</head>
<body style="overflow: visible;">
<!-- Preloader -->
<div id="preloader" style="display: none;">
    <div id="status" style="display: none;"><i class="fa fa-spinner fa-spin"></i></div>
</div>
<section>
    <?php include "../core/leftpanel.php";
    ?>
    <!-- leftpanel -->
    <div class="mainpanel">
        <?php include "../core/header.php";
        ?>
        <!-- headerbar -->
        <div class="pageheader">
            <h2> <i class="fa fa-play"></i> Watch <span>Subtitle goes here...</span></h2>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="index.html">Dashboard</a></li>
                    <li class="active">Watch</li>
                </ol>
            </div>
        </div>
        <div class="contentpanel">
            <div class="row">
                <div class="tab-pane" id="events">
                    <div class="events">
                        <div class="row">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <div id="table2_wrapper" class="dataTables_wrapper" role="grid">
                                            <table class="table dataTable" id="table2" aria-describedby="table2_info">
                                                <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="table2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Title: activate to sort column descending" style="width: 200px;">Title</th>
                                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="table2" rowspan="1" colspan="1" aria-label="Progress: activate to sort column ascending" style="width: 200px;">Show Type</th>
                                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="table2" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 200px;">Age Rating</th>
                                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="table2" rowspan="1" colspan="1" aria-label="Score: activate to sort column ascending" style="width: 100px;">Number of Episodes</th>
                                                </tr>
                                                </thead>
                                                <tbody role="alert" aria-live="polite" aria-relevant="all">
                                                <?php
                                                $query = "SELECT * FROM `anime` WHERE `status` = 'Currently Airing' ";
                                                $result = mysqli_query($conn, $query);
                                                while ($row = mysqli_fetch_array($result)) {?>
                                                    <tr class="gradeA odd">
                                                        <td class=" sorting_1"><img src="<?php echo $row["cover-image"] ?>" alt="<?php echo $row["title-eng"] ?> height="60" width="60">&nbsp;<a href="/watch/watch.php?id=<?php echo $row["id"];?>">&nbsp;<?php echo $row["title-eng"];?></a></td>
                                                        <td class=" "><?php echo $row["show-type"]; ?></td>
                                                        <td class=" "><?php echo $row["age-rating"]; ?></td>
                                                        <td class="center "><?php echo $row["episode-count"]; ?></td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- table-responsive -->
                                </div>
                                <!-- panel-body -->
                            </div>
                        </div>
                    </div>
                    <!-- events -->
                </div>

            </div>
            <!-- row -->
        </div>
        <!-- contentpanel -->
    </div>
    <!-- mainpanel -->
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
                                <img alt="" src="/assets/images/photos/userprofile.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Eileen Sideways</strong>
                                <small>Los Angeles, CA</small>
                            </div>
                        </div>
                        <!-- media -->
                    </li>
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="/assets/images/photos/user1.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <span class="pull-right badge badge-danger">2</span>
                                <strong>Zaham Sindilmaca</strong>
                                <small>San Francisco, CA</small>
                            </div>
                        </div>
                        <!-- media -->
                    </li>
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="/assets/images/photos/user2.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Nusja Nawancali</strong>
                                <small>Bangkok, Thailand</small>
                            </div>
                        </div>
                        <!-- media -->
                    </li>
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="/assets/images/photos/user3.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Renov Leongal</strong>
                                <small>Cebu City, Philippines</small>
                            </div>
                        </div>
                        <!-- media -->
                    </li>
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="/assets/images/photos/user4.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Weno Carasbong</strong>
                                <small>Tokyo, Japan</small>
                            </div>
                        </div>
                        <!-- media -->
                    </li>
                </ul>
                <div class="mb30"></div>
                <h5 class="sidebartitle">Offline Users</h5>
                <ul class="chatuserlist">
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="/assets/images/photos/user5.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Eileen Sideways</strong>
                                <small>Los Angeles, CA</small>
                            </div>
                        </div>
                        <!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="/assets/images/photos/user2.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Zaham Sindilmaca</strong>
                                <small>San Francisco, CA</small>
                            </div>
                        </div>
                        <!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="/assets/images/photos/user3.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Nusja Nawancali</strong>
                                <small>Bangkok, Thailand</small>
                            </div>
                        </div>
                        <!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="/assets/images/photos/user4.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Renov Leongal</strong>
                                <small>Cebu City, Philippines</small>
                            </div>
                        </div>
                        <!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="/assets/images/photos/user5.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Weno Carasbong</strong>
                                <small>Tokyo, Japan</small>
                            </div>
                        </div>
                        <!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="/assets/images/photos/user4.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Renov Leongal</strong>
                                <small>Cebu City, Philippines</small>
                            </div>
                        </div>
                        <!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="/assets/images/photos/user5.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Weno Carasbong</strong>
                                <small>Tokyo, Japan</small>
                            </div>
                        </div>
                        <!-- media -->
                    </li>
                </ul>
            </div>
            <div class="tab-pane" id="rp-favorites">
                <h5 class="sidebartitle">Favorites</h5>
                <ul class="chatuserlist">
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="/assets/images/photos/user2.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Eileen Sideways</strong>
                                <small>Los Angeles, CA</small>
                            </div>
                        </div>
                        <!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="/assets/images/photos/user1.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Zaham Sindilmaca</strong>
                                <small>San Francisco, CA</small>
                            </div>
                        </div>
                        <!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="/assets/images/photos/user3.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Nusja Nawancali</strong>
                                <small>Bangkok, Thailand</small>
                            </div>
                        </div>
                        <!-- media -->
                    </li>
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="/assets/images/photos/user4.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Renov Leongal</strong>
                                <small>Cebu City, Philippines</small>
                            </div>
                        </div>
                        <!-- media -->
                    </li>
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="/assets/images/photos/user5.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Weno Carasbong</strong>
                                <small>Tokyo, Japan</small>
                            </div>
                        </div>
                        <!-- media -->
                    </li>
                </ul>
            </div>
            <div class="tab-pane" id="rp-history">
                <h5 class="sidebartitle">History</h5>
                <ul class="chatuserlist">
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="/assets/images/photos/user4.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Eileen Sideways</strong>
                                <small>Hi hello, ctc?... would you mind if I go to your...</small>
                            </div>
                        </div>
                        <!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="/assets/images/photos/user2.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Zaham Sindilmaca</strong>
                                <small>This is to inform you that your product that we...</small>
                            </div>
                        </div>
                        <!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="/assets/images/photos/user3.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Nusja Nawancali</strong>
                                <small>Are you willing to have a long term relat...</small>
                            </div>
                        </div>
                        <!-- media -->
                    </li>
                </ul>
            </div>
            <div class="tab-pane pane-settings" id="rp-settings">
                <h5 class="sidebartitle mb20">Settings</h5>
                <div class="form-group">
                    <label class="col-xs-8 control-label">Show Offline Users</label>
                    <div class="col-xs-4 control-label">
                        <div class="toggle toggle-success" style="height: 20px; width: 50px;">
                            <div class="toggle-slide active">
                                <div class="toggle-inner" style="width: 80px; margin-left: 0px;">
                                    <div class="toggle-on active" style="height: 20px; width: 40px; text-align: center; text-indent: -10px; line-height: 20px;">ON</div>
                                    <div class="toggle-blob" style="height: 20px; width: 20px; margin-left: -10px;"></div>
                                    <div class="toggle-off" style="height: 20px; width: 40px; margin-left: -10px; text-align: center; text-indent: 10px; line-height: 20px;">OFF</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-8 control-label">Enable History</label>
                    <div class="col-xs-4 control-label">
                        <div class="toggle toggle-success" style="height: 20px; width: 50px;">
                            <div class="toggle-slide active">
                                <div class="toggle-inner" style="width: 80px; margin-left: 0px;">
                                    <div class="toggle-on active" style="height: 20px; width: 40px; text-align: center; text-indent: -10px; line-height: 20px;">ON</div>
                                    <div class="toggle-blob" style="height: 20px; width: 20px; margin-left: -10px;"></div>
                                    <div class="toggle-off" style="height: 20px; width: 40px; margin-left: -10px; text-align: center; text-indent: 10px; line-height: 20px;">OFF</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-8 control-label">Show Full Name</label>
                    <div class="col-xs-4 control-label">
                        <div class="toggle-chat1 toggle-success" style="height: 20px; width: 50px;">
                            <div class="toggle-slide">
                                <div class="toggle-inner" style="width: 80px; margin-left: -30px;">
                                    <div class="toggle-on" style="height: 20px; width: 40px; text-align: center; text-indent: -10px; line-height: 20px;">ON</div>
                                    <div class="toggle-blob" style="height: 20px; width: 20px; margin-left: -10px;"></div>
                                    <div class="toggle-off active" style="height: 20px; width: 40px; margin-left: -10px; text-align: center; text-indent: 10px; line-height: 20px;">OFF</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-8 control-label">Show Location</label>
                    <div class="col-xs-4 control-label">
                        <div class="toggle toggle-success" style="height: 20px; width: 50px;">
                            <div class="toggle-slide active">
                                <div class="toggle-inner" style="width: 80px; margin-left: 0px;">
                                    <div class="toggle-on active" style="height: 20px; width: 40px; text-align: center; text-indent: -10px; line-height: 20px;">ON</div>
                                    <div class="toggle-blob" style="height: 20px; width: 20px; margin-left: -10px;"></div>
                                    <div class="toggle-off" style="height: 20px; width: 40px; margin-left: -10px; text-align: center; text-indent: 10px; line-height: 20px;">OFF</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tab-pane -->
        </div>
        <!-- tab-content -->
    </div>
    <!-- rightpanel -->
</section>
<script src="/assets/js/jquery-1.10.2.min.js"></script>
<script src="/assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/modernizr.min.js"></script>
<script src="/assets/js/jquery.sparkline.min.js"></script>
<script src="/assets/js/toggles.min.js"></script>
<script src="/assets/js/retina.min.js"></script>
<script src="/assets/js/jquery.cookies.js"></script>
<script src="/assets/js/jquery.prettyPhoto.js"></script>
<script src="/assets/js/holder.js"></script>
<script src="/assets/js/jquery.datatables.min.js"></script>
<script src="/assets/js/chosen.jquery.min.js"></script>
<script src="/assets/js/custom.js"></script>
<script>
    jQuery(document).ready(function(){

        jQuery("a[rel^='prettyPhoto']").prettyPhoto();

        //Replaces data-rel attribute to rel.
        //We use data-rel because of w3c validation issue
        jQuery('a[data-rel]').each(function() {
            jQuery(this).attr('rel', jQuery(this).data('rel'));
        });

    });
</script>
<script>
    jQuery(document).ready(function() {

        jQuery('#table1').dataTable();

        jQuery('#table2').dataTable({
            "sPaginationType": "full_numbers"
        });

        // Chosen Select
        jQuery("select").chosen({
            'min-width': '100px',
            'white-space': 'nowrap',
            disable_search_threshold: 10
        });

        // Delete row in a table
        jQuery('.delete-row').click(function(){
            var c = confirm("Continue delete?");
            if(c)
                jQuery(this).closest('tr').fadeOut(function(){
                    jQuery(this).remove();
                });

            return false;
        });

        // Show aciton upon row hover
        jQuery('.table-hidaction tbody tr').hover(function(){
            jQuery(this).find('.table-action-hide a').animate({opacity: 1});
        },function(){
            jQuery(this).find('.table-action-hide a').animate({opacity: 0});
        });


    });
</script>
</body>
</html>