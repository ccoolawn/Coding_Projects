<?php

 echo "<h1>Starting the program</h1>";

        $heads = 0;
        $tails = 0;


     for($i = 1; $i <= 5000; $i ++){
                $coinflip = rand(1, 2);

                if($coinflip == 1){

                    $result = "head";
                    $heads++;
                }

                else {

                    $result = "tail";
                    $tails++;
                }
                echo "Attempt #". $i .": Throwing a coin... It's a " . $result . "! ... Got ". $heads ." head(s) so far and ". $tails ." tail(s) so far<br>";
      }

echo  "<h1>Ending the program - thank you!</h1>";



?>