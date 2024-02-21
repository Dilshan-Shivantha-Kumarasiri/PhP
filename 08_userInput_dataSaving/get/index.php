<?php

echo nl2br("User input and data save");

//die() - completely stop the process of website
//$subject = $_GET['subject'];
//$teacher = $_GET['a'];

$subject = filter_input(1,'subject',FILTER_VALIDATE_INT);
$teacher = filter_input(1,'teacher',FILTER_VALIDATE_INT);

if (!$subject){
    die();
}



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user input and data</title>
</head>
<body>
<p>
    <?= "subject - ".$subject . " teacher : ".$teacher ?>
</p>
<p>
<!--    --><?php //= "category - ".$_GET['category'] . " limit : ".$_GET['limit'] ?>
</p>
</body>
</html>