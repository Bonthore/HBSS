<?php
include "core.php";
$plistid = $_POST['task_id'];
$query = "SELECT playlist FROM users where id='". $user["id"] ."'";
$result = mysqli_query($conn, $query);
	while ($row = mysqli_fetch_array($result)) {
		$series = explode(",",$row["playlist"]);
			$episodes = explode("-", $series[$plistid]);
			unset($series[$plistid]);
			$playlist = implode(",", $series);
			$query = "UPDATE `users` SET `playlist` = '". $playlist ."' WHERE id = '1'";
			$result = mysqli_query($conn, $query);
}