<?php
    //checking the form is submitted or not
    if(isset($_POST["submit"])){
        $user=$_POST['username'];
        $pass=$_POST['password'];

        if($user=="admin" && $pass=="admin")
        {
            //redirect if user valid
            header("Location:welcome.php");
            
        }
        else{
            echo "Login Failed";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login </title>
</head>
<body>
    
    <form method="post" action="" name="login" enctype="multipart/form-data">
        <fieldset>
            <legend>Login</legend>
            <input type="text" name="username" placeholder="Username">
            <br>
            <input type="password" name="password" placeholder="Password">
            <br>
            <input type="submit" name="submit" value="Login">
    </fieldset>
    </form>
    
</body>
</html>