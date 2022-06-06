<?php
$passEr="";
if(isset($_REQUEST["submit"]))
{
$name=$_REQUEST["fname"];
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
        $prefdata = $_REQUEST["l1"]." and ".$_REQUEST["l2"]." and ".$_REQUEST["l3"];
    }
    else if(isset($_REQUEST["l1"]) && isset($_REQUEST["l2"])){
        echo "<br> You have selected ".$_REQUEST["l1"]." and ".$_REQUEST["l2"];
        $prefdata = $_REQUEST["l1"]." and ".$_REQUEST["l2"];

    }
    else if(isset($_REQUEST["l2"]) && isset($_REQUEST["l3"])){
        echo "<br> You have selected ".$_REQUEST["l2"]." and ".$_REQUEST["l3"];
    }
    else if(isset($_REQUEST["l1"]) && isset($_REQUEST["l3"])){
        echo "<br> You have selected ".$_REQUEST["l1"]." and ".$_REQUEST["l3"];
        $prefdata = $_REQUEST["l2"]." and ".$_REQUEST["l3"];
    }
    else if(isset($_REQUEST["l1"])){
        echo "<br> You have selected ".$_REQUEST["l1"];
        $prefdata = $_REQUEST["l1"];
    }
    else if(isset($_REQUEST["l2"])){
        echo "<br> You have selected ".$_REQUEST["l2"];
        $prefdata = $_REQUEST["l2"];

    }
    else{
        echo "<br> You have selected ".$_REQUEST["l3"];
        $prefdata = $_REQUEST["l3"];
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

echo "<br>";
echo $_FILES["mf"]["name"];
if(move_uploaded_file($_FILES["mf"]["tmp_name"],"../upload/".$_FILES["mf"]["name"]))
{
    echo "file uploaded";
}
else
{
    echo "file not uploaded";
}

$mydata =array('firstname'=>$name,
'lastname'=>$name2,'password'=>$_REQUEST["password"],
'designation'=>$_REQUEST["program"],
'file'=>$_FILES["mf"]["name"],
 'age'=>$_REQUEST["age"],
 'prefered language'=>$prefdata);
$jsondata=json_encode($mydata,JSON_PRETTY_PRINT);

if(file_put_contents("../data/data.json",$jsondata))
{   echo "<br>";
    echo "data saved";}

}

?>