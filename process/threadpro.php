<?php
$mysqli = new mysqli("localhost", "db86699", "plesk02M@ceo!", "oct-o") or die(mysqli_error($mysqli));


if (isset($_POST['save'])) {
    $naampje = $_POST['naampje'];
    $onderwerp = $_POST['onderwerp'];
    $bestand = $_POST['file'];
    $onmymind = $_POST['onmymind'];

    

    

    $mysqli->query("INSERT INTO thread (naampje, onderwerp, bestand, onmymind) VALUES ('$naampje', '$onderwerp', '$bestand', '$onmymind')") or
    die($mysqli->error);
    
    header("location: ../thread.php");
}
