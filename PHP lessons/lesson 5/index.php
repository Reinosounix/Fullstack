<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>String Functions</title>
</head>

<body>

  <?php
  $msg = "This are some string functions";
  echo "<h1>" . $msg . "<h1/>";
  echo "<p>Lenght: " . strlen($msg) . "<p/>";

  echo "<p>Words: ". str_word_count($msg) ."<p/>";

  echo "<p>". str_replace("some", "a few", $msg, $number) . "<p/>";
  
  echo "Words replaced: " . $number;
  
  echo "<p>". strrev($msg) . "<p/>";
  ?>
</body>

</html>