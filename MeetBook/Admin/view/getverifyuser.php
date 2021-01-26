<?php
session_start();
require_once('../models/db.php');
$mysqli = new mysqli($servername, $dbuser, $dbpass, $database);
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT id,username, password, email, type  
FROM verifieduserid WHERE id = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $username, $password, $email, $type);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>UserID:::</th>";
echo "<td>" . $id . "</td> ";
echo "<th>UserName:::</th>";
echo "<td>" . $username . "</td>";
echo "<th>Password:::</th>";
echo "<td>" . $password . "</td>";
echo "<th>Email:::</th>";
echo "<td>" . $email . "</td>";
echo "<th>Type:::</th>";
echo "<td>" . $type . "</td>";
echo "</tr>";
echo "</table>";
?>