<?php

require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["uid"])) {
$result = mysql_query("SELECT count(*) FROM users WHERE user_uid='" . $_POST['uid'] . "'");
$row = mysql_fetch_row($result);
$user_count = $row[0];
if($user_count>0) echo "<span class='status-not-available'> &nbsp->Username Not Available.</span>";
else echo "<span class='status-available'> &nbsp->Username Available.</span>";
}