<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (true) {
        echo "This is a true statement.";
    }

    if (false) {
        echo "You can not see this statement";
    }

    echo '<br />';
    $isStudent = true;



    echo '<br />';
    include 'vars.php'; // this php save $system_status
    if ($system_status === 'ok') {
        echo "okok \n";
        echo "System is working fine.";
    }
    if ($system_status == 'maintenance') {
        echo "System is under maintenance.";
    }

    // if-else
    echo '<br />';
    if ($isStudent) {
        echo "You are a student.";
    } else {
        echo "You are not a student.";
    }

    // if-else if - else
    echo '<br />';
    echo '<br />';
    $age = 75;
    if ($age < 18) {
        echo "You are a child.";
    } else if ($age >= 18 && $age < 60) {
        echo "You are an adult.";
    } else {
        echo "You are an elder.";
    }

    ?>
</body>

</html>