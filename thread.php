<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Threads</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/thread.css">

</head>

<body>
    <?php
    require_once 'process/threadpro.php';

    $mysqli = new mysqli("localhost", "db86699", "plesk02M@ceo!", "oct-o") or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM thread") or die($mysqli->error);
    ?>


    <h1 class="th-title">Threads</h1>

    <div id="container">

        <form action="process/threadpro.php" id="inputFieldDiv" method="POST">
            <input type="text" name="naampje" id="nameInput" placeholder="Your name...">
            <input type="text" name="onderwerp" id="subjectInput" placeholder="Subject...">
            <input type="text" name="file" id="" placeholder="Image Link...">
            <textarea type="text" name="onmymind" id="mindInput" placeholder="What's on your mind?"></textarea>
            <button type="submit" id="uploadThread" name="save">Upload</button>
        </form>
        <div id="chat">
            <?php
            while ($row = $result->fetch_assoc()) :
            ?>
                <div class="threadPost">
                    <div class="textDiv">
                        <span class="textTitle">
                            <h3><?php echo $row['onderwerp']; ?></h3>
                            <p>By: <?php echo $row['naampje']; ?></p>
                        </span>
                        <p class="threadText"><?php echo $row['onmymind']; ?></p>
                    </div>
                    <div class="imgDiv">
                        <img src="<?php echo $row['bestand']; ?>" alt="<?php echo $row['bestand']; ?>">
                    </div>
                </div>
            <?php
            endwhile;
            ?>
        </div>
    </div>


    <footer>
        <p>&copy; 2022 Maceo Beltman & Matthew de Haan. All rights reserved.</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="script/thread.js"></script>
</body>

</html>