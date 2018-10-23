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
  $postInput = $_POST["post"];

  if ($userInput == "" || $postInput == "") {
    echo "<p>Error: Empty Post!</p><br>";
    return;
  }

  $userQuery = "SELECT * FROM `Users` WHERE `user_id`='" . $userInput . "';";
    $userIs = $mysqli->query($userQuery);
    $numUsersFound = $userIs->num_rows;
  $postQuery = "SELECT * FROM `Posts`";
    $postAre = $mysqli->query($postQuery);
    $numOfPosts = ($postAre->num_rows) + 1;

  if ($numUsersFound > 0) {
    $newPost = "INSERT INTO `Posts`(`post_id`, `content`, `author_id`) VALUES ('" . $numOfPosts . "','" . $postInput . "','" . $userInput ."');";

    if ($mysqli->query($newPost)) {
        echo "<p>New Post was Added</p>";
    }
    else {
        echo "<p>Error: Post could not be added.</p>";
    }
  }
  else {
    echo "<p>User doesn't exist.</p><br>";
  }

/* close connection */
$mysqli->close();

  printf("done!");
?>
