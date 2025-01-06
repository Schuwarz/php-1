<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My first PHP steps</title>
</head>
<body>
  <?php
    $jopa1 = 10;
    $jopa2 = 20;

    echo $jopa1 + $jopa2."<br>";
    echo $jopa1 - $jopa2."<br>";
    echo $jopa1 * $jopa2."<br>";
    echo $jopa1 / $jopa2."<br>";
    echo $jopa1 % $jopa2."<br>";

    $jopa1 += 10;
    echo $jopa1."<br>";
    
    $jopa1++;
    echo $jopa1."<br>";

    echo M_PI."<br>";
    echo M_E."<br>";
    
    echo abs(-13)."<br>";
    echo ceil(3.1)."<br>";

    $jopa3 = mt_rand(1,20);

    echo $jopa3."<br>";


  ?>
</body>
</html>