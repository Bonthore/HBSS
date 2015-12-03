<?php
include $_SERVER["DOCUMENT_ROOT"] ."/core/core.php";
function mintuesToTime($minutes) {
//
// Assuming that your minutes value is $minutes
//
    $d = floor ($minutes / 1440);
    $h = floor (($minutes - $d * 1440) / 60);
    $m = $minutes - ($d * 1440) - ($h * 60);
//
// Then you can output it like so...
//
    echo "{$d}d {$h}h {$m}m";;
}

?>
<html lang="en" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/png">

  <title>HBSS | Dashboard</title>

  <link href="/assets/css/style.default.css" rel="stylesheet">
  <link href="/assets/css/jquery.datatables.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>

<body style="overflow: visible;">

<!-- Preloader -->
<div id="preloader" style="display: none;">
    <div id="status" style="display: none;"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
  
  <!-- leftpanel -->
  <?php include $_SERVER["DOCUMENT_ROOT"] ."/core/leftpanel.php"; ?>
  
  <div class="mainpanel">
    
    <!-- headerbar -->
      <?php include $_SERVER["DOCUMENT_ROOT"] ."/core/header.php"; ?>

    <div class="pageheader">
      <h2><i class="fa fa-home"></i> Dashboard <span>Subtitle goes here...</span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </div>
    
    <div class="contentpanel">
      
      <div class="row">
        
        <div class="col-sm-6 col-md-3">
          <div class="panel panel-success panel-stat">
            <div class="panel-heading">
              
              <div class="stat">
                <div class="row">
                  <div class="col-xs-4">
                    <img src="/assets/images/is-user.png" alt="">
                  </div>
                  <div class="col-xs-8">
                    <small class="stat-label">Total Anime Watched.</small>
                    <h1><?php echo mintuesToTime($user["life_spent_on_anime"]) ?></h1>
                  </div>
                </div><!-- row -->
                
                <div class="mb15"></div>
                
                <div class="row">
                  <div class="col-xs-6">
                    <small class="stat-label">% of series watched</small>
                    <h4>7.80%</h4>
                  </div>
                  
                  <div class="col-xs-6">
                    <small class="stat-label">% Total Anime</small>
                    <h4>2.55%</h4>
                  </div>
                </div><!-- row -->
              </div><!-- stat -->
              
            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
        
        <div class="col-sm-6 col-md-3">
          <div class="panel panel-danger panel-stat">
            <div class="panel-heading">
              
              <div class="stat">
                <div class="row">
                  <div class="col-xs-4">
                    <img src="/assets/images/is-document.png" alt="">
                  </div>
                  <div class="col-xs-8">
                    <small class="stat-label">% Unique Visitors</small>
                    <h1>54.40%</h1>
                  </div>
                </div><!-- row -->
                
                <div class="mb15"></div>
                
                <small class="stat-label">Avg. Visit Duration</small>
                <h4>01:80:22</h4>
                  
              </div><!-- stat -->
              
            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
        
        <div class="col-sm-6 col-md-3">
          <div class="panel panel-primary panel-stat">
            <div class="panel-heading">
              
              <div class="stat">
                <div class="row">
                  <div class="col-xs-4">
                    <img src="/assets/images/is-document.png" alt="">
                  </div>
                  <div class="col-xs-8">
                    <small class="stat-label">Page Views</small>
                    <h1>300k+</h1>
                  </div>
                </div><!-- row -->
                
                <div class="mb15"></div>
                
                <small class="stat-label">% Bounce Rate</small>
                <h4>34.23%</h4>
                  
              </div><!-- stat -->
              
            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
        
        <div class="col-sm-6 col-md-3">
          <div class="panel panel-dark panel-stat">
            <div class="panel-heading">
              
              <div class="stat">
                <div class="row">
                  <div class="col-xs-4">
                    <img src="/assets/images/is-money.png" alt="">
                  </div>
                  <div class="col-xs-8">
                    <small class="stat-label">Today's Earnings</small>
                    <h1>$655</h1>
                  </div>
                </div><!-- row -->
                
                <div class="mb15"></div>
                
                <div class="row">
                  <div class="col-xs-6">
                    <small class="stat-label">Last Week</small>
                    <h4>$32,322</h4>
                  </div>
                  
                  <div class="col-xs-6">
                    <small class="stat-label">Last Month</small>
                    <h4>$503,000</h4>
                  </div>
                </div><!-- row -->
                  
              </div><!-- stat -->
              
            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
      </div><!-- row -->
      
      <div class="row">
        <div class="col-sm-8 col-md-9">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">
                <div class="col-sm-8">
                  <h5 class="subtitle mb5">Network Performance</h5>
                  <p class="mb15">Duis autem vel eum iriure dolor in hendrerit in vulputate...</p>
                  <div id="basicflot" style="width: 100%; height: 300px; margin-bottom: 20px; padding: 0px; position: relative;"><canvas class="flot-base" width="376" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 376px; height: 300px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 53px; top: 278px; left: 31px; text-align: center;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 53px; top: 278px; left: 86px; text-align: center;">1</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 53px; top: 278px; left: 142px; text-align: center;">2</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 53px; top: 278px; left: 198px; text-align: center;">3</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 53px; top: 278px; left: 253px; text-align: center;">4</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 53px; top: 278px; left: 309px; text-align: center;">5</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 53px; top: 278px; left: 365px; text-align: center;">6</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 258px; left: 8px; text-align: right;">0.0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 215px; left: 8px; text-align: right;">2.5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 172px; left: 8px; text-align: right;">5.0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 129px; left: 8px; text-align: right;">7.5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 86px; left: 1px; text-align: right;">10.0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 43px; left: 1px; text-align: right;">12.5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 1px; text-align: right;">15.0</div></div></div><canvas class="flot-overlay" width="376" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 376px; height: 300px;"></canvas><div class="legend"><div style="position: absolute; width: 72px; height: 42px; top: 16px; left: 39px; opacity: 0.85; background-color: rgb(255, 255, 255);"> </div><table style="position:absolute;top:16px;left:39px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid #1CAF9A;overflow:hidden"></div></div></td><td class="legendLabel">Uploads</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid #428BCA;overflow:hidden"></div></div></td><td class="legendLabel">Downloads</td></tr></tbody></table></div></div>
                </div><!-- col-sm-8 -->
                <div class="col-sm-4">
                  <h5 class="subtitle mb5">Server Status</h5>
                  <p class="mb15">Summary of the status of your server.</p>
                  
                  <span class="sublabel">CPU Usage (40.05 - 32 cpus)</span>
                  <div class="progress progress-sm">
                    <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-primary"></div>
                  </div><!-- progress -->
                  
                  <span class="sublabel">Memory Usage (32.2%)</span>
                  <div class="progress progress-sm">
                    <div style="width: 32%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success"></div>
                  </div><!-- progress -->
                  
                  <span class="sublabel">Disk Usage (82.2%)</span>
                  <div class="progress progress-sm">
                    <div style="width: 82%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger"></div>
                  </div><!-- progress -->
                  
                  <span class="sublabel">Databases (63/100)</span>
                  <div class="progress progress-sm">
                    <div style="width: 63%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning"></div>
                  </div><!-- progress -->
                  
                  <span class="sublabel">Domains (2/10)</span>
                  <div class="progress progress-sm">
                    <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success"></div>
                  </div><!-- progress -->
                  
                  <span class="sublabel">Email Account (13/50)</span>
                  <div class="progress progress-sm">
                    <div style="width: 26%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success"></div>
                  </div><!-- progress -->
                  
                  
                </div><!-- col-sm-4 -->
              </div><!-- row -->
            </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-sm-9 -->
        
        <div class="col-sm-4 col-md-3">
          
          <div class="panel panel-default">
            <div class="panel-body">
            <h5 class="subtitle mb5">Genre Breakdown.</h5>
            <p class="mb15">A Breakdown of you most viewed genres</p>
            <div id="donut-chart2" style="text-align: center; height: 298px;"><svg height="298" version="1.1" width="217" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.5px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#d9534f" d="M108.5,214.66666666666669A65.66666666666667,65.66666666666667,0,0,0,171.68149969918198,131.10560962554524" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#d9534f" stroke="#ffffff" d="M108.5,217.66666666666669A68.66666666666667,68.66666666666667,0,0,0,174.56796415244412,130.2880994053925L198.46147546000276,123.52093147190581A93.5,93.5,0,0,1,108.5,242.5Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#1caf9a" d="M171.68149969918198,131.10560962554524A65.66666666666667,65.66666666666667,0,0,0,111.00970351523905,83.38130983190301" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#1caf9a" stroke="#ffffff" d="M174.56796415244412,130.2880994053925A68.66666666666667,68.66666666666667,0,0,0,111.12436002101138,80.38350165163462L112.07346109657134,55.5683117149685A93.5,93.5,0,0,1,198.46147546000276,123.52093147190581Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#428bca" d="M111.00970351523905,83.38130983190301A65.66666666666667,65.66666666666667,0,0,0,46.86988231477441,126.33196732805524" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#428bca" stroke="#ffffff" d="M111.12436002101138,80.38350165163462A68.66666666666667,68.66666666666667,0,0,0,44.054293181946846,125.29637192679888L20.74747202687422,116.72394332751013A93.5,93.5,0,0,1,112.07346109657134,55.5683117149685Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#5bc0de" d="M46.86988231477441,126.33196732805524A65.66666666666667,65.66666666666667,0,0,0,67.89342348190858,200.60636641531255" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#5bc0de" stroke="#ffffff" d="M44.054293181946846,125.29637192679888A68.66666666666667,68.66666666666667,0,0,0,66.03830069681811,202.9640176728649L50.682006531347,222.48013086038156A93.5,93.5,0,0,1,20.74747202687422,116.72394332751013Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#428bca" d="M67.89342348190858,200.60636641531255A65.66666666666667,65.66666666666667,0,0,0,108.47937020858078,214.66666342614658" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#428bca" stroke="#ffffff" d="M66.03830069681811,202.9640176728649A68.66666666666667,68.66666666666667,0,0,0,108.4784277308002,217.66666327810253L108.46905531287118,247.4999951392199A98.5,98.5,0,0,1,47.590135222862884,226.40954962296883Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="108.5" y="139" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: 800; font-stretch: normal; font-size: 15px; line-height: normal; font-family: Arial;" font-size="15px" font-weight="800" transform="matrix(0.8113,0,0,0.8113,20.4775,28.3099)" stroke-width="1.2326388888888888"><tspan dy="6" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Internet Explorer</tspan></text><text x="108.5" y="159" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 14px; line-height: normal; font-family: Arial;" font-size="14px" transform="matrix(1.3333,0,0,1.3333,-36.1667,-50.3333)" stroke-width="0.75"><tspan dy="5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">10</tspan></text></svg></div>
            </div><!-- panel-body -->
          </div><!-- panel -->
          
        </div><!-- col-sm-3 -->
        
      </div><!-- row -->
      
      
      
    </div><!-- contentpanel -->
    
  </div><!-- mainpanel -->
  <?php include $_SERVER["DOCUMENT_ROOT"] ."/core/rightpanel.php"; ?>
</section>


<script src="/assets/js/jquery-1.10.2.min.js"></script>
<script src="/assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/modernizr.min.js"></script>
<script src="/assets/js/jquery.sparkline.min.js"></script>
<script src="/assets/js/toggles.min.js"></script>
<script src="/assets/js/retina.min.js"></script>
<script src="/assets/js/jquery.cookies.js"></script>

<script src="/assets/js/flot/flot.min.js"></script>
<script src="/assets/js/flot/flot.resize.min.js"></script>
<script src="/assets/js/morris.min.js"></script>
<script src="/assets/js/raphael-2.1.0.min.js"></script>

<script src="/assets/js/jquery.datatables.min.js"></script>
<script src="/assets/js/chosen.jquery.min.js"></script>

<script src="/assets/js/custom.js"></script>
<script src="/assets/js/dashboard.js"></script>



</body></html>