<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  $statement = true;

  if ($statement) {
    echo "<p>True Statement</p>";
  } else {
    echo "<p>False Statement</p>";
  }

  $statement_2 = ($statement) ? "<p>True Statement 2</p>" : "<p>False Statement 2</p>";
  echo $statement_2;

  $statement_3 = "case 1";
  switch ($statement_3) {
    case "case 1":
      echo "<p> This is case 1</p>";
      break;
    case "case 2":
      echo "<p> This is case 2</p>";
      break;
    case "case 3":
      echo "<p> This is case 3</p>";
      break;
    default:
      echo "There is no such case";
      
  }
  ?>
</body>

</html>