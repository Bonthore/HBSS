<script type="text/javascript" src="//code.jquery.com/jquery-1.8.3.js"></script>
<script type="text/javascript">
    $(window).load(function(){
        $(function () {
            $('#currentTime').html($('#video_container').find('video').get(0).load());
            $('#currentTime').html($('#video_container').find('video').get(0).play());
        })
        setInterval(function () {
            $('#currentTime').html($('#video_container').find('video').get(0).currentTime);
            $('#totalTime').html($('#video_container').find('video').get(0).duration);
        }, 500)
    });
</script>
</head>
<body>

<!-- Preloader -->
<!--<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div> -->

<section>

    <?php include $_SERVER["DOCUMENT_ROOT"] ."/core/leftpanel.php";
    ?>

<div class="mainpanel">

    <?php include $_SERVER["DOCUMENT_ROOT"] ."/core/header.php";
    ?>

    <div class="pageheader">
        <h2><i class="fa fa-file-o"></i> <?php echo $anime["title-eng"];?> <p></p></p><span><?php echo $anime["synopsis"];?></span></h2>
        <div class="breadcrumb-wrapper">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li><a href="/frontend">Home</a></li>
                <li><a href="/watch">Series</a></li>
                <li><a href="/watch/watch.php?id=<?php echo $_GET["id"]?>"><?php echo $anime["title-eng"]?></a></li>
                <li class="active">Episode <?php echo $_GET["ep"]?></li>
            </ol>
        </div>
    </div>

    <div class="contentpanel">

        <ul class="filemanager-options">
            <li>
                <a href="#" class="itemopt enabled"><i class="fa fa-envelope-o"></i> View on Hummingbird</a>
            </li>
            <li>
                <a href="#" class="itemopt enabled"><i class="fa fa-download"></i> Download</a>
            </li>
            <li>
                <a href="#" class="itemopt enabled"><i class="fa fa-pencil"></i> Request Edit</a>
            </li>
            <li>
                <a href="#" class="itemopt enabled"><i class="fa fa-trash-o"></i> Missing Episodes?</a>
            </li>
            <li>
                <a href="#" id="<?php $id = $_GET["id"]; $ep = $_GET["ep"]; $var = "$id-$ep"; echo $var; ?>" class="itemopt enabled add-button"><i class="fa fa-list"></i> Add to playlist</a>
            </li>
        </ul>
        <div class="row">
            <div class="col-sm-7">
                <div class="row filemanager">
                    <div class="thmb" style="width: 795px; left: 10px;">
                        <span class="image featured">
                            <div id="video_container">
                                <video poster="http://media.w3.org/2010/05/sintel/poster.png" preload="none" controls="" id="video" tabindex="0" width="770">
                                    <source type="video/mp4" src="http://media.w3.org/2010/05/sintel/trailer.mp4" id="mp4">
                                    <source type="video/webm" src="http://media.w3.org/2010/05/sintel/trailer.webm" id="webm">
                                    <source type="video/ogg" src="http://media.w3.org/2010/05/sintel/trailer.ogv" id="ogv">
                                    <p>Your user agent does not support the HTML5 Video element.</p>
                                </video>
                            </div>
<div>Current Time : <span id="currentTime">2.381</span></div>
<div>Total time : <span id="totalTime">52.209</span></div>
<p style="text-align: center;">
    <?php
    $nextep = $_GET["ep"]+1;
    $previousep = $_GET["ep"]-1;
    if($_GET["ep"] == $anime["episode-count"]){
        echo '<button class="btn btn-default btn-lg"><a style="text-decoration: none;" href="/watch/watch.php?id='. $_GET["id"] .'&ep='. $previousep .'">< Previous Episode</a></button>';
    }
    elseif($_GET["ep"] < $anime["episode-count"] && $_GET["ep"] > 1){
        echo '<button class="btn btn-default btn-lg"><a style="text-decoration: none;" href="/watch/watch.php?id='. $_GET["id"] .'&ep='. $previousep .'">< Previous Episode</a></button>&nbsp;<button class="btn btn-default btn-lg"><a style="text-decoration: none;" href="/watch/watch.php?id='. $_GET["id"] .'&ep='. $nextep .'">Next Episode ></a></button>';
    }
    else echo '<button class="btn btn-default btn-lg"><a style="text-decoration: none;" href="/watch/watch.php?id='. $_GET["id"] .'&ep='. $nextep .'">Next Episode ></a></button>';
    ?>

</p>

                        </span>
                    </div><!-- thmb -->
                </div><!-- btn-group -->
            </div><!-- thmb -->
            <?php include $_SERVER["DOCUMENT_ROOT"] ."/core/playlist.php";?>
        </div>
    </div><!-- col-xs-6 -->
</div><!-- row -->
</div><!-- col-sm-9 -->
</div><!-- rightpanel -->

</section>
<script>
    add_task(); // Call the add_task function
    function add_task() {

        $('.add-button').click(function(){

            var current_element = $(this);

            var id = $(this).attr('id');

            $.post('/core/add-task.php', { task_id: id }, function() {
                current_element.parent().html('<a class="itemopt enabled "><i class="fa fa-list"></i> Done</a> ')
            });
        });
    }

</script>