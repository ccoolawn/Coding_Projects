<?php

$states = array('CA', 'WA', 'VA', 'UT', 'AZ', 'NJ', 'NY', 'DE');




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>States Array</title>
</head>
<body>
    <select>
        <?php

                        for ($i = 0; $i < count($states); $i++)
                        {
                        echo "<option>" . $states [$i] . "</option><br>";
                         }
        ?>
    </select>
    <select>
        <?php

                        foreach ($states as $state) {
                           echo "<option>" . $state  . "</option><br>"; # code...
                        }

        ?>
    </select>
</body>
</html>