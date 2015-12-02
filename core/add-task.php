<?php
include "core.php";
$plistentry = $_POST['task_id'];
$query = "SELECT playlist FROM users where id='". $user["id"] ."'";
$result = mysqli_query($conn, $query);
$numrows = mysqli_num_rows($result);
	while ($row = mysqli_fetch_array($result)) {
        if ($row["playlist"] == ""){
            $playlist = $plistentry;
        }
        else{
            $series = explode(",",$row["playlist"]);
            $next = count($series)+1;
            $series[$next]= $plistentry;
            $playlist = implode(",", $series);
        }

    }
	$querynew = "UPDATE `users` SET `playlist` = '". $playlist ."' WHERE id = '". $user["id"] ."'";
	$result = mysqli_query($conn, $querynew);

?>
<li>
<span><a href="#" style="text-decoration: none;">DONE! </a></span>
</li>