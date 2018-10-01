<?php
   echo "<p>Hello, World!</p>";
   error_reporting(E_ALL);
   ini_set("display_errors", 1);
?>
<?php
  echo "<p>";
  for (x = 1; x < 100; x++)
  {
    for(y = 1; y <= 100; y++)
    {
      $product = x*y;
      echo $product . " ";
    }
    echo "<br/>";
  }
  echo "</p>";
?>
