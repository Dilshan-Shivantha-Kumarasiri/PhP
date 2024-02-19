<?php
    $title = "loops";
    $guitars = Array(
        'Vela',
        'Explorer',
        'Strat'
    );

    $kvpGuitar = [
        "owner" => "Dilshan",
        "cachier" => "Amal",
        "driver" => "Amila",
    ];

    // for loop
    for ($i=0; $i<count($guitars) ; $i++ ){
        echo nl2br($guitars[$i]."\n");
    }

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- enter the title name -->
    <title>Tile <?= $title; ?></title>
</head>
<body>
    <h1>For each loop</h1>
    <ul>
    <!-- add content here -->
        <?php
            foreach ($guitars as $favGuitars){
                echo "<li>$favGuitars</li>";
            };
        ?>
    </ul>

    <table>
        <tbody >
        <!--  how to associate array loop using the for each loop -->
        <?php
        foreach ($kvpGuitar as $key => $favGuitars){
            echo "<tr><td>$key</td><td>$favGuitars</td></tr>";
        };
        ?>
        </tbody>
    </table>
</body>
</html>