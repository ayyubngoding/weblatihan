<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="10">
<?php
    for($i = 1; $i <= 3; $i++){
       echo "<tr>";
       for($j = 1; $j <= 5; $j++){
        echo "<td>$i,$j</td>";
       }
       echo"</tr>";
    }
    ?>
</table>
</body>
</html>