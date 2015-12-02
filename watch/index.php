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
    <?php include "../core/rightpanel.php" ?>
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