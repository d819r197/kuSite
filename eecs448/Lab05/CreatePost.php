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

  $userQuery = "SELECT * FROM `Users` WHERE `user_id`='" . $user . "';";
  $userIs = $mysqli->query($query);
  $numUsersFound = $userIs->num_rows;

  if ($numUsersFound > 0) {
    $newPost = 

    if ($mysql_connection->query($query)) {
        echo "<p>Post was Added</p>";
    }
    else {
        echo "<p>Error</p>";
    }
  }
  else {
    echo "<p>User doesn't exist.</p><br>";
  }

/* close connection */
$mysqli->close();

  printf("done!");
?>
