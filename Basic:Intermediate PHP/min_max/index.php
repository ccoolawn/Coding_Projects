<!DOCTYPE html>​
​<html>​
​<head>​
    <title>Get Min and Max</title>​
​</head>​
​<body>​
    <?php​
​
    /* First we create a custom function named 'get_max_and_min'. It accepts a single parameter which will be the value of the array that we are going to check for max and min values. */​
    function get_max_and_min($value)
    {
        /* We reset the value of $max and $min to zero. This is just standard because we want the
        values of $max and $min to reset at each run. */​
        $max = 0;
        $min = 0;
​
        /* By using for loop, we will loop through the $value array. We set a condition
        * $counter < $count($value) because we just want to loop it as many times as whatever the
        * count of $value is. Since $value contains 6 numbers, then it will loop 6 times.
        */​
        for($counter = 0; $counter < count($value); $counter++)
        {
            /* We want to get the value of every loop, so in this example, we store the values for
            * each loop in $current_value variable. At first run, $current_value will get the value
            * of 5 because $value[$counter] means $value[0] and $value[0] = 5.
            */​
            $current_value = $value[$counter];
​
            /* If $counter == 0 or the value of max (which at first run is currently 0) is lesser
            * than the $current_value then treat it temporarily as the max number and store it in
            * the $max variable. Since we are in a for loop, it will keep looking for the max
            * value within our $value array and once $max no longer be lesser than the
            * $current_value, It will treat the last $current_value as the $max value.
            */​
            if($counter == 0 OR $max < $current_value)
            {
                $max = $current_value;

            }
​
            /* If $counter == 0 or the value of min (which at first run is currently 0) is greater
            * than the $current_value then treat it temporarily as the min number and store it in
            * the $min variable. Since we are in a for loop, it will keep looking for the min
            * value within our $value array and once $min no longer be greater than the
            * $current_value, It will treat the last $current_value as the $min value.
            */​
            if($counter == 0 OR $min > $current_value)
            {
                $min = $current_value;
            }
        }
​
        /* We then create an associative array called $min_max. and simply return the
        * $min_max's value
        */​
        $min_max = array('min' => $min, 'max' => $max);
        return $min_max;
​
        /* Or we can also return the array directly like below: */​
        // return array(​
        //  'min' => $min,​
        //  'max' => $max​
        // );​
    }
​
    /* $myarray is an array of number that we pass as a parameter to our get_max_and_min() function. */​
    $myarray = array(5, 10, 15, 20, 25, 30);
​
    /* We create a variable called output which will store whatever is the result of get_max_and_min($my_array).
    It should get the max and min values returned by get_max_and_min function */​
    $output = get_max_and_min($myarray);
​
    /* Lastly, we var_dump the result to see which is the max and min. */​
    var_dump($output);
    ?>​
​</body>​
​</html>
