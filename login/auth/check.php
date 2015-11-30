<?php
session_start();
if (isset ($_GET["previous"]) && !empty($_GET["previous"])){
    $location=$_GET["previous"];
}
else $location="/";
$uid = uniqid();
$password=$_POST["password"];
$link = @mysqli_connect('localhost', 'root', 'root', 'anime');
$query = "SELECT * FROM users WHERE name='" . $_SESSION['post_data'] . "' LIMIT 1";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
while ($row = mysqli_fetch_array($result)) {
    if($row["password"] == $password){
        $_SESSION['session'] = array('uid' => $uid, 'ip' => $_SERVER['REMOTE_ADDR'], 'name' => $_SESSION["post_data"]);
        unset ($_SESSION['post_data']);
        header( 'Location: '. $location );
    }
    else echo "Wrong password";
}