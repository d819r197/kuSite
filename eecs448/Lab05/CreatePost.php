<?php
   echo "<p>The User Name is: " . $_POST["user"] . "</p>";
   $mysqli = new mysqli("mysql.eecs.ku.edu", "d819r197", "Koo3Kee4", "d819r197");

  /* check connection */
  if (!$mysqli->connect_errno) {
      printf("Connection Success!");
  }
  else {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();  
  }

  printf("Starting ADD USER...");
$user = $_POST["user"];
$query = "INSERT INTO Users (User_Id)
VALUES ('userT2')";
 
if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
  printf("done!");
$conn->close();
/* 
  printf("adding user...");
  
  if(msqli.query($query)) {
    printf('New User Added Successful!');
  }
  else {
    printf('New User Added Failed!');
  }
  */
  printf("done!");
?>

