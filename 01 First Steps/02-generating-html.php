<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .body-1 {
            background: lightgrey;
        }

        .body-2 {
            background: yellow;
        }

        .body-3 {
            background: greenyellow;
        }

        .body-4 {
            background: aqua;
        }
    </style>

</head>

<body class="body-<?php echo rand(1, 4) ?>">

    <?php
    echo '<h1>Welcome to My Website!</h1>'

    ?>
</body>

</html>