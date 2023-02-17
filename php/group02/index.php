<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?php include("inc_menu.php");?>
    <?php include("inc_menu.php");?>

    <?php
    //array
    //index array
    $names=array("rojan", "sachin", "kritika", "nirmal", "shabanam", "shreya", "Nischal", "Alish", "Krish");
    
    //print kritika
    echo $names['2'];
    //dispalying all the names
    foreach($names as $n)
    {
        echo $n."<br>";
    }

    $countnames = count($names);
    echo "There are total" .$coutnnames . " records in our array";
    //debugging purpose
    //data will be dispaly in the form of array itself
    var_dump($names);


    //Associative Array
    /*
    Associative arrays, also called maps or dictionaries, are an abstract data type that can hold data in (key, value) pairs. 
    */

    $names=array("rojan"=>21, "sachin"=>21, "kritika"=>21, "nirmal"=>21, "shabanam"=>21, "shreya"=>21, "Nischal"=>21, "Alish"=>21, "Krish"=>21);

    //print the rojans age
    echo $names["rojan"];
    
    //printe the names with ages like "Rojan is 21 years old."
    foreach($names as $k=>$v){
        echo "$k is $v years old. <br>";
    }


    //multidimension array
    $names=array(
    "rojan"=> array("age"=>21, "color"=>"White", "Education"=>"Bachelors"), 
    "sachin"=>array("age"=>21, "color"=>"White", "Education"=>"Bachelors"), 
    "kritika"=>array("age"=>21, "color"=>"White", "Education"=>"Bachelors")
    );
    //print all the names with theri details
    $count=count($names);
    echo "We have $count Records<br>";
    foreach($names as $n=>$v){
        echo $n."<br>";
        foreach($v as $k=>$j){
            echo "$k = $j <br> ";
        }
        echo "<hr>";
    }





    ?>
</body>
</html>