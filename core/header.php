<script src="../assets/js/jquery-1.10.2.min.js"></script>
<div class="headerbar">
    <a class="menutoggle"><i class="fa fa-bars"></i></a>
    <form class="searchform" action="/search" method="get">
        <input type="text" class="form-control" name="q" placeholder="Search here...">
    </form><div class="header-right"><!-- Music player here. -->
        <ul class="headermenu">
            <li>
                <div class="btn-group">
                    <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-bell"></i>
                        <span class="badge">2</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-head pull-right">
                        <h5 class="title">You Have 2 Site Notifications</h5>
                        <ul class="dropdown-list user-list">
                            <li class="new">
                                <div class="thumb"><a href="#"><img src="/assets/images/photos/user1.png" alt=""></a></div>
                                <div class="desc">
                                    <h5><a href="#">Draniem Daamul (@draniem)</a> <span class="badge badge-success">new</span></h5>
                                </div>
                            </li>
                            <li class="new">
                                <div class="thumb"><a href="#"><img src="/assets/images/photos/user2.png" alt=""></a></div>
                                <div class="desc">
                                    <h5><a href="#">Zaham Sindilmaca (@zaham)</a> <span class="badge badge-success">new</span></h5>
                                </div>
                            </li>
                            <li>
                                <div class="thumb"><a href="#"><img src="/assets/images/photos/user3.png" alt=""></a></div>
                                <div class="desc">
                                    <h5><a href="#">Weno Carasbong (@wenocar)</a></h5>
                                </div>
                            </li>
                            <li>
                                <div class="thumb"><a href="#"><img src="/assets/images/photos/user4.png" alt=""></a></div>
                                <div class="desc">
                                    <h5><a href="#">Nusja Nawancali (@nusja)</a></h5>
                                </div>
                            </li>
                            <li>
                                <div class="thumb"><a href="#"><img src="/assets/images/photos/user5.png" alt=""></a></div>
                                <div class="desc">
                                    <h5><a href="#">Lane Kitmari (@lane_kitmare)</a></h5>
                                </div>
                            </li>
                            <li class="new"><a href="#">See All Users</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="btn-group">
                    <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                        <i class="fa fa-h-square"></i>
                        <span class="badge">5</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-head pull-right">
                        <h5 class="title">You Have 5 Hummingbird Notifications</h5>
                        <ul class="dropdown-list gen-list">
                            <li class="new">
                                <a href="#">
                                    <span class="thumb"><img src="/assets/images/photos/user4.png" alt=""></span>
                    <span class="desc">
                      <span class="name">Zaham Sindilmaca <span class="badge badge-success">new</span></span>
                      <span class="msg">is now following you</span>
                    </span>
                                </a>
                            </li>
                            <li class="new">
                                <a href="#">
                                    <span class="thumb"><img src="/assets/images/photos/user5.png" alt=""></span>
                    <span class="desc">
                      <span class="name">Weno Carasbong <span class="badge badge-success">new</span></span>
                      <span class="msg">is now following you</span>
                    </span>
                                </a>
                            </li>
                            <li class="new">
                                <a href="#">
                                    <span class="thumb"><img src="/assets/images/photos/user3.png" alt=""></span>
                    <span class="desc">
                      <span class="name">Veno Leongal <span class="badge badge-success">new</span></span>
                      <span class="msg">likes your recent status</span>
                    </span>
                                </a>
                            </li>
                            <li class="new">
                                <a href="#">
                                    <span class="thumb"><img src="/assets/images/photos/user3.png" alt=""></span>
                    <span class="desc">
                      <span class="name">Nusja Nawancali <span class="badge badge-success">new</span></span>
                      <span class="msg">downloaded your work</span>
                    </span>
                                </a>
                            </li>
                            <li class="new">
                                <a href="#">
                                    <span class="thumb"><img src="/assets/images/photos/user3.png" alt=""></span>
                    <span class="desc">
                      <span class="name">Nusja Nawancali <span class="badge badge-success">new</span></span>
                      <span class="msg">send you 2 messages</span>
                    </span>
                                </a>
                            </li>
                            <li class="new"><a href="#">See All Notifications</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="btn-group">
                    <?php
                    $query = "SELECT playlist FROM users where id='". $user["id"] ."'";
                    $result = mysqli_query($conn, $query);
                    $numrows = mysqli_num_rows($result);
                    if($numrows>0){
                    while ($row = mysqli_fetch_array($result)) {
                    $series = explode(",",$row["playlist"]);
                    ?>
                    <button id="playlist" class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-list"></i>
                        <span class="badge"><li id="playlist"><?php if ($row["playlist"] == ""){echo "0";} else echo count($series);?></li></span>
                    </button>
                    <div id="playlist" class="dropdown-menu dropdown-menu-head pull-right">
                        <h5 class="title">
                            <?php
                            if ($row["playlist"] == ""){echo "There are no episodes in your playlist.";}
                            elseif (count($series) == 1){echo "There is 1 episode in your playlist";}
                            else echo " There are ". count($series) ." episodes in your playlist";

                            ?></h5>
                        <ul class="dropdown-list user-list">

                            <?php
                            for ($i = 0; $i < count($series); ++$i) {
                                $episodes = explode("-",$series[$i]);
                                $query = "SELECT * FROM `anime` WHERE id = '". $episodes[0] ."'";
                                $result = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                    ?>



                                    <li class="new">
                                        <div class="thumb"><a href="/watch/watch.php?id=<?php echo $episodes[0]; ?>&ep=<?php echo $episodes[1]; ?>"><img src="<?php echo $row["cover-image"] ?>" alt=""></a></div>
                                        <div class="desc">
                                            <h5><a href="/watch/watch.php?id=<?php echo $episodes[0]; ?>&ep=<?php echo $episodes[1]; ?>"><?php echo $row["title-eng"] ?> <small>Episode <?php echo $episodes[1]; ?></small></a>

                                                <a id="<?php echo $i; ?>" class="btn btn-primary pull-right delete-button"><li class="glyphicon glyphicon-remove"></li></a>
                                            </h5>
                                        </div>
                                    </li>
                                    <?php
                                }
                            }
                            }
                            } ?>
                            <li class="new"><a href="#">View all.</a></li>
                        </ul>
                    </div>
                </div>
            </li>

            <li>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo $user["avatar"]; ?>" alt="">
                        <?php echo $user["name"]; ?>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                        <li><a href="/profile"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                        <li><a href="/settings"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                        <li><a href="/help"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
                        <li><a href="/core/logout.php"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <button id="chatview" class="btn btn-default tp-icon chat-icon">
                    <i class="glyphicon glyphicon-comment"></i>
                </button>
            </li>
        </ul>
    </div><!-- header-right -->

</div>
<script>





    delete_task(); // Call the delete_task function
    function delete_task() {

        $('.delete-button').click(function(){

            var current_element = $(this);

            var id = $(this).attr('id');

            $.post('/core/delete-task.php', { task_id: id }, function() {

                current_element.closest('li').fadeOut("fast", function() { $(this).remove(); });
            });
        });
    }


</script>