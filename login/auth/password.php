<?php
session_start();
include "../../core/config.php";
if (!isset ($_SESSION['post_data'])) {
    header( 'Location: '. $config["root"] .'/login' );
}
if (isset ($_GET["previous"]) && !empty($_GET["previous"])){
    $location=$_GET["previous"];
    $url_full= "?previous=". $location;
}
else {
    $location= $config["root"] ."";
    $url_full= $config["root"] ."";
}
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$query = "SELECT * FROM users WHERE name='" . $_SESSION['post_data'] . "' LIMIT 1";
$result = mysqli_query($conn, $query);
//check if user exists in db
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo $config["root"]; ?>/assets/images/favicon.png" type="image/png">

    <title>HBSS | Login</title>

    <link href="<?php echo $config["root"]; ?>/assets/css/style.default.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="notfound">

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>

    <div class="lockedpanel">
        <div class="locked">
            <i class="fa fa-lock"></i>
        </div>
        <div class="loginuser">
            <img src="<?php echo $row["avatar"]; ?>" alt="" />
        </div>
        <div class="logged">
            <h4><?php echo $row["name"]; ?></h4>
            <small class="text-muted"><?php echo $row["bio"]; ?></small>
        </div>
        <form method="post" action="<?php echo $config["root"]; ?>/login/auth/check.php<?php echo $url_full;?>">
            <input type="password" name="password" class="form-control" placeholder="Enter your password" />
            <button class="btn btn-success btn-block">Unlock</button>
        </form>
    </div><!-- lockedpanel -->

</section>


<script src="<?php echo $config["root"]; ?>/assets/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo $config["root"]; ?>/assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo $config["root"]; ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo $config["root"]; ?>/assets/js/modernizr.min.js"></script>
<script src="<?php echo $config["root"]; ?>/assets/js/retina.min.js"></script>

<script src="<?php echo $config["root"]; ?>/assets/js/custom.js"></script>

</body>
</html>
