<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p>
    <?php
    $name = "John";
    $age = 33;

    echo "My name is " . $name . ". I am " . $age . " years old"
    ?>

  </p>
  <p>
    <?php
      define("COUNTRY", "ENGLAND");

      echo "My country is " . COUNTRY;
    ?>
  </p>
</body>

</html>