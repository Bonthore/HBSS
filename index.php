<?php
include "core/core.php";
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

  <title>Bracket Responsive Bootstrap3 Admin</title>

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
  <?php include "core/leftpanel.php"; ?>
  
  <div class="mainpanel">
    
    <!-- headerbar -->
      <?php include "core/header.php"; ?>

    <div class="pageheader">
      <h2><i class="fa fa-home"></i> Dashboard <span>Subtitle goes here...</span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="index.html">Bracket</a></li>
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
      
      <div class="row">
        
        <div class="col-sm-7">
          
          <div class="table-responsive dashboard-datatable">
            <div id="table1_wrapper" class="dataTables_wrapper" role="grid"><div class="dataTables_filter" id="table1_filter"><label>Search: <input type="text" aria-controls="table1"></label></div><table class="table dataTable" id="table1" aria-describedby="table1_info">
              <thead>
                 <tr role="row"><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="table1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 145px;">Rendering engine</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="table1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 225px;">Browser</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="table1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 207px;">Platform(s)</th></tr>
              </thead>
              
           <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="gradeA odd">
                    <td class=" sorting_1">Gecko</td>
                    <td class=" ">Firefox 1.0</td>
                    <td class=" ">Win 98+ / OSX.2+</td>
                 </tr><tr class="gradeA even">
                    <td class=" sorting_1">Gecko</td>
                    <td class=" ">Firefox 1.5</td>
                    <td class=" ">Win 98+ / OSX.2+</td>
                 </tr><tr class="gradeA odd">
                    <td class=" sorting_1">Gecko</td>
                    <td class=" ">Firefox 2.0</td>
                    <td class=" ">Win 98+ / OSX.2+</td>
                 </tr><tr class="gradeA even">
                    <td class=" sorting_1">Gecko</td>
                    <td class=" ">Firefox 3.0</td>
                    <td class=" ">Win 2k+ / OSX.3+</td>
                 </tr><tr class="gradeA odd">
                    <td class=" sorting_1">Gecko</td>
                    <td class=" ">Camino 1.0</td>
                    <td class=" ">OSX.2+</td>
                 </tr></tbody></table><div class="dataTables_info" id="table1_info">Showing 1 to 5 of 57 entries</div><div class="dataTables_paginate paging_two_button" id="table1_paginate"><a class="paginate_disabled_previous" tabindex="0" role="button" id="table1_previous" aria-controls="table1">Previous</a><a class="paginate_enabled_next" tabindex="0" role="button" id="table1_next" aria-controls="table1">Next</a></div></div>
          </div><!-- table-responsive -->
          
        </div><!-- col-sm-7 -->
        
        <div class="col-sm-5">
          
          <div class="panel panel-success">
            <div class="panel-heading padding5">
              <div id="line-chart" style="height: 248px; position: relative;"><svg height="248" version="1.1" width="431" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.15625px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="36.5" y="209" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" fill-opacity="0.5"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><text x="36.5" y="163" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" fill-opacity="0.5"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">17.5</tspan></text><text x="36.5" y="117" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" fill-opacity="0.5"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">35</tspan></text><text x="36.5" y="71" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" fill-opacity="0.5"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">52.5</tspan></text><text x="36.5" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" fill-opacity="0.5"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">70</tspan></text><text x="406" y="221.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" fill-opacity="0.5" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="346.5271565495207" y="221.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" fill-opacity="0.5" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><text x="287.0543130990415" y="221.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" fill-opacity="0.5" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text><text x="227.5814696485623" y="221.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" fill-opacity="0.5" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2009</tspan></text><text x="167.94568690095846" y="221.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" fill-opacity="0.5" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2008</tspan></text><text x="108.47284345047923" y="221.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" fill-opacity="0.5" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2007</tspan></text><text x="49" y="221.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" fill-opacity="0.5" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2006</tspan></text><path fill="none" stroke="#fdd2a4" d="M49,209L108.47284345047923,143.28571428571428L167.94568690095846,130.14285714285714L227.5814696485623,156.42857142857144L287.0543130990415,117L346.5271565495207,77.57142857142858L406,64.42857142857142" stroke-width="2px" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#ffffff" d="M49,77.57142857142858L108.47284345047923,51.28571428571428L167.94568690095846,90.71428571428571L227.5814696485623,103.85714285714286L287.0543130990415,77.57142857142858L346.5271565495207,51.28571428571428L406,38.14285714285714" stroke-width="2px" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="49" cy="209" r="4" fill="#fdd2a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="108.47284345047923" cy="143.28571428571428" r="4" fill="#fdd2a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="167.94568690095846" cy="130.14285714285714" r="4" fill="#fdd2a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="227.5814696485623" cy="156.42857142857144" r="4" fill="#fdd2a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="287.0543130990415" cy="117" r="4" fill="#fdd2a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="346.5271565495207" cy="77.57142857142858" r="4" fill="#fdd2a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="406" cy="64.42857142857142" r="4" fill="#fdd2a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="49" cy="77.57142857142858" r="4" fill="#ffffff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="108.47284345047923" cy="51.28571428571428" r="4" fill="#ffffff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="167.94568690095846" cy="90.71428571428571" r="4" fill="#ffffff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="227.5814696485623" cy="103.85714285714286" r="4" fill="#ffffff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="287.0543130990415" cy="77.57142857142858" r="4" fill="#ffffff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="346.5271565495207" cy="51.28571428571428" r="4" fill="#ffffff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="406" cy="38.14285714285714" r="4" fill="#ffffff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg></div>
            </div>
            <div class="panel-body">
              <div class="tinystat pull-left">
                <div id="sparkline" class="chart mt5"><canvas width="59" height="30" style="display: inline-block; width: 59px; height: 30px; vertical-align: top;"></canvas></div>
                <div class="datainfo">
                  <span class="text-muted">Average Sales</span>
                  <h4>$630,201</h4>
                </div>
              </div><!-- tinystat -->
              <div class="tinystat pull-right">
                <div id="sparkline2" class="chart mt5"><canvas width="59" height="30" style="display: inline-block; width: 59px; height: 30px; vertical-align: top;"></canvas></div>
                <div class="datainfo">
                  <span class="text-muted">Total Sales</span>
                  <h4>$139,201</h4>
                </div>
              </div><!-- tinystat -->
            </div>
          </div><!-- panel -->
          
        </div><!-- col-sm-6 -->
      </div><!-- row -->
      
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="panel panel-default widget-photoday">
            <div class="panel-body">
              <a href="#" class="photoday"><img src="/assets/images/photos/photo1.png" alt=""></a>
              <div class="photo-details">
                <h4 class="photo-title">Strawhat In The Beach</h4>
                <small class="text-muted"><i class="fa fa-map-marker"></i> San Franciso, California, USA</small>
                <small>By: <a href="#">ThemePixels</a></small>
              </div><!-- photo-details -->
              <ul class="photo-meta">
                <li><span><i class="fa fa-eye"></i> 32,102</span></li>
                <li><a href="#"><i class="fa fa-heart"></i> 1,003</a></li>
                <li><a href="#"><i class="fa fa-comments"></i> 52</a></li>
              </ul>
            </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
        
        <div class="col-sm-6 col-md-4">
          <div class="panel panel-default panel-alt widget-messaging">
          <div class="panel-heading">
              <div class="panel-btns">
                <a href="#" class="panel-edit"><i class="fa fa-edit"></i></a>
              </div><!-- panel-btns -->
              <h3 class="panel-title">Messaging</h3>
            </div>
            <div class="panel-body">
              <ul>
                <li>
                  <small class="pull-right">Dec 10</small>
                  <h4 class="sender">Jennier Lawrence</h4>
                  <small>Lorem ipsum dolor sit amet...</small>
                </li>
                <li>
                  <small class="pull-right">Dec 9</small>
                  <h4 class="sender">Marsha Mellow</h4>
                  <small>Lorem ipsum dolor sit amet...</small>
                </li>
                <li>
                  <small class="pull-right">Dec 9</small>
                  <h4 class="sender">Holly Golightly</h4>
                  <small>Lorem ipsum dolor sit amet...</small>
                </li>
                <li>
                  <small class="pull-right">Dec 10</small>
                  <h4 class="sender">Jennier Lawrence</h4>
                  <small>Lorem ipsum dolor sit amet...</small>
                </li>
                <li>
                  <small class="pull-right">Dec 9</small>
                  <h4 class="sender">Marsha Mellow</h4>
                  <small>Lorem ipsum dolor sit amet...</small>
                </li>
              </ul>
            </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
        
        <div class="col-sm-6 col-md-4">
          <div class="panel panel-dark panel-alt widget-quick-status-post">
          <div class="panel-heading">
              <div class="panel-btns">
                <a href="#" class="panel-close">×</a>
                <a href="#" class="minimize">−</a>
              </div><!-- panel-btns -->
              <h3 class="panel-title">Quick Status Post</h3>
            </div>
            <div class="panel-body">
              <ul class="nav nav-tabs nav-justified">
                <li class="active"><a href="#post-status" data-toggle="tab"><i class="fa fa-pencil"></i> <strong>Status</strong></a></li>
                <li><a href="#post-photo" data-toggle="tab"><i class="fa fa-picture-o"></i> <strong>Photo</strong></a></li>
                <li><a href="#post-checkin" data-toggle="tab"><i class="fa fa-map-marker"></i> <strong>Check-In</strong></a></li>
              </ul>
              <div class="tab-content">
                <div id="post-status" class="tab-pane active">
                  <input type="text" class="form-control" placeholder="What's your status?">
                </div>
                <div id="post-photo" class="tab-pane">
                  <input type="text" class="form-control" placeholder="Choose photo">
                </div>
                <div id="post-checkin" class="tab-pane">
                  <input type="text" class="form-control" placeholder="Search location">
                </div>
                <button class="btn btn-primary btn-block mt10">Submit Post</button>
              </div><!-- tab-content -->
              
            </div><!-- panel-body -->
          </div><!-- panel -->
          
          <div class="mb20"></div>
          
          <div class="row">
            <div class="col-xs-6">
              <div class="panel panel-warning panel-alt widget-today">
                <div class="panel-heading text-center">
                  <i class="fa fa-calendar-o"></i>
                </div>
                <div class="panel-body text-center">
                  <h3 class="today">Fri, Dec 13</h3>
                </div><!-- panel-body -->
              </div><!-- panel -->
            </div>
            
            <div class="col-xs-6">
              <div class="panel panel-danger panel-alt widget-time">
                <div class="panel-heading text-center">
                  <i class="glyphicon glyphicon-time"></i>
                </div>
                <div class="panel-body text-center">
                  <h3 class="today">4:50AM PST</h3>
                </div><!-- panel-body -->
              </div><!-- panel -->
            </div>
          </div>
        </div><!-- col-sm-6 -->
        
      </div>
      
    </div><!-- contentpanel -->
    
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
                            <img alt="" src="/assets/images/photos/userprofile.png" class="media-object">
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
                            <img alt="" src="/assets/images/photos/user1.png" class="media-object">
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
                            <img alt="" src="/assets/images/photos/user2.png" class="media-object">
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
                            <img alt="" src="/assets/images/photos/user3.png" class="media-object">
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
                            <img alt="" src="/assets/images/photos/user4.png" class="media-object">
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
                            <img alt="" src="/assets/images/photos/user5.png" class="media-object">
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
                            <img alt="" src="/assets/images/photos/user2.png" class="media-object">
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
                            <img alt="" src="/assets/images/photos/user3.png" class="media-object">
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
                            <img alt="" src="/assets/images/photos/user4.png" class="media-object">
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
                            <img alt="" src="/assets/images/photos/user5.png" class="media-object">
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
                            <img alt="" src="/assets/images/photos/user4.png" class="media-object">
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
                            <img alt="" src="/assets/images/photos/user5.png" class="media-object">
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
                            <img alt="" src="/assets/images/photos/user2.png" class="media-object">
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
                            <img alt="" src="/assets/images/photos/user1.png" class="media-object">
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
                            <img alt="" src="/assets/images/photos/user3.png" class="media-object">
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
                            <img alt="" src="/assets/images/photos/user4.png" class="media-object">
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
                            <img alt="" src="/assets/images/photos/user5.png" class="media-object">
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
                            <img alt="" src="/assets/images/photos/user4.png" class="media-object">
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
                            <img alt="" src="/assets/images/photos/user2.png" class="media-object">
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
                            <img alt="" src="/assets/images/photos/user3.png" class="media-object">
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
                    <div class="toggle toggle-success" style="height: 20px; width: 50px;"><div class="toggle-slide active"><div class="toggle-inner" style="width: 80px; margin-left: 0px;"><div class="toggle-on active" style="height: 20px; width: 40px; text-align: center; text-indent: -10px; line-height: 20px;">ON</div><div class="toggle-blob" style="height: 20px; width: 20px; margin-left: -10px;"></div><div class="toggle-off" style="height: 20px; width: 40px; margin-left: -10px; text-align: center; text-indent: 10px; line-height: 20px;">OFF</div></div></div></div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-xs-8 control-label">Enable History</label>
                <div class="col-xs-4 control-label">
                    <div class="toggle toggle-success" style="height: 20px; width: 50px;"><div class="toggle-slide active"><div class="toggle-inner" style="width: 80px; margin-left: 0px;"><div class="toggle-on active" style="height: 20px; width: 40px; text-align: center; text-indent: -10px; line-height: 20px;">ON</div><div class="toggle-blob" style="height: 20px; width: 20px; margin-left: -10px;"></div><div class="toggle-off" style="height: 20px; width: 40px; margin-left: -10px; text-align: center; text-indent: 10px; line-height: 20px;">OFF</div></div></div></div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-xs-8 control-label">Show Full Name</label>
                <div class="col-xs-4 control-label">
                    <div class="toggle-chat1 toggle-success" style="height: 20px; width: 50px;"><div class="toggle-slide"><div class="toggle-inner" style="width: 80px; margin-left: -30px;"><div class="toggle-on" style="height: 20px; width: 40px; text-align: center; text-indent: -10px; line-height: 20px;">ON</div><div class="toggle-blob" style="height: 20px; width: 20px; margin-left: -10px;"></div><div class="toggle-off active" style="height: 20px; width: 40px; margin-left: -10px; text-align: center; text-indent: 10px; line-height: 20px;">OFF</div></div></div></div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-xs-8 control-label">Show Location</label>
                <div class="col-xs-4 control-label">
                    <div class="toggle toggle-success" style="height: 20px; width: 50px;"><div class="toggle-slide active"><div class="toggle-inner" style="width: 80px; margin-left: 0px;"><div class="toggle-on active" style="height: 20px; width: 40px; text-align: center; text-indent: -10px; line-height: 20px;">ON</div><div class="toggle-blob" style="height: 20px; width: 20px; margin-left: -10px;"></div><div class="toggle-off" style="height: 20px; width: 40px; margin-left: -10px; text-align: center; text-indent: 10px; line-height: 20px;">OFF</div></div></div></div>
                </div>
            </div>
            
        </div><!-- tab-pane -->
        
    </div><!-- tab-content -->
  </div><!-- rightpanel -->
  
  
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