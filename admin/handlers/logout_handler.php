<?php 

session_start();
session_destroy();

$time = time() - (7 * 60 * 60);
setcookie("REMEMBER_ME", "", $time, '/');

session_start();
$_SESSION['ADMIN_ALERT'] = json_encode([
    "type" => "success",
    "message" => "Logged out successfully"
]);

header("location: ../demo4/pages/auth/login.php");