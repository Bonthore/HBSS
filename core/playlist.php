<?php
$conn = @mysqli_connect('localhost', 'root', 'root', 'anime');
$series = explode(",",$user["playlist"]);
?>
<section>
    <div class="mainpanel">
        <div class="contentpanel">
            <div class="row">
                <div class="col-md-4" style="float: right; top: -20px; right: -10px;">
                    <div class="panel panel-default panel-alt widget-messaging">
                        <div class="panel-heading">
                            <div class="panel-btns">
                                <a href="#" class="panel-edit"><p>Total Time: <?php $totaltime=0; echo $totaltime ?></p></a>
                            </div>
                            <!-- panel-btns -->
                            <h3 class="panel-title">Playlist</h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <?php
                                $conn = @mysqli_connect('localhost', 'root', 'root', 'anime');
                                $query = "SELECT playlist FROM users where id='". $user["id"] ."'";
                                $result = mysqli_query($conn, $query);
                                $numrows = mysqli_num_rows($result);
                                if($numrows>0){
                                while ($row = mysqli_fetch_array($result)) {
                                $series = explode(",",$row["playlist"]);
                                for ($i = 0; $i < count($series); ++$i) {
                                    $episodes = explode("-",$series[$i]);
                                    $query = "SELECT * FROM `anime` WHERE id = '". $episodes[0] ."'";
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                        <li><a href="/watch/watch.php?id=<?php echo $episodes[0]; ?>&ep=<?php echo $episodes[1]; ?>" style="text-decoration: none;">
                            <h4 class="sender"><?php echo $row["title-eng"] ?></h4>
                            <small>Episode <?php echo $episodes[1]; ?></small>
                            </a>
                            <small class="pull-right"><?php echo $row["episode-lenght"] ?> &nbsp; <a href="#" id="<?php echo $i; ?>"><img id="<?php echo $i; ?>" class="delete-button" width="10px" src="/assets/images/close.svg" /></a></small>

                        </li>
                        <?php
                        $totaltime = $totaltime+$row["episode-lenght"];
						}
                                }
                                }
                                } ?>
            </ul>
        </div>
<!-- panel-body -->
</div>
</div>
</div>
</div>
</div>
<!-- rightpanel -->
</section>
<script>


    delete_task(); // Call the delete_task function


    function delete_task() {

        $('.delete-button').click(function(){

            var current_element = $(this);

            var id = $(this).attr('id');

            $.post('/core/delete-task.php', { task_id: id }, function() {

                current_element.parent().fadeOut("fast", function() { $(this).remove(); });
            });
        });
    }

</script>