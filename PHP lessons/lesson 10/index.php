<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array functions</title>
</head>

<body>
  <?php

  // Merge arrays
  $array_1 = array("item 1", "item 2", "item 3");
  $array_2 = array("item 4", "item 5", "item 6");
  $full_array = array_merge($array_1, $array_2);
  echo "<p> Merge Functions </p>";
  var_dump($full_array);

  // Count values on array
  echo "<p>Number of items: " . count($full_array) . "</p>";
  $count = array_count_values($full_array);
  print_r($count);
  echo "<p>There's " . $count["item 1"] . " Item 1.</p>";

  // Search values in array
  if (in_array("item 1", $full_array)) {
    echo "<p>There's item 1</p>";
  } else {
    echo "<p>There isn't item 1</p>";
  }

  // Add value in array
  array_push($full_array, "item 7");
  print_r($full_array);

  // Replace values in array
  array_splice($full_array, 0, 2, array("item 8", "item 9"));
  echo "<br/>";
  print_r($full_array);

  // Sort values in array in ascending order
  sort($full_array);
  echo "<br/>";
  print_r($full_array);

  // Sort values in array in descending order
  rsort($full_array);
  echo "<br/>";
  print_r($full_array);

  ?>
</body>

</html>