</head>
<body>

<!-- Preloader -->
<!--<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div> -->

<section>

    <?php include "../core/leftpanel.php";
    ?>

    <div class="mainpanel">

        <?php include "../core/header.php";
        ?>

        <div class="pageheader">
            <h2><i class="fa fa-file-o"></i> <?php echo $anime["title-eng"];?> <p></p></p><span><?php echo $anime["synopsis"];?></span></h2>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="/frontend">Home</a></li>
                    <li><a href="/watch">Series</a></li>
                    <li class="active"><?php echo $anime["title-eng"]?></li>
                </ol>
            </div>
        </div>

        <div class="contentpanel">

            <ul class="filemanager-options">
                <li>
                    <div class="ckbox ckbox-default">
                        <input type="checkbox" id="selectall" value="1" />
                        <label for="selectall">Completed </label>
                    </div>
                </li>
                <li>
                    <a href="#" class="itemopt disabled"><i class="fa fa-envelope-o"></i> View on Hummingbird</a>
                </li>
                <li>
                    <a href="#" class="itemopt disabled"><i class="fa fa-download"></i> Download</a>
                </li>
                <li>
                    <a href="#" class="itemopt disabled"><i class="fa fa-pencil"></i> Request Edit</a>
                </li>
                <li>
                    <a href="#" class="itemopt disabled"><i class="fa fa-trash-o"></i> Missing Episodes?</a>
                </li>

            </ul>


            <div class="row">
                <div class="col-sm-9">
                    <div class="row filemanager">


                        <?php
                        if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
                        $start_from = ($page-1) * 20;
                        $link = @mysqli_connect('localhost', 'root', 'root', 'anime');
                        $query = "SELECT * FROM `anime` WHERE id = ". $_GET["id"] ." ORDER BY `title-eng` LIMIT $start_from, 20";
                        $result = mysqli_query($link, $query);
                        while ($row = mysqli_fetch_array($result)) {
                            $i=0;
                            for( $i = 1; $i <= $row["episode-count"]; $i++ ) {
                                $id = $row["id"];
                                $ep = $i;
                                $var = "$id-$ep";
                                ?>



                                <div class="col-xs-6 col-sm-4 col-md-3 image">
                                    <div class="thmb">
                                        <div class="ckbox ckbox-default">
                                            <input type="checkbox" id="check2" value="1" />
                                            <label for="check2"></label>
                                        </div>
                                        <div class="btn-group fm-group">
                                            <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu fm-menu" role="menu">
                                                <li><a href="#"><i class="delete-button fa fa-share"></i> Add to Playlist</a></li>
                                                <li><a href="#"><i class="fa fa-envelope-o"></i> Email</a></li>
                                                <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                                                <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                                                <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                            </ul>
                                        </div><!-- btn-group -->
                                        <div class="thmb-prev">
                                            <a href="watch.php?id=<?php echo $row["id"] ."&ep=" .$i; ?>" data-rel="prettyPhoto">
                                                <img src="/assets/images/photos/media1.jpg" class="img-responsive" alt="" />
                                            </a>
                                        </div>
                                        <h5 class="fm-title"><a href="watch.php?id=<?php echo $row["id"] ."&ep=" .$i; ?>"><?php echo $row["title-eng"] ." episode ". $i; ?></a></h5>
                                        <small class="text-muted">Added: Jan 02, 2014</small>
                                    </div><!-- thmb -->
                                </div><!-- col-xs-6 -->



                            <?php }}; ?>



                    </div><!-- btn-group -->
                </div><!-- thmb -->
                <div class="col-sm-3" style="background-color: white; border-radius: 3px;">
                    <div class="fm-sidebar">

                        <img src="<?php echo $anime["cover-image"]; ?>" height="330px;" style="padding-left: 10px; padding-top:20px; text-align: center;" />

                        <div class="mb30"></div>

                        <h5 class="subtitle"><?php echo $anime["title-eng"]; ?> </h5>
                        <ul class="folder-list">
                            <li><i class="fa fa-folder-o"></i> Status: <?php echo $anime["status"]; ?></li>
                            <li><i class="fa fa-folder-o"></i> Number of Episodes: <?php echo $anime["episode-count"]; ?></li>
                            <li><i class="fa fa-folder-o"></i> Synopsis: <?php echo $anime["synopsis"]; ?></li>
                            <li><i class="fa fa-folder-o"></i> Show Type: <?php echo $anime["show-type"]; ?></li>
                            <li><i class="fa fa-folder-o"></i> Started Airing: <?php echo $anime["started-airing"]; ?></li>
                            <?php if($anime["status"] == "Finished Airing"){?>
                                <li><i class="fa fa-folder-o"></i> Finished Airing: <?php echo $anime["finished-airing"]; ?></li>
                            <?php }?>
                        </ul>

                        <div class="mb30"></div>

                        <h5 class="subtitle">Tags</h5>
                        <ul class="tag-list">
                            <li><a href="#">Animation</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Trailer</a></li>
                            <li><a href="#">Short Film</a></li>
                            <li><a href="#">Dubstep</a></li>
                            <li><a href="#">Soundtrack</a></li>
                            <li><a href="#">Photography</a></li>
                            <li><a href="#">Macro</a></li>
                            <li><a href="#">Tuturials</a></li>
                            <li><a href="#">Documentation</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- col-xs-6 -->


    </div><!-- row -->
    </div><!-- col-sm-9 -->
    </div><!-- rightpanel -->

</section>