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
    require_once 'database.php';
    ?>


    <h1 class="th-title">Threads</h1>

    <div id="container">

        <form action="threadpro.php" id="inputFieldDiv" method="POST">
            <input type="text" name="naampje" id="nameInput" placeholder="Your name...">
            <input type="text" name="onderwerp" id="subjectInput" placeholder="Subject...">
            <input type="file" accept="image/*" name="bestand" id="">
            <textarea type="text" name="onmymind" id="mindInput" placeholder="What's on your mind?"></textarea>
            <button id="uploadThread">Upload</button>
        </form>
        <div id="chat">

        </div>
    </div>


    <footer>
        <p>&copy; 2022 Maceo Beltman & Matthew de Haan. All rights reserved.</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="script/thread.js"></script>
</body>

</html>