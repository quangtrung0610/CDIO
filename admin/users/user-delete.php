<?php

require_once('../../API/connect.php');

$id = $_POST['user_id'];

$sql = "DELETE FROM user WHERE `Use_ID` = {$id}";

$query = mysqli_query($conn, $sql);

header('Location: ' . $_SERVER['HTTP_REFERER']);