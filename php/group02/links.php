
<?php
//capturing data from URL
if(isset($_GET['page'])){
    echo "<h1>YOu are viewing ".$_GET['page']. ".</h1>";
}
?>

<a href="links.php?page=home">HOme</a> | 
<a href="links.php?page=about">about</a> | 
<a href="links.php?page=facility">Facility</a> | 
<a href="links.php?page=download">Download</a> |  q