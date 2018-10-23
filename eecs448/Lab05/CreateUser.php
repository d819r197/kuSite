<?php
   echo "<p>The User Name is: " . $_POST["user"] . "</p>";
   $mysqli = new mysqli("mysql.eecs.ku.edu", "d819r197", "Koo3Kee4", "d819r197");

  /* check connection */
  if (!$mysqli->connect_errno) {
      printf("Connection Success!\n");
  }
  else {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  printf("Starting ADD USER\n");

  $userInput = $_POST["user"];

  if ($userInput == "") {
    echo "<p>Error: no input</p><br>";
    return;
  }

  $userQuery = "SELECT * FROM `Users` WHERE `user_id`='" . $user . "';";
  $userIs = $mysqli->query($query);
  $numUsersFound = $userIs->num_rows;
    printf("num of user: " + $numUsersFound);
    
  if ($numUsersFound > 0) {
    echo "<p>Error: User already exist.</p><br>";
  }
  else {
    $newUser = "INSERT INTO `Users` (user_id) VALUES ('" . $user . "');";
    printf("User: " + $user + " was added\n");
  }

/* close connection */
$mysqli->close();

  printf("done!\n");
?>
