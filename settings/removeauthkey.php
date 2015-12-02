<?php
include "../core/core.php";
$conn = @mysqli_connect('localhost', 'root', 'root', 'anime');
$query = "UPDATE `users` SET `authkey` = '', `authenticated` = 'false', `password` = '' WHERE id = '". $user["id"] ."'";
$result = mysqli_query($conn, $query);
header("location: /settings?action=remove&success=true");