<?php
include "../core/core.php";
if (isset($_GET["u"])&& !empty($_GET["u"])){

}
else header("location: /");




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
    <link href="/assets/css/perfect-scrollbar.css" rel="stylesheet">
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
            <h2><i class="fa fa-user"></i> Profile <span>Subtitle goes here...</span></h2>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="index.html">Dashboard</a></li>
                    <li class="active">Profile</li>
                </ol>
            </div>
        </div>
        <div class="contentpanel">
            <div class="row">
                <div class="col-sm-3">
                    <img src="<?php echo $otheruser["avatar"]; ?>" class="thumbnail img-responsive" alt="">
                    <div class="mb30"></div>
                    <h5 class="subtitle">About</h5>
                    <p class="mb30"><?php echo $otheruser["bio"]; ?></p>
                    <ul class="profile-social-list">
                        <li><i class="fa fa-link"></i> Website:  <a href="#"></a></li>
                        <li><i class="fa fa-clock-o"></i> Total Anime watched: <?php echo mintuesToTime($otheruser["life_spent_on_anime"]) ?>.</li>
                        <li><i class="fa fa-times"></i> Likes Hentai: <?php if($otheruser["show_adult_content"] == 1){
                                echo "Yes.";}
                            else echo "No."; ?></li>
                        <li><i class="fa fa-language"></i> Title Language Pref: <?php echo $otheruser["title_language_preference"]; ?>.</li>
                        <li><i class="fa fa-reply"></i> Last Library Update: <?php echo $otheruser["last_library_update"]; ?>.</li>
                    </ul>
                    <div class="mb30"></div>
                    <h5 class="subtitle">To be changed</h5>
                    <address>
                        Placeholder
                    </address>
                </div>
                <!-- col-sm-3 -->
                <div class="col-sm-9">
                    <div class="profile-header">
                        <h2 class="profile-name"><?php echo $otheruser["name"]?></h2>
                        <div class="profile-location"><i class="fa fa-map-marker"></i> <?php echo $otheruser["location"];?></div>
                        <div class="profile-position"><i class="fa fa-heart"></i> Waifu is: <?php echo $otheruser["waifu"];?></div>
                        <div class="mb20"></div>
                        <button class="btn btn-success mr5"><i class="fa fa-user"></i> Follow</button>
                        <button class="btn btn-white"><i class="fa fa-envelope-o"></i> Message</button>
                    </div>
                    <!-- profile-header -->
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-justified nav-profile">
                        <li class="active"><a href="#activities" data-toggle="tab"><strong>Activity</strong></a></li>
                        <li><a href="#followers" data-toggle="tab"><strong>Followers</strong></a></li>
                        <li><a href="#following" data-toggle="tab"><strong>Following</strong></a></li>
                        <li><a href="#events" data-toggle="tab"><strong>Library</strong></a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="activities">
                            <?php
                            $json = file_get_contents("http://hummingbird.me/api/v1/users/". $otheruser["name"] ."/feed");
                            $hummingbird = json_decode($json, true);
                            $i=0;
                            while ($i<count($hummingbird)){
                                if ($hummingbird[$i]["story_type"] == "comment"){echo "type story";
                                }
                                else
                                {
                                    $query = "SELECT * FROM anime WHERE id='" . $hummingbird[$i]["media"]["id"] . "' LIMIT 1";
                                    $result = mysqli_query($conn, $query);
                                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                    ?>
                                    <!-- media -->
                                    <div class="media act-media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object act-thumb"  height="100" src="<?php echo $hummingbird[$i]["user"]["avatar"]; ?>" alt="">
                                        </a>
                                        <div class="media-body act-media-body">
                                            <strong>You</strong> Watched Episode <?php echo $hummingbird[$i]["substories"]["0"]["episode_number"]; ?> of <a href="/watch/watch.php?id=<?php echo $row["id"]; ?>"><?php echo $row["title-eng"]; ?></a>. <br>
                                            <small class="text-muted">Today at 3:18pm</small>
                                            <div class="media blog-media">
                                                <a class="pull-left" href="/watch/watch.php?id=<?php echo $row["id"]; ?>">
                                                    <img class="media-object" height="250" src="<?php echo $row["cover-image"]; ?>" alt="">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-title"><a href="/watch/watch.php?id=<?php echo $row["id"]; ?>"><?php echo $row["title-eng"]; ?></a></h4>
                                                    <p><?php echo $row["synopsis"]; ?> <a href="#">button</a></p>
                                                </div>
                                            </div>
                                            <!-- media -->
                                        </div>
                                    </div>
                                    <?php
                                }
                                $i++;
                            }
                            ?>
                        </div>
                        <div class="tab-pane" id="followers">
                            <div class="follower-list">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="/assets/holder.js/100x125.html" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h3 class="follower-name">Ray Sin</h3>
                                        <div class="profile-location"><i class="fa fa-map-marker"></i> San Francisco, California, USA</div>
                                        <div class="profile-position"><i class="fa fa-briefcase"></i> Software Engineer at <a href="#">SomeCompany, Inc.</a></div>
                                        <div class="mb20"></div>
                                        <button class="btn btn-sm btn-success mr5"><i class="fa fa-user"></i> Follow</button>
                                        <button class="btn btn-sm btn-white"><i class="fa fa-envelope-o"></i> Message</button>
                                    </div>
                                </div>
                                <!-- media -->
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="/assets/holder.js/100x125.html" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h3 class="follower-name">Weno Carasbong</h3>
                                        <div class="profile-location"><i class="fa fa-map-marker"></i> Cebu City, Philippines</div>
                                        <div class="profile-position"><i class="fa fa-briefcase"></i> Software Engineer at <a href="#">ITCompany, Inc.</a></div>
                                        <div class="mb20"></div>
                                        <button class="btn btn-sm btn-primary mr5"><i class="fa fa-check"></i> Following</button>
                                        <button class="btn btn-sm btn-white"><i class="fa fa-envelope-o"></i> Message</button>
                                    </div>
                                </div>
                                <!-- media -->
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="/assets/holder.js/100x125.html" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h3 class="follower-name">Nusja Nawancali</h3>
                                        <div class="profile-location"><i class="fa fa-map-marker"></i> Madrid, Spain</div>
                                        <div class="profile-position"><i class="fa fa-briefcase"></i> CEO at <a href="#">SomeCompany, Inc.</a></div>
                                        <div class="mb20"></div>
                                        <button class="btn btn-sm btn-success mr5"><i class="fa fa-user"></i> Follow</button>
                                        <button class="btn btn-sm btn-white"><i class="fa fa-envelope-o"></i> Message</button>
                                    </div>
                                </div>
                                <!-- media -->
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="/assets/holder.js/100x125.html" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h3 class="follower-name">Zaham Sindilmaca</h3>
                                        <div class="profile-location"><i class="fa fa-map-marker"></i> Bangkok, Thailand</div>
                                        <div class="profile-position"><i class="fa fa-briefcase"></i> Java Developer at <a href="#">ITCompany, Inc.</a></div>
                                        <div class="mb20"></div>
                                        <button class="btn btn-sm btn-primary mr5"><i class="fa fa-check"></i> Following</button>
                                        <button class="btn btn-sm btn-white"><i class="fa fa-envelope-o"></i> Message</button>
                                    </div>
                                </div>
                                <!-- media -->
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="/assets/holder.js/100x125.html" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h3 class="follower-name">Christopher Atam</h3>
                                        <div class="profile-location"><i class="fa fa-map-marker"></i> Tokyo, Japan</div>
                                        <div class="profile-position"><i class="fa fa-briefcase"></i> QA Engineer at <a href="#">SomeCompany, Inc.</a></div>
                                        <div class="mb20"></div>
                                        <button class="btn btn-sm btn-success mr5"><i class="fa fa-user"></i> Follow</button>
                                        <button class="btn btn-sm btn-white"><i class="fa fa-envelope-o"></i> Message</button>
                                    </div>
                                </div>
                                <!-- media -->
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="/assets/holder.js/100x125.html" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h3 class="follower-name">Venro Leonga</h3>
                                        <div class="profile-location"><i class="fa fa-map-marker"></i> Paris, France</div>
                                        <div class="profile-position"><i class="fa fa-briefcase"></i> UX Designer at <a href="#">ITCompany, Inc.</a></div>
                                        <div class="mb20"></div>
                                        <button class="btn btn-sm btn-success mr5"><i class="fa fa-user"></i> Follow</button>
                                        <button class="btn btn-sm btn-white"><i class="fa fa-envelope-o"></i> Message</button>
                                    </div>
                                </div>
                                <!-- media -->
                            </div>
                            <!--follower-list -->
                        </div>
                        <div class="tab-pane" id="following">
                            <div class="activity-list">
                                <div class="media act-media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object act-thumb" src="/assets/images/photos/user2.png" alt="">
                                    </a>
                                    <div class="media-body act-media-body">
                                        <strong>Chris Anthemum</strong> liked a photos<br>
                                        <small class="text-muted">Today at 12:30pm</small>
                                        <ul class="uploadphoto-list">
                                            <li><a href="/assets/images/photos/media5.png" data-rel="prettyPhoto" rel="prettyPhoto"><img src="/assets/images/photos/media5.png" class="img-responsive" alt=""></a></li>
                                            <li><a href="/assets/images/photos/media4.png" data-rel="prettyPhoto" rel="prettyPhoto"><img src="/assets/images/photos/media4.png" class="img-responsive" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- media -->
                                <div class="media act-media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object act-thumb" src="/assets/images/photos/user1.png" alt="">
                                    </a>
                                    <div class="media-body act-media-body">
                                        <strong>Ray Sin</strong> is now following to <strong>Chris Anthemum</strong>. <br>
                                        <small class="text-muted">Yesterday at 1:30pm</small>
                                    </div>
                                </div>
                                <!-- media -->
                                <div class="media act-media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object act-thumb" src="/assets/images/photos/user4.png" alt="">
                                    </a>
                                    <div class="media-body act-media-body">
                                        <strong>Frank Furter</strong> is now following to <strong>Ray Sin</strong>. <br>
                                        <small class="text-muted">3 days ago at 1:30pm</small>
                                    </div>
                                </div>
                                <!-- media -->
                                <div class="media act-media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object act-thumb" src="/assets/images/photos/user2.png" alt="">
                                    </a>
                                    <div class="media-body act-media-body">
                                        <strong>Chris Anthemum</strong> liked a photos<br>
                                        <small class="text-muted">5 days ago at 12:30pm</small>
                                        <ul class="uploadphoto-list">
                                            <li><a href="/assets/images/photos/media6.png" data-rel="prettyPhoto" rel="prettyPhoto"><img src="/assets/images/photos/media6.png" class="img-responsive" alt=""></a></li>
                                            <li><a href="/assets/images/photos/media7.png" data-rel="prettyPhoto" rel="prettyPhoto"><img src="/assets/images/photos/media7.png" class="img-responsive" alt=""></a></li>
                                            <li><a href="/assets/images/photos/media2.png" data-rel="prettyPhoto" rel="prettyPhoto"><img src="/assets/images/photos/media2.png" class="img-responsive" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- media -->
                                <div class="media act-media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object act-thumb" src="/assets/images/photos/user1.png" alt="">
                                    </a>
                                    <div class="media-body act-media-body">
                                        <strong>Nusja Nawancali</strong> is now following to <strong>Zaham Sindilmaca</strong>. <br>
                                        <small class="text-muted">December 25 at 1:30pm</small>
                                    </div>
                                </div>
                                <!-- media -->
                                <div class="media act-media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object act-thumb" src="/assets/images/photos/user4.png" alt="">
                                    </a>
                                    <div class="media-body act-media-body">
                                        <strong>Frank Furter</strong> is now following to <strong>Zaham Sindilmaca</strong>. <br>
                                        <small class="text-muted">December 24 at 1:30pm</small>
                                    </div>
                                </div>
                                <!-- media -->
                                <div class="media act-media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object act-thumb" src="/assets/images/photos/user3.png" alt="">
                                    </a>
                                    <div class="media-body act-media-body">
                                        <strong>Nusja NawanCali</strong> posted a new blog. <br>
                                        <small class="text-muted">December 23 at 3:18pm</small>
                                        <div class="media blog-media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object" src="/assets/images/photos/media3.png" alt="">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-title"><a href="#">Ut Enim Ad Minim Veniam</a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat... <a href="#">Read more</a></p>
                                            </div>
                                        </div>
                                        <!-- media -->
                                    </div>
                                </div>
                                <!-- media -->
                                <div class="media act-media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object act-thumb" src="/assets/images/photos/user4.png" alt="">
                                    </a>
                                    <div class="media-body act-media-body">
                                        <strong>Mark Zonsion</strong> is now following to <strong>Weno Carasbong</strong>. <br>
                                        <small class="text-muted">December 23 at 1:30pm</small>
                                    </div>
                                </div>
                                <!-- media -->
                                <div class="media act-media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object act-thumb" src="/assets/images/photos/user4.png" alt="">
                                    </a>
                                    <div class="media-body act-media-body">
                                        <strong>Frank Furter</strong> is now following to <strong>Weno Carasbong</strong>. <br>
                                        <small class="text-muted">December 20 at 4:30pm</small>
                                    </div>
                                </div>
                                <!-- media -->
                            </div>
                            <!-- activity-list -->
                            <button class="btn btn-white btn-block">Show More</button>
                        </div>
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
                                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="table2" rowspan="1" colspan="1" aria-label="Progress: activate to sort column ascending" style="width: 200px;">Progress</th>
                                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="table2" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 200px;">Status</th>
                                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="table2" rowspan="1" colspan="1" aria-label="Score: activate to sort column ascending" style="width: 100px;">Score</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                                                        <?php
                                                        $json = file_get_contents("http://hummingbird.me/api/v1/users/". $otheruser["name"] ."/library");
                                                        $hummingbird = json_decode($json, true);
                                                        $i=0;
                                                        while ($i<count($hummingbird)){
                                                            $query = "SELECT * FROM anime WHERE id='" . $hummingbird[$i]["anime"]["id"] . "' LIMIT 1";
                                                            $result = mysqli_query($conn, $query);
                                                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);?>
                                                            <tr class="gradeA odd">
                                                                <td class=" sorting_1"><img src="<?php echo $row["cover-image"] ?>" alt="<?php echo $row["title-eng"] ?> height="60" width="60">&nbsp;<a href="/watch/watch.php?id=<?php echo $row["id"];?>">&nbsp;<?php echo $hummingbird[$i]["anime"]["title"]; ?></a></td>
                                                                <td class=" "><?php echo $hummingbird[$i]["episodes_watched"]. "/" .$hummingbird[$i]["anime"]["episode_count"]; ?><div class="progress">
                                                                        <?php $progress =$hummingbird[$i]["episodes_watched"]/$hummingbird[$i]["anime"]["episode_count"]*100; ?>
                                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $progress;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $progress;?>%">
                                                                            <span class="sr-only"><?php echo $progress;?>% Complete (success)</span>
                                                                        </div>
                                                                    </div></td>
                                                                <td class=" "><?php echo $hummingbird[$i]["status"]; ?></td>
                                                                <td class="center "><?php echo $hummingbird[$i]["rating"]["value"]; ?></td>
                                                            </tr>
                                                            <?php
                                                            $i++;
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
                    <!-- tab-content -->
                </div>
                <!-- col-sm-9 -->
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