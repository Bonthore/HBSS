<?php include $_SERVER["DOCUMENT_ROOT"] ."/core/core.php";
if(isset($_GET["q"]) && !empty($_GET["q"])){
    $search = $_GET["q"];
}
else $search = "";
?>
<!DOCTYPE html>
<html lang="en" style="overflow: scroll;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/png">

    <title>HBSS | Search</title>

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

    <?php include $_SERVER["DOCUMENT_ROOT"] ."/core/leftpanel.php"; ?>

    <div class="mainpanel">

        <?php include $_SERVER["DOCUMENT_ROOT"] ."/core/header.php"; ?>

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
<?php
$query = "SELECT * FROM `anime` WHERE `id` LIKE '%". $_GET["q"] ."%' OR `title-eng` LIKE '%%". $_GET["q"] ."%' OR `synopsis` LIKE '%%". $_GET["q"] ."%' OR `started-airing` LIKE '%%". $_GET["q"] ."%' OR `finished-airing` LIKE '%%". $_GET["q"] ."%'";
$result = mysqli_query($conn, $query);
var_dump($result); ?>

                            </div><!-- results-list -->

                        </div><!-- panel-body -->
                    </div><!-- panel -->
                </div><!-- col-sm-8 -->
            </div><!-- row -->

        </div>

    </div><!-- mainpanel -->

    <?php include $_SERVER["DOCUMENT_ROOT"] ."/core/rightpanel.php" ?>

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
