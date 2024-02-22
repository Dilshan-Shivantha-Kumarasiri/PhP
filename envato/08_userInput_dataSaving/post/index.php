<?php
    $postRequest = $_POST["email"];
    echo print_r($postRequest,true);

//    if ($_SERVER['REQUEST_METHOD']=="POST"){
////        echo $_POST['email'];
////        output($_POST);
//        if ($_POST['login']){
//            output($_POST);
//        }else{
//            output("not a valid request");
//        }
//
//    }
//
//    function output($array){
//        echo "<pre>".print_r($array,true)."</pre>";
//    }




?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>post</title>
</head>
<body>

<form action="" method="post">
    <label for="email">Email</label>
    <input type="email" required id="email" name="email"> <br/>
    <label for="userName">user name</label>
    <input type="text" required id="userName" name="userName"> <br/>
    <label for="password">password</label>
    <input type="password" required id="password" name="password"> <br/>
    <button name="login" value="">submit</button>
</form>

</body>
</html>