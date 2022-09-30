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
    function palindrome()
    {   
        $n = 0;
        $number = $n;
        $sum = 0;
        while (floor($number)) {
            $rem = $number % 10;
            $sum = $sum * 10 + $rem;
            $number = $number / 10;
        }
        return $sum;
    }
    $input = (int)readline("enter the any number::::");
    $num = palindrome($input);
    if ($input == $num) {
        echo "$input is a Palindrome number";
    } else {
        echo "$input is not a Palindrome";
    }//palindrome();
    ?>
</body>

</html>