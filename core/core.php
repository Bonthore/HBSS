<?php
session_start();
include "apicache.php";
if (!isset ($_SESSION["session"])){
    $url =  "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
    header( 'Location: /login?previous='. $escaped_url );
}
$conn = @mysqli_connect('localhost', 'root', 'root', 'anime');
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
if (isset($_GET["id"]) && !empty($_GET["id"])){
	$query = "SELECT * FROM `anime` WHERE id = '". $_GET["id"] ."'";
	$result = mysqli_query($conn, $query);
	while ($row = mysqli_fetch_array($result)){
	$anime['id'] = $row["id"];
    $anime['folder'] = $row["folder"];
    $anime['title-eng'] = $row["title-eng"];
    $anime['title-romaji'] = $row["title-romaji"];
    $anime['title-native'] = $row["title-native"];
    $anime['title-horriblesubs'] = $row["title-horriblesubs"];
    $anime['status'] = $row["status"];
    $anime['episode-count'] = $row["episode-count"];
    $anime['episode-length'] = $row["episode-lenght"];
    $anime['cover-image'] = $row["cover-image"];
    $anime['synopsis'] = $row["synopsis"];
    $anime['show-type'] = $row["show-type"];
    $anime['started-airing'] = $row["started-airing"];
    $anime['finished-airing'] = $row["finished-airing"];
    $anime['rating'] = $row["rating"];
    $anime['age-rating'] = $row["age-rating"];
    $anime['genres'] = $row["genres"];
    $anime['op-name'] = $row["op-name"];
    $anime['op-artist'] = $row["op-artist"];
    $anime['op-cover'] = $row["op-cover"];
    $anime['op-url'] = $row["op-url"];
    $anime['ed-name'] = $row["ed-name"];
    $anime['ed-artist'] = $row["ed-artist"];
    $anime['ed-cover'] = $row["ed-cover"];
    $anime['ed-url'] = $row["ed-url"];
    $anime['goodost'] = $row["goodost"];
    $anime['ost-url'] = $row["ost-url"];
    $anime['avalable'] = $row["avalable"];
}}
if (isset($_SESSION["session"])){
	$query = "SELECT * FROM `users` WHERE name = '". $_SESSION["session"]["name"] ."'";
	$result = mysqli_query($conn, $query);
	while ($row = mysqli_fetch_array($result)){
	$user['id'] = $row["id"];
    $user['name'] = $row["name"];
    $user['waifu'] = $row["waifu"];
    $user['waifu_or_husbando'] = $row["waifu_or_husbando"];
    $user['waifu_slug'] = $row["waifu_slug"];
    $user['waifu_char_id'] = $row["waifu_char_id"];
    $user['location'] = $row["location"];
    $user['avatar'] = $row["avatar"];
    $user['cover_image'] = $row["cover_image"];
    $user['about'] = $row["about"];
    $user['bio'] = $row["bio"];
    $user['life_spent_on_anime'] = $row["life_spent_on_anime"];
    $user['show_adult_content'] = $row["show_adult_content"];
    $user['title_language_preference'] = $row["title_language_preference"];
    $user['last_library_update'] = $row["last_library_update"];
    $user['authenticated'] = $row["authenticated"];
    $user['playlist'] = $row["playlist"];
    $user['authkey'] = $row["authkey"];
}}
if (isset($_GET["u"]) && !empty($_GET["u"])){
    $query = "SELECT * FROM `users` WHERE name = '". $_GET["u"] ."'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)){
        $otheruser['id'] = $row["id"];
        $otheruser['name'] = $row["name"];
        $otheruser['waifu'] = $row["waifu"];
        $otheruser['waifu_or_husbando'] = $row["waifu_or_husbando"];
        $otheruser['waifu_slug'] = $row["waifu_slug"];
        $otheruser['waifu_char_id'] = $row["waifu_char_id"];
        $otheruser['location'] = $row["location"];
        $otheruser['avatar'] = $row["avatar"];
        $otheruser['cover_image'] = $row["cover_image"];
        $otheruser['about'] = $row["about"];
        $otheruser['bio'] = $row["bio"];
        $otheruser['life_spent_on_anime'] = $row["life_spent_on_anime"];
        $otheruser['show_adult_content'] = $row["show_adult_content"];
        $otheruser['title_language_preference'] = $row["title_language_preference"];
        $otheruser['last_library_update'] = $row["last_library_update"];
        $otheruser['authenticated'] = $row["authenticated"];
        $otheruser['playlist'] = $row["playlist"];
    }
}