<?php
include "../core/core.php";
//authenticate
$data = array(
    'username'      => $user['name'],
    'password'    => $_POST["password"],
);
$url = "http://hummingbird.me/api/v1/users/authenticate";


$content = json_encode($data);

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER,
    array("Content-type: application/json"));
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

$json_response = curl_exec($curl);

$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

if ( $status != 201 ) {
    die("Error: call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
}
else{
    $options = [
        'salt' => uniqid(mt_rand(), true),
        'cost' => 12
    ];
    $hash = password_hash($_POST["password"], PASSWORD_DEFAULT, $options);
    $conn = @mysqli_connect('localhost', 'root', 'root', 'anime');
    $query = "UPDATE `users` SET `authkey` = '". $json_response ."', `authenticated` = 'true', `password` = '". $hash ."' WHERE id = '". $user["id"] ."'";
    $result = mysqli_query($conn, $query);
    $_POST["success_auth"] = "true";
}
curl_close($curl);
header("location: /settings?action=add&success=true");