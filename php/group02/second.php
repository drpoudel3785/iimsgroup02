<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding PHP on HTML</title>
</head>
<body>
    <?php
    echo "Today is " .date('l');
    echo "<br>";
    echo "The Time is ". date("h:i:s ");
    echo "<br>";
    echo "Current week is ". date("W");
    echo "<br>";
    echo "Today is ". date("z"). "Day of the year";
    echo "<br>";
    date_default_timezone_set("Europe/Zurich");
    echo "The Time is ". date("h:i:s");
    echo "<br>";


    $num1=10;
    $num2=20;
    $sum=$num1+$num2;
    echo "the sum of $num1 and $num2 is $sum";
    echo "<br>";
    echo 'the sum of $num1 and $num2 is $sum';
    echo "<br>";

    echo 'the sum of '.$num1.' and '.$num2. ' is '.$sum;
    echo "<br>";
    echo "the sum of \"$num1 \" and \"$num2\" is \"$sum\" ";
    echo "<br>";

    //unsetting the variable
    unset($num2, $num1, $sum);
    $num2=100;
    echo $num2;
    echo "<br>";
    //trying to test the num2 is odd or even
    if($num2%2==0){
        echo $num2 ."is Even";
    }
    else{
        echo $num2 ." is Odd";

    }

$day=date("l");
//return Thursday
//WAP to give the message if the day is Friday give message Oh its good friday.
//if the day is Saturday or Sunday give the message Hurry! its holiday.
//otherwise give the message its regular college days via switch case and if else ladder.
echo "<br>";
echo "Today is $day";
echo "<br>";
switch($day){
    
    case 'Friday':{
        echo "Oho its Friday";
        break;
    }
    case "Saturday":
    case "Sunday":{
        echo "Hurray its holiday";
        break;
    }
    default:
    {
        echo "Its regular college days";
        break;
    }

}
    


    ?>
    
</body>
</html>