<?php
include("..Control./process.php")
?>
<html>
    <head>
        <title>Registration</title>
</head>
<body>
    <h1>Registration Form</h1>
     <form action="" method="POST" enctype="multipart/form-data">

       <table>
       <tr><td>First Name:</td> 
       <td> <input type="text"  name="fname"></td></tr>
       <tr><td>Last Name:</td> 
       <td> <input type="text"  name="fname2"></td></tr>
       <tr><td>Age:</td> 
       <td> <input type="text"  name="age"></td></tr>
       

       <tr><td>Designation:</td>
       <td><input type="radio" name="program" value="junior programmer">Junior Programmer 
       <input type="radio" name="program" value="senior programmer">Senior Programmer 
       <input type="radio" name="program" value="project Lead">project Lead</td></tr>
        

        <tr><td>Preferred Language:</td>
       <td><input type="checkbox" name="l1" value="JAVA">Java 
       <input type="checkbox" name="l2" value="PHP">PHP 
       <input type="checkbox" name="l3" value="C++">C++</td></tr>

       <tr><td>E-mail:</td> 
       <td> <input type="text"  name="male"></td></tr>
       <tr><td>Password:</td> 
       <td> <input type="password"  name="password"></td>
       <td>
        <?php
        echo $passEr;
        ?>
        </td>
    </tr>

       <tr><td>Please choose file </td>
        <td><input type="file"  name="mf"></td></tr>
    
       
        <tr>
                    <td><input type ="submit" name="submit" value="Submit">
                <input type ="reset" name="reset" value="Reset"></td></tr>

</table>

</form>

</body>
</html>