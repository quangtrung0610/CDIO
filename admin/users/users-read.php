<?php

require_once('../API/connect.php');

$sql = "SELECT * FROM user";

$query = mysqli_query($conn, $sql);

$users = mysqli_fetch_all($query, MYSQLI_ASSOC);

$html = "";

foreach ($users as $user) {
  $delete = 'users/user-delete.php';

  $html .= "<tr>";
  $html .= "<td>{$user['Use_ID']}</td>";
  $html .= "<td style='max-width: 100px;'><img style='max-width: 50px;' src='../assets/images/Avatars/{$user['User_img']}' /></td>";
  $html .= "<td>{$user['Use_Name']}</td>";
  $html .= "<td>{$user['Type']}</td>";
  $html .= "<td>{$user['Full_Name']}</td>";
  $html .= "<td>{$user['Phone_number']}</td>";
  $html .= "<td>{$user['Address']}</td>";
  $html .= "<td style='max-width: 200px;'>{$user['Email']}</td>";
  $html .= "<td><form action='{$delete}' method='POST'><input type='hidden' name='user_id' value='{$user['Use_ID']}'/><button type='submit' class='btn btn-outline-danger'><i class='fa fa-trash' aria-hidden='true'></i></button></form></td>";
  $html .= "</tr>";
}

echo $html;

mysqli_free_result($query);
