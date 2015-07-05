<html class="bgtransparent">
<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<?php 
include_once "config.php";

global $conn;
?>

<!-- START OF OWNER -->



<div class="panel panel-primary">
<!-- Owner panel contents -->
<div class="panel-heading">Owners</div>
<!-- Table -->
<table class="table">
<tr>
    <th align="center">Name</th>
    <th align="center">SteamID</th>
</tr>
					<?php
echo "<tr><td> Toxxic </td><td> STEAM_1:1:65981234</td></tr>";
echo "<tr><td> Iveyz </td><td> STEAM_1:0:14877024 </td></tr>";
?>
</table>
</div>

<!--END OF OWNER -->
<!-- START OF ADMIN -->

<div class="panel panel-primary">
<!-- Owner panel contents -->
<div class="panel-heading">Admins</div>
<!-- Table -->
<table class="table">
<tr>
    <th align="center">Name</th>
    <th align="center">SteamID</th>
</tr>
<?php
$sqladmin = "SELECT * FROM `sb_admins` WHERE srv_group LIKE 'admin'";
if (!$conn->query($sqladmin)) {
    echo 'Error: ', $mysqli->error;
}
$resultadmin = $conn->query($sqladmin);

if ($resultadmin->num_rows > 0) {
    // output data of each row
    while($row = $resultadmin->fetch_assoc()) {
        	echo "<tr><td>" . $row['user'] . "</td><td>" . $row['authid'] . "</td></tr>";
    }
} else {
    echo "0 results";
}
?>
</table>
</div>


<!--END OF ADMIN -->
<!-- START MODERATORS -->

<div class="panel panel-primary">
<!-- Owner panel contents -->
<div class="panel-heading">Moderators</div>
<!-- Table -->
<table class="table">
<tr>
    <th align="center">Name</th>
    <th align="center">SteamID</th>
</tr>
<?php
date_default_timezone_set("America/New_York");
$sqlmod = "SELECT * FROM `sb_admins` WHERE srv_group LIKE 'mod'";
if (!$conn->query($sqlmod)) {
    echo 'Error: ', $mysqli->error;
}
$resultmod = $conn->query($sqlmod);

if ($resultmod->num_rows > 0) {
    // output data of each row
    while($row = $resultmod->fetch_assoc()) {
        	echo "<tr><td>" . $row['user'] . "</td><td>" . $row['authid'] . "</td></tr>";
    }
} else {
    echo "0 results";
}
?>
</table>
</div>



<!-- END OF MODERATOR -->
<!--START OF VIP -->

<div class="panel panel-primary">
<!-- Owner panel contents -->
<div class="panel-heading">Owners</div>
<!-- Table -->
<table class="table">
<tr>
    <th align="center">Name</th>
    <th align="center">SteamID</th>
</tr>
<?php
date_default_timezone_set("America/New_York");
$sqlvip = "SELECT * FROM `sb_admins` WHERE srv_group LIKE 'VIP'";
if (!$conn->query($sqlvip)) {
    echo 'Error: ', $mysqli->error;
}
$resultvip = $conn->query($sqlvip);

if ($resultvip->num_rows > 0) {
    // output data of each row
    while($row = $resultvip->fetch_assoc()) {
        	echo "<tr><td>" . $row['user'] . "</td><td>" . $row['authid'] . "</td></tr>";
    }
} else {
    echo "0 results";
}
?>
</table>
</div>

</html>