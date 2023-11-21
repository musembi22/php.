<?php
if(isset($_POST["submit"]))
{
    //Grabbing the data
    $name = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $email= $_POST["email"];
    // Instantiate . SignupContr.  class
    include "../classes/Dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($uid, $pwd, $pwdrepeat, $email);

    // Running error handlers and user signup
    $signup->signupUser();

    // Going to back to front page
    header("location: ../index.php?error =none");
}

?>
<DOCTYPE html>
    <html>
        <body>
            hello 
        </body>
    </html>
