<?php
    session_start();

require_once('./inc/config.php');
require_once('./inc/function.php');

if (is_user_authenticated()){
    redirect("admin.php");
    die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];
    if (!$email || !$password) {
        $status = "please enter the valid email or password";
    }
    if(authenticateUser($email,$password)){
        $_SESSION['email'] = $email;
        redirect('./inc/admin.php');
        //header('location:admin.php');
        die();
    }else{
        $status = "Your provided credentials didn't work";
    }

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sessions</title>
</head>
<body>
<form action="" method="post">
    <label for="email">Email</label>
    <input type="email" id="email" name="email"> <br/> <br/>
    <label for="userName">User name</label>
    <input type="text" id="userName"> <br/> <br/>
    <label for="password">Password</label>
    <input type="password" id="password" name="password"> <br/> <br/>
    <button>submit</button>
</form>
<div>
    <?php
        if (isset($status)) {
            echo $status;
        }
    ?>
</div>
</body>
</html>
