<?php
$mysqli = new mysqli("localhost", "db86699", "plesk02M@ceo!", "oct-o") or die(mysqli_error($mysqli));


if (isset($_POST['save'])) {
    $naampje = $_POST['naampje'];
    $onderwerp = $_POST['onderwerp'];
    $bestand = $_POST['file'];
    $onmymind = $_POST['onmymind'];

    $mysqli->query("INSERT INTO thread (naampje, onderwerp, bestand, onmymind) VALUES ('$naampje', '$onderwerp', '$bestand', '$onmymind')") or
        die($mysqli->error);

    // // Unique name
    // $file = rand(1000,100000)."-".$_FILES['file']['name'];

    // // Temporary files
    // $file_loc = $_FILES['file']['tmp_name'];
    
    
}

?>
