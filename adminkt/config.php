<?php

$host = "meetkarthickv77535.ipagemysql.com"; /* Host name */
$user = "lakeview"; /* User */
$password = "lakeview_c"; /* Password */
$dbname = "lakeview_db"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>

   