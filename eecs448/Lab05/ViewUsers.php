<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "d819r197", "Koo3Kee4", "d819r197");

/* check connection */
if (!$mysqli->connect_errno) {
   printf("Connection Success!\n");
}
else {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}

$userQuery = "SELECT * FROM `Users`;";
$usersIs = $mysqli->query($userQuery);

echo "<table>";

while($rowOfUsers = $usersIs->fetch_assoc()) {
  echo "<td>" . $rowOfUsers["User_Id"] . "</td>";
} 

// close table tag
echo "</table>";

/* close connection */
$mysqli->close();

?>
