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
$selectedUser = $_POST["userSelect"];
$postQuery = "SELECT * FROM `Posts` WHERE `Author_Id`='" . $selectedUser . "';";
$postIs = $mysqli->query($postQuery);

echo "<table>";

while($rowOfPosts = $postIs->fetch_assoc()) {
  echo "<td>" . $rowOfPosts["content"] . "</td><br>";
}

echo "</table>";

/* close connection */
$mysqli->close();

?>
