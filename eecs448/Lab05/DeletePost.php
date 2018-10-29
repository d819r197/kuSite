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

$currentPostNum = 0;
echo $currentPostNum;

$selectedUser = $_POST["userSelect"];
$postQuery = "SELECT * FROM `Posts`;";
$postIs = $mysqli->query($postQuery);

echo "Deleting...";

while($rowOfPosts = $postIs->fetch_assoc()) {
  if(isset($_POST [$currentPostNum])) {
  echo "Deleting->" . $rowOfPosts["Post_Id"] . "..Done.";
  }
  $currentPostNum++;
}

echo "</table>";

/* close connection */
$mysqli->close();

?>
