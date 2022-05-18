<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data types</title>
</head>

<body>
  <?php

  $string = "Hello world";
  echo "<p> This is a String: " . $string . "<p/>";
  $int = 10;
  echo "<p> This is an Integer: " . $int . "<p/>";
  $hex = 0x1;
  echo "<p> This is a Hexadecimal: " . $hex . "<p/>";
  $float = 0.1;
  echo "<p> This is a Float: " . $float . "<p/>";
  $boolean = (5 < 6);
  echo "<p> This is a Boolean: " . $boolean . "<p/>";
  var_dump($boolean);
  $array = array("Audi", "BMW", "Mercedes-Benz");
  echo "<p> This is an Array: " . $array[0] . "<p/>";
  print_r($array);
  $fixedarray = array("a" => "bread", "b" => "milk", "c" => "eggs");
  echo "<p> This is a Fixed Array: " . $fixedarray["a"] . "<p/>";
  print_r($fixedarray);
  
  class car
  {
    //properties
    public $make = "Ford";
    private $status = "off";
    
    // methods
    function turn_on()
    {
      $this->status = "on";
    }
  };
  
  $myCar = new car;
  echo "<p> This is an Object: " . $myCar->make . "<p/>";
  $myCar->turn_on();
  var_dump($myCar);
  
  $nullvar = null;
  echo "<p> This is a Null variable: <p/>";
  var_dump($nullvar);
  
  $myFile = fopen("text.txt", "r");
  echo fread($myFile, filesize("text.txt"));
  ?>
</body>

</html>