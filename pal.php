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
    
    // echo "Welcome to the php web ";
    // echo "Welcome to the php web ";
    $Frist = 0;
    $second = 20;
    $third = $Frist+$second;
    echo $third;
    $Fourth = $Frist.$second;
    echo $Fourth;
    echo "<br> <div style=color:blue; align=center;>php String fomating{$Frist}";
    echo " \n <br> five raised to the thrid power equals".pow(5,3).".";
    printf(" \r\n <br> five raised to the third power equals %d.",pow(5,3));
    $number = 10;
    if ($number>=30) {
        echo " \n <br> number is gerter than";
    }else{
        echo " \n <br> number is less than";
    }
    for ($i=0;$i<$number; $i++) { 
        echo " \n <br> Hii";
    }
    
    $num =(int)readline('enter the any number::::');
    $temp = $num;
    $rev = 0;
    while(floor($num>0)){
        $dig = $num%10;
        $rev=$rev*10+$dig;
        $num = $num/10;
    
    }
    if ($temp==$rev) {
        echo "<br> <div style=color:green>{'$num'}the number is Palindrome";
    }
    else{
        echo " <br> <div style=color:green>{'$num'}Number is not a Palindrome";
    }
    $name_array[] = "<br> Asif Sutar";
    $name_array[] = "<br> Sudhir Phule";
    $name_array[] = "<br><div style=color:black> Ramraje Bhosale";
    echo $name_array[0];
    echo $name_array[2];
    $name_array[0] = "<br> Asif Sutar";
    $name_array[1] = "<br> Sudhir Phule";
    $name_array[2] = "<br> Ramraje Bhosale";
    echo $name_array[1];
    echo $name_array[2];
    $class_array = array ( "CS122", "Programming Concepts 1", "<br> Basic concepts of the PHP language.", "B123", "<br> Dr. Abraham Excel",50);
    echo $class_array[4];
    echo $class_array[2];

    $class_name =array("F_Name"=>"Sudhir","L_Name"=>"Phule","Place"=>"Pune","age"=>23);
    echo "<br>",$class_name["age"];
?>



</body>

</html>