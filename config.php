<?php
$host = 'sql110.infinityfree.com';
$user = 'if0_37134036';
$password = 'owdIrpI7VJVoZ';
$dbname = 'if0_37134036_my_database';

$con = new mysqli($host, $user, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
