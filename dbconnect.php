<?php
# $ php -f db-connect-test.php
$dbname = 'openelectivems';
$dbuser = 'root';
$dbpass = 'nith';
$dbhost = 'localhost';

$connection = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($connection, $dbname) or die("Could not open the db '$dbname'");
?>
