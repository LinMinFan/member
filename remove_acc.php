<?php

include_once "connect.php";

$acc = $_GET['account'];
$sql="DELETE FROM `users` where `account`='$acc'";
$pdo->exec($sql);

unset($_SESSION['user']);

header('location:login.php');

?>
