<?php
$conn = new mysqli("localhost", "root", "root", "mglsi_news");
if($conn->connect_error){
    die("Erreur de connection");
}

?>