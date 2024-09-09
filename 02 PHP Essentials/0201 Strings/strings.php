<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php echo 'I am a string' ?>
    <?php echo 'I \'m a string' ?>

    <?php
    echo '<br />';
    $greeting = 'I\'m happy!';
    echo $greeting;

    $name = 'Vinh';
    $subject = 'PHP';
    $text = 'I\'m ' . $name . ' and I want to learn ' . $subject . '!';
    echo '<br />';
    echo $text;
    echo '<br />';

    // Sử dụng double quotes

    $loi_chao = "I'm learning PHP!";
    echo '<br />';
    echo $loi_chao;

    echo '<br />';
    echo "$loi_chao!!!";

    $first_name = "Mike";
    $subject_main = "Math";
    echo '<br />';
    echo '<br />';
    echo "I'm {$first_name} and I'm learning {$subject_main}";

    echo "\n";
    echo "I'm {$first_name} and I'm learning {$subject_main}";

    ?>

    <p>A first line. <?php echo '<br />' ?>A second line</p>
</body>


</html>