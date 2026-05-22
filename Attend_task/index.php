<?php
if (!isset($_POST['input1']))
    {
    include 'templates/form.html.php';
    }
else
    {
    $input1 = $_POST['input1'];
    $input2 = $_POST['input2'];

    function area($input1, $input2)
        {
        return $input1 * $input2;
    }

    function perimeter($input1, $input2)
        {
        return 2 * ($input1 + $input2);
    }

    function average($input1, $input2)
        {
        return ($input1 + $input2) / 2;
    }

    function BMI($input1, $input2)
        {
        return $input1 / ($input2 * $input2);
    }

    function total_minutes($input1, $input2)
        {
        return ($input1 * 60) + $input2;
    }

    function max_value($input1, $input2)
        {
        if ($input1 > $input2)
            {
            return $input1;
        }
        else
            {
            return $input2;
        }
    }


    if (isset($_POST['area'])) {
        $output = 'The area of the rectangle is ' . htmlspecialchars(area($input1, $input2), ENT_QUOTES, 'UTF-8') . '.';
    } 
    elseif (isset($_POST['perimeter'])) {
        $output = 'The perimeter of the rectangle is ' . htmlspecialchars(perimeter($input1, $input2), ENT_QUOTES, 'UTF-8') . '.';
    } 
    elseif (isset($_POST['average'])) {
        $output = 'The average of the two numbers is ' . htmlspecialchars(average($input1, $input2), ENT_QUOTES, 'UTF-8') . '.';
    } 
    elseif (isset($_POST['bmi'])) {
        $output = 'The BMI is ' . htmlspecialchars(BMI($input1, $input2), ENT_QUOTES, 'UTF-8') . '.';
    } 
    elseif (isset($_POST['total_minutes'])) {
        $output = 'The total minutes is ' . htmlspecialchars(total_minutes($input1, $input2), ENT_QUOTES, 'UTF-8') . '.';
    } 
    elseif (isset($_POST['max_value'])) {
        $output = 'The max value is ' . htmlspecialchars(max_value($input1, $input2), ENT_QUOTES, 'UTF-8') . '.';
    }

    include 'templates/welcome.html.php';
}
?>