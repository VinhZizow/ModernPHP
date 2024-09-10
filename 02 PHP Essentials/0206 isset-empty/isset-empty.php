<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre><?php
            $pageTitle = '123';
            var_dump(isset($pageTitle)); // kiểm tra có biến $pageTitle ko?
            var_dump(empty($pageTime));  // kiểm tra không có biến $pageTime ko?
            ?></pre>

    <?php
    if (isset($pageTitle) && $pageTitle != '') {
        echo "<h1>$pageTitle</h1>";
    }

    if (!empty($pageTitle)) {
        echo "<h1>$pageTitle</h1>";
    }
    ?>
</body>

</html>