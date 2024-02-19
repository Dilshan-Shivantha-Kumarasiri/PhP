<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello world</title>
</head>
<body>
    <h1> Embedded html with php </h1>

    <?php
        $name = "Dilshan";
        echo nl2br("Hello, ".$name. "\n");

        // when using the double quotes we can using the variable inside the double quotes as below
        echo "Hi there, $name";
    ?>


</body>
</html>
