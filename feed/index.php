<?php
include "../core/core.php";
?>
<html lang="en" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/png">

  <title>Bracket Responsive Bootstrap3 Admin</title>

  <link href="/assets/css/style.default.css" rel="stylesheet">

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
  <?php include "../core/leftpanel.php"; ?>
  
  <div class="mainpanel">
    
    <!-- headerbar -->
          <?php include "../core/header.php"; ?>

    <div class="pageheader">
      <h2><i class="fa fa-clock-o"></i> Feed <span>Your Feed.</span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="index.html">Bracket</a></li>
          <li><a href="index.html">Pages</a></li>
          <li class="active">Timeline</li>
        </ol>
      </div>
    </div>
    
    <div class="contentpanel">
      
      <div id="timeline-list" class="row" style="max-width: 950px; position: relative; height: 985.047px;">
        
        <div class="col-sm-6" style="position: absolute; left: 0px; top: 0px;">
            <div class="panel panel-dark panel-alt timeline-post">
                <div class="panel-body">              
                    <textarea placeholder="Write something..." class="form-control"></textarea>
                </div><!-- panel-body -->
                <div class="panel-footer">
                    <div class="timeline-btns pull-left">
                        <a href="#" class="tooltips" data-toggle="tooltip" title="" data-original-title="Add Photo"><i class="glyphicon glyphicon-picture"></i></a>
                        <a href="#" class="tooltips" data-toggle="tooltip" title="" data-original-title="Add Video"><i class="glyphicon glyphicon-facetime-video"></i></a>
                        <a href="#" class="tooltips" data-toggle="tooltip" title="" data-original-title="Check In"><i class="glyphicon glyphicon-map-marker"></i></a>
                        <a href="#" class="tooltips" data-toggle="tooltip" title="" data-original-title="Tag User"><i class="glyphicon glyphicon-user"></i></a>
                    </div><!--timeline-btns -->
                    <button class="btn btn-primary pull-right">Submit Post</button>
                </div><!-- panel-footer -->
            </div>
        </div><!-- col-sm-6 -->








<?php


          $json = file_get_contents("http://hummingbird.me/api/v1/users/". $user["name"] ."/feed");
          $hummingbird = json_decode($json, true);
          $i=0;
          while ($i<count($hummingbird)){
              if ($hummingbird[$i]["story_type"] == "comment"){
                  ?>
                  <div class="col-sm-6" style="position: absolute; left: 0px; top: 0px;">
                      <div class="panel panel-default panel-timeline">
                          <div class="panel-heading">

                              <div class="media">
                                  <a href="#" class="pull-left">
                                      <img alt="" src="<?php echo $hummingbird[$i]["user"]["avatar"]; ?>" class="media-object">
                                  </a>
                                  <div class="media-body">
                                      <h4 class="text-primary"><?php echo $hummingbird[$i]["user"]["name"]; ?> <small></small></h4>
                                      <small class="text-muted">January 10, 2014 at 7:30am</small>
                                  </div>
                              </div><!-- media -->

                          </div><!-- panel-heading -->
                          <div class="panel-body">
                              <a href="#"><img src="<?php echo $user["cover-image"]; ?>" class="img-responsive" alt=""></a>
                              <div class="timeline-btns">
                                  <div class="pull-left">
                                      <a href="#" class="tooltips" data-toggle="tooltip" title="" data-original-title="Like"><i class="glyphicon glyphicon-heart"></i></a>
                                      <a href="#" class="tooltips" data-toggle="tooltip" title="" data-original-title="Add Comment"><i class="glyphicon glyphicon-comment"></i></a>
                                      <a href="#" class="tooltips" data-toggle="tooltip" title="" data-original-title="Share"><i class="glyphicon glyphicon-share"></i></a>
                                  </div>
                                  <div class="pull-right">
                                      <small class="text-muted">2 people like this</small>
                                  </div>
                              </div>
                          </div><!-- panel-body -->
                          <div class="panel-footer">
                              <div class="media">
                                  <a href="#" class="pull-left">
                                      <img alt="" src="images/photos/user3.png" class="media-object">
                                  </a>
                                  <div class="media-body">
                                      <input type="text" class="form-control" placeholder="Write a comment">
                                  </div>
                              </div><!-- media -->
                          </div>
                      </div><!-- panel -->
                  </div>
                <?php
              }
              else {
                  $query = "SELECT * FROM anime WHERE id='" . $hummingbird[$i]["media"]["id"] . "' LIMIT 1";
                  $result = mysqli_query($conn, $query);
                  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                  ?>
                  <div class="col-sm-6" style="position: absolute; left: 0px; top: 0px;">
                      <div class="panel panel-default panel-timeline">
                          <div class="panel-heading">

                              <div class="media">
                                  <a href="#" class="pull-left">
                                      <img alt="" src="<?php echo $hummingbird[$i]["user"]["avatar"]; ?>" class="media-object">
                                  </a>
                                  <div class="media-body">
                                      <h4 class="text-primary"><?php echo $hummingbird[$i]["user"]["name"]; ?> <small></small></h4>
                                      <small class="text-muted"><?php echo $hummingbird[$i]["substories"]["0"]["created_at"]; ?> </small>
                                  </div>
                              </div><!-- media -->

                          </div><!-- panel-heading -->
                          <div class="panel-body">
                              <a href="#"><img src="<?php echo $row["cover-image"]; ?>" class="img-responsive" style="height: 300px;" alt=""></a>
                              <div class="timeline-btns">
                                  <div class="pull-left">
                                      <p>You Watched Episode <?php echo $hummingbird[$i]["substories"]["0"]["episode_number"]; ?> of <a href="/watch/watch.php?id=<?php echo $row["id"]; ?>"><?php echo $row["title-eng"]; ?></a>.</p>
                                  </div>

                              </div>
                          </div><!-- panel-body -->

                      </div><!-- panel -->
                  </div>
                  <?php
              }
              ?>







    <?php
    $i++;
}
?>



        
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

<script src="/assets/js/masonry.pkgd.min.js"></script>

<script src="/assets/js/custom.js"></script>
<script>
  jQuery(window).load(function(){
  
    var container = document.querySelector('#timeline-list');
    var msnry = new Masonry( container, {
      // options
      columnWidth: '.col-sm-6',
      itemSelector: '.col-sm-6'
    });
    
    // check on load
    if(jQuery(window).width() <= 640 )
        msnry.destroy();

    // check on resize
    jQuery(window).resize(function(){
        if(jQuery(this).width() <= 640 )
            msnry.destroy();
    });
    
  });
</script>



</body></html>