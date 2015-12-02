<?php
include "../core/core.php";
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
    <title>HBSS | Profile</title>
    <link href="/assets/css/style.default.css" rel="stylesheet">
    <link href="/assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="/assets/css/jquery.datatables.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/assets/js/html5shiv.js"></script>
    <![endif]-->
    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
    <style id="/assets/holderjs-style" type="text/css">.holderjs-fluid {font-size:16px;font-weight:bold;text-align:center;font-family:sans-serif;margin:0}</style>
    <link href="/assets/css/perfect-scrollbar.css" rel="stylesheet">
    <style>
	.hbcomment > p > a > img{
		width: 500px;
	}
    .profile-position > a > img{
        width: 500px;
    }
    </style>
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
                    <img src="<?php echo $user["avatar"]; ?>" class="thumbnail img-responsive" alt="">
                    <div class="mb30"></div>
                    <h5 class="subtitle">About </h5>
                    <p class="mb30"><?php echo $user["bio"]; ?></p>
                    <ul class="profile-social-list">
                        <li><i class="fa fa-link"></i> Website:  <a href="#"></a></li>
                        <li><i class="fa fa-clock-o"></i> Total Anime watched: <?php echo mintuesToTime($user["life_spent_on_anime"]) ?>.</li>
                        <li><i class="fa fa-times"></i> Likes Hentai: <?php if($user["show_adult_content"] == 1){
                                echo "Yes.";}
                                else echo "No."; ?></li>
                        <li><i class="fa fa-language"></i> Title Language Pref: <?php echo $user["title_language_preference"]; ?>.</li>
                        <li><i class="fa fa-reply"></i> Last Library Update: <?php echo $user["last_library_update"]; ?>.</li>
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
                        <h2 class="profile-name"><?php echo $user["name"]?></h2>
                        <div class="profile-location"><i class="fa fa-map-marker"></i> <?php echo $user["location"];?></div>
                        <div class="profile-position"><i class="fa fa-heart"></i> Waifu is: <?php echo $user["waifu"];?></div>
                        <div class="mb20"></div>
                    </div>
                    <!-- profile-header -->
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-justified nav-profile">
                        <li class="active"><a href="#activities" data-toggle="tab"><strong>Activity</strong></a></li>
                        <li><a href="#followers" data-toggle="tab"><strong>Followers</strong></a></li>
                        <li><a href="#following" data-toggle="tab"><strong>Following</strong></a></li>
                        <li><a href="#library" data-toggle="tab"><strong>Library</strong></a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="activities">
                        <?php
                        $feed = json_decode(getJson("http://hummingbird.me/api/v1/users/". $user["name"] ."/feed"), true);
                        $i=0;
                        while ($i<count($feed)){
                            if ($feed[$i]["story_type"] == "comment"){
                                ?>
                                <div class="media act-media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object act-thumb"  height="100" src="<?php echo $feed[$i]["user"]["avatar"]; ?>" alt="">
                                    </a>
                                    <div class="media-body act-media-body">
                                        <strong>You</strong> Commented<br>
                                        <small class="text-muted">Today at 3:18pm</small>
                                        <div class="media blog-media hbcomment">
										<p>
                                            <?php
                                              //echo total, use total-1 in loop
                                            $num = count($feed[$i]["substories"])
                                            ?>
											</p>
                                            <p>
                                                <?php
                                                $totalstories = $num-1;
                                                echo $feed[$i]["substories"][$totalstories]["comment"];
                                                ?>
                                            </p>
                                            <?php
                                            for ($x = 0; $x < $num; $x++) {
                                                echo "<p>";
                                                echo $feed[$i]["substories"][$x]["id"];
                                                echo "</p>";
                                            }
                                            ?>
                                        </div>
                                        <!-- media -->
                                    </div>
                                </div>
                                <?php
                            }
                            else if ($feed[$i]["story_type"] == "media_story" && $feed[$i]["substories"][0]["substory_type"] == "watchlist_status_update") {
                                $query = "SELECT * FROM anime WHERE id='" . $feed[$i]["media"]["id"] . "' LIMIT 1";
                                $result = mysqli_query($conn, $query);
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                ?>
                                <!-- media -->
                                <div class="media act-media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object act-thumb"  height="100" src="<?php echo $feed[$i]["user"]["avatar"]; ?>" alt="">
                                    </a>
                                    <div class="media-body act-media-body">
                                        <strong>You</strong> <?php//add while loop
                                        if ($feed[$i]["substories"][0]["new_status"] == "completed"){echo "Completed";}
                                        elseif ($feed[$i]["substories"][0]["new_status"] == "currently_watching"){echo "are Currently Watching";}
                                        elseif ($feed[$i]["substories"][0]["new_status"] == "plan_to_watch"){echo "Plan To Watch";}
                                        elseif ($feed[$i]["substories"][0]["new_status"] == "on_hold"){echo "Put On Hold";}
                                        elseif ($feed[$i]["substories"][0]["new_status"] == "dropped"){echo "Dropped";}
                                        else echo $feed[$i]["substories"][0]["new_status"];
                                        ?> <a href="/watch/watch.php?id=<?php echo $row["id"]; ?>"><?php echo $row["title-eng"]; ?></a>. <br>
                                        <small class="text-muted">Today at 3:18pm</small>
                                        <div class="media blog-media">
                                            <a class="pull-left" href="/watch/watch.php?id=<?php echo $row["id"]; ?>">
                                                <img class="media-object" height="250" src="<?php echo $row["cover-image"]; ?>" alt="">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-title"><a href="/watch/watch.php?id=<?php echo $row["id"]; ?>"><?php echo $row["title-eng"]; ?></a></h4>
                                                <p><?php echo $row["synopsis"]; ?> <a href="/watch/watch.php?id=<?php echo $row["id"]; ?>"> Watch Now.</a></p>
                                            </div>
                                        </div>
                                        <!-- media -->
                                    </div>
                                </div>
                                <?php
                            }
                            else if ($feed[$i]["story_type"] == "media_story")
                            {
                                $query = "SELECT * FROM anime WHERE id='" . $feed[$i]["media"]["id"] . "' LIMIT 1";
                                $result = mysqli_query($conn, $query);
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                ?>
                                <!-- media -->
                                <div class="media act-media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object act-thumb"  height="100" src="<?php echo $feed[$i]["user"]["avatar"]; ?>" alt="">
                                    </a>
                                    <div class="media-body act-media-body">
                                        <strong>You</strong> Watched Episode <?php echo $feed[$i]["substories"]["0"]["episode_number"]; ?> of <a href="/watch/watch.php?id=<?php echo $row["id"]; ?>"><?php echo $row["title-eng"]; ?></a>. <br>
                                        <small class="text-muted">Today at 3:18pm</small>
                                        <div class="media blog-media">
                                            <a class="pull-left" href="/watch/watch.php?id=<?php echo $row["id"]; ?>">
                                                <img class="media-object" height="250" src="<?php echo $row["cover-image"]; ?>" alt="">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-title"><a href="/watch/watch.php?id=<?php echo $row["id"]; ?>"><?php echo $row["title-eng"]; ?></a></h4>
                                                <p><?php echo $row["synopsis"]; ?> <a href="/watch/watch.php?id=<?php echo $row["id"]; ?>"> Watch Now.</a></p>
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
                            <div class="follower-list" style="color: #333;">



                                <?php
                                $followers = json_decode(getJson("https://hummingbird.me/users?followers_of=". $user["name"]), true);
                                $i=0;
                                while ($i<count($followers["users"])){
                                    ?>


                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <?php
                                            $hbuser = json_decode(getJson("http://hummingbird.me/api/v1/users/". $followers["users"][$i]["id"]), true);?>
                                            <img class="media-object" src="<?php echo $hbuser["avatar"] ?>" alt="">
                                        </a>
                                        <div class="media-body">
                                            <h3 class="follower-name"><?php echo $followers["users"][$i]["id"]; if ($followers["users"][$i]["is_pro"] == "true"){?>&nbsp;<a class="btn btn-primary-alt">Pro</a></h3><?php }?>
                                            <div class="profile-location"><i class="fa fa-map-marker"></i> <?php echo $followers["users"][$i]["location"];?></div>
                                            <div class="profile-waifu"><i class="fa fa-heart"></i> <?php echo $followers["users"][$i]["waifu"];?></div>
                                            <div class="profile-position"><i class="fa fa-briefcase"></i> <?php echo $followers["users"][$i]["about_formatted"];?></div>
                                            <div class="mb20"></div>
                                            <?php if($followers["users"][$i]["is_followed"]=="true"){

                                                ?>
                                                <button class="btn btn-sm btn-primary mr5"><i class="fa fa-check"></i> Following</button>
                                            <?php
                                            }
                                            else{
                                                ?>
                                                <button class="btn btn-sm btn-success mr5"><i class="fa fa-user"></i> Follow</button>
                                            <?php
                                            }
                                            ?>
                                            <button class="btn btn-sm btn-white"><i class="fa fa-envelope-o"></i> Message</button>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                }

                                ?>
                            </div>
                            <!--follower-list -->
                        </div>
                        <div class="tab-pane" id="following">
                            <div class="activity-list" style="color: #333;">
                                <?php
                                $following = json_decode(getJson("http://hummingbird.me/users?followed_by=". $user["name"]), true);
                                $i=0;
                                while ($i<count($following["users"])){
                                    ?>


                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <?php
                                            $hbuser = json_decode(getJson("http://hummingbird.me/api/v1/users/". $following["users"][$i]["id"]), true);
                                            ?>
                                            <img class="media-object" src="<?php echo $hbuser["avatar"] ?>" alt="">
                                        </a>
                                        <div class="media-body">
                                            <h3 class="follower-name"><?php echo $following["users"][$i]["id"];if ($following["users"][$i]["is_pro"] == "true"){?>&nbsp;<a class="btn btn-primary-alt">Pro</a></h3><?php }?></h3>
                                            <div class="profile-location"><i class="fa fa-map-marker"></i> <?php echo $following["users"][$i]["location"];?></div>
                                            <div class="profile-waifu"><i class="fa fa-heart"></i> <?php echo $following["users"][$i]["waifu"];?></div>
                                            <div class="profile-position"><i class="fa fa-briefcase"></i> <?php echo $following["users"][$i]["about_formatted"];?></div>
                                            <div class="mb20"></div>
                                            <button class="btn btn-sm btn-primary mr5"><i class="fa fa-check"></i> Following</button>
                                            <button class="btn btn-sm btn-white"><i class="fa fa-envelope-o"></i> Message</button>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                }

                                ?>



                            </div>
                            <!-- activity-list -->
                            <button class="btn btn-white btn-block">Show More</button>
                        </div>
                        <div class="tab-pane" id="library">
                            <div class="library">
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
                                                        $library = json_decode(getJson("http://hummingbird.me/api/v1/users/". $user["name"] ."/library"), true);
                                                        $i=0;
                                                        while ($i<count($library)){
                                                        $query = "SELECT * FROM anime WHERE id='" . $library[$i]["anime"]["id"] . "' LIMIT 1";
                                                        $result = mysqli_query($conn, $query);
                                                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);?>
                                                            <tr class="gradeA odd">
                                                                <td class=" sorting_1"><img src="<?php echo $row["cover-image"] ?>" alt="<?php echo $row["title-eng"] ?> height="60" width="60">&nbsp;<a href="/watch/watch.php?id=<?php echo $row["id"];?>">&nbsp;<?php echo $library[$i]["anime"]["title"]; ?></a></td>
                                                                <td class=" "><?php echo $library[$i]["episodes_watched"]. "/" .$library[$i]["anime"]["episode_count"]; ?><div class="progress">
                                                                        <?php $progress =$library[$i]["episodes_watched"]/$library[$i]["anime"]["episode_count"]*100; ?>
                                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $progress;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $progress;?>%">
                                                                            <span class="sr-only"><?php echo $progress;?>% Complete (success)</span>
                                                                        </div>
                                                                    </div></td>
                                                                <td class=" "><?php echo $library[$i]["status"]; ?></td>
                                                                <td class="center "><?php echo $library[$i]["rating"]["value"]; ?></td>
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
                            <!-- library -->
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