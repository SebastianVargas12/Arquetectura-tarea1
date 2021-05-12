<?php
$dbhost = "localhost";
$dbuser = "Root";
$dbpass = "";
$dbname = "Tarea";

$conn = mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname);
if (!conn)
{
    die("No hay conexion: ".mysqli_connect_error());
}



?>