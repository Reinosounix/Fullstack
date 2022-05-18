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
  for ($i = 0; $i <= 10; $i++) {
    echo $i . "<br/>";
  };

  $cars = array("BMW", "Audi", "Mercedes");
  foreach ($cars as $value) {
    echo $value . "<br/>";
  };

  $basket = array("a" => "yogurt", "b" => "bread", "c" => "eggs");
  foreach($basket as $key => $value){
    echo $key . ":" . $value . "<br/>";
  }
  ?>
</body>

</html>