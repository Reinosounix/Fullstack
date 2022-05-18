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
  $today = date("d \of M \of Y");
  echo '<h3>Date using the data()</h3>';
  echo $today;

  $hour = date("H:i:s A");
  echo '<h3>Time using the data()</h3>';
  echo $hour;

  $timestamp = time();
  echo '<h3>Current timestamp using time()</h3>';
  echo $timestamp;

  $timestampToTime = date("F d, Y h:i:s A");
  echo '<h3>Convert timestamp to time</h3>';
  echo $timestampToTime;

  $time = mktime(15, 20, 12, 5, 10, 2017);
  echo '<h3>Convert time to timestamp using mktime()</h3>';
  echo $time;
  $newtime = date("F d, Y h:i:s A", $time);
  echo "<br/>" . $newtime;

  $dayBorn = mktime(0, 0, 0, 2, 17, 1997);
  $timeDayBorn = date("l", $dayBorn);
  echo "<p> You were born on a $timeDayBorn. </p>";

  $timestampBack = mktime(0, 0, 0, date("m"), date("d") + 1000, date("Y"));
  $timeBack = date("D d M, Y", $timestampBack);
  echo "<p>Date in 1000 days from now: " . $timeBack . "</p>";
  ?>
  
</body>

</html>