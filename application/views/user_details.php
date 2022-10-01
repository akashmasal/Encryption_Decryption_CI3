<?php

// echo $browser;

// echo "<br>";
// echo "<br>";

// echo $browser_version;

// echo "<br>";
// echo "<br>";

// echo $os;

// echo "<br>";
// echo "<br>";

// echo $ip_address;
// echo "<br>";
// echo "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>You are currently using <?php echo $browser?> browser</h3>
    <h3>browser current version is <?php echo $browser_version?></h3>
    <h3>Os that you are using is <?php echo $os;?></h3>
    <h3>Your current IP-Address :- <?php echo $ip_address ;?></h3>
</body>
</html>