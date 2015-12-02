<?php
include "core.php";
$query = "SELECT playlist FROM users where id='". $user["id"] ."'";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($result)) {
    $series = explode(",", $row["playlist"]);
}
?>
    <i class="glyphicon glyphicon-list"></i>
    <span class="badge"><li id="playlist"><?php echo count($series);?></li></span>