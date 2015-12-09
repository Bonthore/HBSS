<html lang="en" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
    <title>HBSS | @yield('title')</title>
    <link href="assets/css/style.default.css" rel="stylesheet">
    <link href="assets/css/jquery.datatables.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
</head>
<body style="overflow: visible;">
<!-- Preloader -->
<div id="preloader" style="display: none;">
    <div id="status" style="display: none;"><i class="fa fa-spinner fa-spin"></i></div>
</div>
<section>
    @include('leftpanel')
    <div class="mainpanel">
        @include('header')
        <div class="pageheader">
            <h2><i class="fa fa-home"></i> @yield('title') <span>@yield('subtitle')</span></h2>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
        <div class="contentpanel">
            @yield('content')
        </div>
    </div>
    @include('rightpanel')
</section>
<script src="assets/js/jquery-1.10.2.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/jquery.sparkline.min.js"></script>
<script src="assets/js/toggles.min.js"></script>
<script src="assets/js/retina.min.js"></script>
<script src="assets/js/jquery.cookies.js"></script>
<script src="assets/js/flot/flot.min.js"></script>
<script src="assets/js/flot/flot.resize.min.js"></script>
<script src="assets/js/morris.min.js"></script>
<script src="assets/js/raphael-2.1.0.min.js"></script>
<script src="assets/js/jquery.datatables.min.js"></script>
<script src="assets/js/chosen.jquery.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/dashboard.js"></script>
</body>
</html>