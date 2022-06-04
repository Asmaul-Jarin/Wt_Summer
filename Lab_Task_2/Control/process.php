<?php
$name=$_REQUEST["fname"];
$name2=$_REQUEST["fname2"];
if(empty($name)){
    echo"<br>Your first name should not be empty";
}
else if(strlen($name)<4)
{
    echo "<br>First name should be more than 4 characters";
}
else{
    echo"<br>Your first name is ".$name;
}
if(strlen($name2)<4)
{
    echo"<br>Your first name should not be empty";
}
if(empty($name2)){
    echo"<br>Your last name should not be empty";
}
else if(strlen($name2)<4)
{
    echo "<br>Last name should be more than 4 characters";
}
else{
    echo"<br>Your Last name is ".$_REQUEST["fname2"];;
}

if(isset($_REQUEST["program"]))
{
    $program=$_REQUEST["program"];
    echo "<br>Your designation is ".$program;
}
else{
    echo "<br>You must select designation";
}

if(isset($_REQUEST["l1"]) || isset($_REQUEST["l2"]) || isset($_REQUEST["l3"]))
{
    if(isset($_REQUEST["l1"]) && isset($_REQUEST["l2"]) && isset($_REQUEST["l3"]) ){
        echo "<br> You have selected ".$_REQUEST["l1"]." and ".$_REQUEST["l2"]." and ".$_REQUEST["l3"];
    }
    else if(isset($_REQUEST["l1"]) && isset($_REQUEST["l2"])){
        echo "<br> You have selected ".$_REQUEST["l1"]." and ".$_REQUEST["l2"];
    }
    else if(isset($_REQUEST["l2"]) && isset($_REQUEST["l3"])){
        echo "<br> You have selected ".$_REQUEST["l2"]." and ".$_REQUEST["l3"];
    }
    else if(isset($_REQUEST["l1"]) && isset($_REQUEST["l3"])){
        echo "<br> You have selected ".$_REQUEST["l1"]." and ".$_REQUEST["l3"];
    }
    else if(isset($_REQUEST["l1"])){
        echo "<br> You have selected ".$_REQUEST["l1"];
    }
    else if(isset($_REQUEST["l2"])){
        echo "<br> You have selected ".$_REQUEST["l2"];
    }
    else{
        echo "<br> You have selected ".$_REQUEST["l3"];
    }
}
else{
    echo "<br>You must select preferance";
}

if(empty($_REQUEST["male"])){
    echo "<br>Email should not be empty";
}
else{
    echo "<br>Your email is :".$_REQUEST["male"];
}

if(is_numeric($_REQUEST["password"])<2){
    echo "<br>Your password is valid";
}
else{
    echo "<br>Your password must contain 1 numerical value";
}


?>