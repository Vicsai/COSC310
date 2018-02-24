<?php 
include("config.php");



//echo 'Connected Succesfully';

$sql = "SELECT firstname,lastname FROM users";
$result = $con->query($sql);

 foreach ($con->query($sql) as $row) {
        print $row['firstname'] . "\t";
        print $row['lastname'] . "\n";
}

?>