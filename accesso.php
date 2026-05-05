<?php
$host = "localhost";
$user = "seghezzi";
$password = "verifica";
$dbname = "seghezzi_gym";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
?>