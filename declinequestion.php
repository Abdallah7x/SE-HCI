<?php
$id = $_GET['id'];
REQUIRE_ONCE ("../classes/users.php");

$Users = new Users;
$result = $Users->declinequestion($_GET['question_id']);
 header("Location:question.php")
?>
