<?php
session_start();
include "/core/mysql.php";
if (isset ($_GET["previous"]) && !empty($_GET["previous"])){
    $location=$_GET["previous"];
    $url_full= "?previous=". $location;
}
else {
    $location="/";
    $url_full="/";
}
if(isset($_SESSION['post_data']))
{
    unset ($_SESSION['post_data']);
}
if(isset($_SESSION['session']))
{
    unset ($_SESSION["session"]);
}
$uid = uniqid();
//$_POST["name"] set
if(isset($_POST["name"]) && !empty($_POST["name"])) {
    $query = "SELECT * FROM users WHERE name='" . $_POST["name"] . "' LIMIT 1";
    $result = mysqli_query($conn, $query);
    //check if user exists in db
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //user exists
    if ($result->num_rows > 0)
    {
    	$json = file_get_contents('http://hummingbird.me/api/v1/users/' . $_POST["name"]);
    	$hummingbird = json_decode($json);
        //user requires pass
    	if ($row["authenticated"] == "true")
        {
    		$query = 'UPDATE `users` SET `name` = "' . $hummingbird->name . '", `waifu` = "' . $hummingbird->waifu . '", `waifu_or_husbando` = "' . $hummingbird->waifu_or_husbando . '", `waifu_slug` = "' . $hummingbird->waifu_slug . '", `waifu_char_id` = "' . $hummingbird->waifu_char_id . '", `location` = "' . $hummingbird->location . '", `avatar` = "' . $hummingbird->avatar . '", `cover_image` = "' . $hummingbird->cover_image . '", `about` = "' . $hummingbird->about . '", `bio` = "' . $hummingbird->bio . '", `life_spent_on_anime` = "' . $hummingbird->life_spent_on_anime . '", `show_adult_content` = "' . $hummingbird->show_adult_content . '", `title_language_preference` = "' . $hummingbird->title_language_preference . '", `last_library_update` = "' . $hummingbird->last_library_update . '", `authenticated` = "true" WHERE id="' . $row["id"] .'"';
            $result = mysqli_query($conn, $query);
            $_SESSION['post_data'] = $_POST["name"];
            header( 'Location: /login/auth/password.php'. $url_full);
        }
        //user does not require pass
        else
        {
            $query = 'UPDATE `users` SET `name` = "' . $hummingbird->name . '", `waifu` = "' . $hummingbird->waifu . '", `waifu_or_husbando` = "' . $hummingbird->waifu_or_husbando . '", `waifu_slug` = "' . $hummingbird->waifu_slug . '", `waifu_char_id` = "' . $hummingbird->waifu_char_id . '", `location` = "' . $hummingbird->location . '", `avatar` = "' . $hummingbird->avatar . '", `cover_image` = "' . $hummingbird->cover_image . '", `about` = "' . $hummingbird->about . '", `bio` = "' . $hummingbird->bio . '", `life_spent_on_anime` = "' . $hummingbird->life_spent_on_anime . '", `show_adult_content` = "' . $hummingbird->show_adult_content . '", `title_language_preference` = "' . $hummingbird->title_language_preference . '", `last_library_update` = "' . $hummingbird->last_library_update . '", `authenticated` = "false" WHERE id="' . $row["id"] .'"';
            $result = mysqli_query($conn, $query);
            $_SESSION['session'] = array('uid' => $uid, 'ip' => $_SERVER['REMOTE_ADDR'], 'name' => $_POST["name"]);
            header( 'Location: '.$location );
            }
    }
    //user does not exist
    else
    {
        $json = file_get_contents('http://hummingbird.me/api/v1/users/' . $_POST["name"]);
        $hummingbird = json_decode($json);
        $query = 'INSERT INTO `users` (`name`, `waifu`, `waifu_or_husbando`, `waifu_slug`, `waifu_char_id`, `location`, `avatar`, `cover_image`, `about`, `bio`, `life_spent_on_anime`, `show_adult_content`, `title_language_preference`, `last_library_update`, `authenticated`) VALUES ("' . $hummingbird->name . '", "' . $hummingbird->waifu . '", "' . $hummingbird->waifu_or_husbando . '", "' . $hummingbird->waifu_slug . '", "' . $hummingbird->waifu_char_id . '", "' . $hummingbird->location . '", "' . $hummingbird->avatar . '", "' . $hummingbird->cover_image . '", "' . $hummingbird->about . '", "' . $hummingbird->bio . '", "' . $hummingbird->life_spent_on_anime . '", "' . $hummingbird->show_adult_content . '", "' . $hummingbird->title_language_preference . '", "' . $hummingbird->last_library_update . '", "false")';
        $result = mysqli_query($conn, $query);
        $_SESSION['session'] = array('uid' => $uid, 'ip' => $_SERVER['REMOTE_ADDR'], 'name' => $_POST["name"]);
        header( 'Location: '.$location );
    }
}
//nothing set
else
{
    header( 'Location: /login' );
}