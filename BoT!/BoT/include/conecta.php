<?php
$server = "localhost";
$user = "root";
$password = "";
$bd = "code";
$conection=mysqli_connect($server, $user, $password, $bd);
if ($conection->connect_errno) {
    die('No pibe, no se pudo'.$conection->connect_errno);
}
?>