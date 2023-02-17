<?php
    //checking the form is submitted or not
    if(isset($_POST["submit"])){
        $user=$_POST['username'];
        $pass=$_POST['password'];

        
            //redirect if user valid
           echo "The following are the informaitons whch you supply.<br>";
           echo "Username = ". $user."<br>";
           echo "Password = ". $pass."<br>";
            
        
    }
    else{
        header("Location:register.php");
    }
    ?>