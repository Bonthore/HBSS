<div class="leftpanel">

    <div class="logopanel">
        <h1><span>[</span> HBSS <span>]</span></h1>
    </div><!-- logopanel -->

    <div class="leftpanelinner">

        <!-- This is only visible to small devices -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">
            <div class="media userlogged">
                <img alt="" src="<?php echo $user->avatar ?>" class="media-object">
                <div class="media-body">
                    <h4><?php echo $user->name ?></h4>
                    <span>"<?php echo $user->bio ?>"</span>
                </div>
            </div>

            <h5 class="sidebartitle actitle">Account</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket mb30">
                <li><a href="/profile"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                <li><a href="/settings"><i class="fa fa-cog"></i> <span>Account Settings</span></a></li>
                <li><a href="#"><i class="fa fa-question-circle"></i> <span>Help</span></a></li>
                <li><a href="/core/logout.php"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
            </ul>
        </div>
        <h5 class="sidebartitle">Navigation</h5>
        <ul class="nav nav-pills nav-stacked nav-bracket">
            <li><a href="/"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li><a href="/watch"><i class="fa  fa-play"></i> <span>Watch</span></a></li>
            <li><a href="/listen"><i class="fa fa-music"></i> <span>Listen</span></a></li>
            <li><a href="/profile"><i class="fa fa-user"></i> <span>Profile</span></a></li>
            <li><a href="/feed"><i class="fa fa-rss"></i> <span>Feed</span></a></li>
            <li><a href="/search"><i class="fa fa-search"></i> <span>Search</span></a></li>

        </ul>

        <div class="infosummary">
            <h5 class="sidebartitle">To be changed</h5>
            <ul>
                <li>
                    <div class="datainfo">
                        <span class="text-muted">Daily Traffic</span>
                        <h4>630, 201</h4>
                    </div>
                    <div id="sidebar-chart" class="chart"><canvas width="59" height="30" style="display: inline-block; width: 59px; height: 30px; vertical-align: top;"></canvas></div>
                </li>
                <li>
                    <div class="datainfo">
                        <span class="text-muted">Average Users</span>
                        <h4>1, 332, 801</h4>
                    </div>
                    <div id="sidebar-chart2" class="chart"><canvas width="59" height="30" style="display: inline-block; width: 59px; height: 30px; vertical-align: top;"></canvas></div>
                </li>
                <li>
                    <div class="datainfo">
                        <span class="text-muted">Disk Usage</span>
                        <h4>82.2%</h4>
                    </div>
                    <div id="sidebar-chart3" class="chart"><canvas width="59" height="30" style="display: inline-block; width: 59px; height: 30px; vertical-align: top;"></canvas></div>
                </li>
                <li>
                    <div class="datainfo">
                        <span class="text-muted">CPU Usage</span>
                        <h4>140.05 - 32</h4>
                    </div>
                    <div id="sidebar-chart4" class="chart"><canvas width="59" height="30" style="display: inline-block; width: 59px; height: 30px; vertical-align: top;"></canvas></div>
                </li>
                <li>
                    <div class="datainfo">
                        <span class="text-muted">Memory Usage</span>
                        <h4>32.2%</h4>
                    </div>
                    <div id="sidebar-chart5" class="chart"><canvas width="59" height="30" style="display: inline-block; width: 59px; height: 30px; vertical-align: top;"></canvas></div>
                </li>
            </ul>
        </div><!-- infosummary -->

    </div><!-- leftpanelinner -->
</div>