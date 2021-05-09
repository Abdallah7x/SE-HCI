<?php
$userID = $_GET['uid'];
REQUIRE_ONCE ("../classes/users.php");

$Users = new Users;
$result = $Users->declineAddmission($userID);

    header('Location:accept-decline.php');
?>
