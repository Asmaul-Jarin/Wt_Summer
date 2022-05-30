<html>
    <head>
        <title>Regestration</title>
        <body>
            <h1>Registration Form</h1>

            <form action="../control/process.php" method="POST">

                <table>
                <tr><td>First Name:</td>
                <td><input type="text"></td></tr>
                <tr><td>Last Name:</td>
                <td><input type="text"></td></tr>
                <tr><td>Age:</td>
                <td><input type="text"></td></tr>  

               
                <tr><td>Designation:</td>
                <td><input type="radio" name="program" value="junior programmer">Junior Programmer
                <input type="radio" name="program" value="senior programmer">Senior Programmer
                <input type="radio" name="program" value="project Lead">project Lead</td>

                <tr><td>Preferred language:</td>
                <td><input type="checkbox" name="lang" value="JAVA">JAVA
                <input type="checkbox" name="lang" value="PHP">PHP
                <input type="checkbox" name="lang" value="C++">C++</td>
                <tr><td>E-mail:</td>
                <td><input type="text"></td></tr>
                <tr><td>Password:</td>
                <td><input type="text"></td></tr>
                <tr><td>Please choose a file</td><td><input type="file"></td></tr>


                <tr>
                    <td><input type ="submit" name="submit" value="Submit">
                <input type ="reset" name="reset" value="Reset"></td></tr>

</table>
        </form>
        </body>
    </head>
</html>