<?php

echo "Hello World";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (logged_in()) : ?>
        <a href="/logout">Logout</a>
    <?php else : ?>
        <a href="/login">Login</a>
    <?php endif; ?>
</body>

</html>