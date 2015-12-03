<?php
include $_SERVER["DOCUMENT_ROOT"] ."/core/core.php";
unset ($_SESSION["session"]);
session_destroy();
header( 'Location: /login' );