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

  printf("Starting ADD USER");

  $userInput = $_POST["user"];

  if ($userInput == "") {
    echo "<p>Error: no input</p><br>";
    return;
  }

  $userQuery = "SELECT * FROM `Users` WHERE `user_id`='" . $user . "';";
  $userIs = $mysqli->query($query);
  $numUsersFound = $userIs->num_rows;

  if ($numUsersFound > 0) {
    echo "<p>Error: User already exist.</p><br>";
  }
  else {
    $newUser = "INSERT INTO `Users` (user_id) VALUES ('" . $user . "');";
  }

/* close connection */
$mysqli->close();

  printf("done!");
?>
