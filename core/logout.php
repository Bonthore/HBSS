<?php
include "core.php";
unset ($_SESSION["session"]);
session_destroy();
header( 'Location: /login' );