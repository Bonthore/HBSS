<?php
include $_SERVER["DOCUMENT_ROOT"] ."/core/core.php";
?>
<!DOCTYPE html>
<html style="overflow: scroll;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/png">

    <title>Bracket Responsive Bootstrap3 Admin</title>

    <link href="/assets/css/style.default.css" rel="stylesheet">
    <link href="/assets/css/prettyPhoto.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/assets/js/html5shiv.js"></script>
    <script src="/assets/js/respond.min.js"></script>
    <![endif]-->

    <?php
    //if series defined & not empty & no episode is defined include series.php
    if(!isset($_GET["ep"]) && isset($_GET["id"]) && !empty($_GET["id"]))
    {
        include "series.php";
    }
    //elseif episode is defined and id is defined both are not empty
    elseif(isset($_GET["ep"]) && !empty($_GET["ep"]) && isset($_GET["id"]) && !empty($_GET["id"]))
    {
        //check if current episode number is out of bounds
        if($_GET["ep"] > $anime["episode-count"])
        {
            header( 'Location: ../watch/watch.php?id='. $_GET["id"] ) ;
        }
        if($_GET["ep"] <= 0)
        {
            header( 'Location: ../watch/watch.php?id='. $_GET["id"] ) ;
        }
        //if episode number within series range include episode.php
        include "episode.php";
    }
    else
    //else something wired happened goto /watch
    {
        header( 'Location: ../watch' ) ;
    }
    ?>
    <script src="/assets/js/jquery-1.10.2.min.js"></script>
    <script src="/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/modernizr.min.js"></script>
    <script src="/assets/js/jquery.sparkline.min.js"></script>
    <script src="/assets/js/toggles.min.js"></script>
    <script src="/assets/js/retina.min.js"></script>
    <script src="/assets/js/jquery.cookies.js"></script>
    <script src="/assets/js/jquery.prettyPhoto.js"></script>
    <script src="/assets/js/custom.js"></script>
    <script src="/assets/js/holder.js"></script>
    <script src="/assets/js/morris.min.js"></script>
    <script src="/assets/js/raphael-2.1.0.min.js"></script>
    </body>
</html>