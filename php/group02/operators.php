<?php
//logical and 
$user="admin";
$pass="P@ssw0rd";

if($user=="admin" and $pass=="P@ssw0rd"){
    header("location:welcome.php");
    echo "Password Match";
}
else
echo "Password not match";
echo "<br>";
echo "md5 equivalent passwowrd is <br>";
echo "<br>".md5($pass);
echo "<br>";
echo "sha1 equivalent passwowrd is <br>";
echo "<br>".sha1($pass);

?>