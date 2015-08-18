<?php






    for ($x = 0; $x <= 100; $x++){

        $score = rand(0,100);

            if ($score < 70) {
                echo "<h1>$score</h1><h2>Your Garade is a D";
            }

            if ($score >= 70 && $score < 80) {
                echo "<h1>$score</h1><h2>Your Garade is a C";
            }

            if ($score >= 80 && $score < 90) {
                echo "<h1>$score</h1><h2>Your Garade is a B";
            }

            if ($score >=90 && $score < 100) {
                echo "<h1>$score</h1><h2>Your Garade is a A";
            }

}

?>