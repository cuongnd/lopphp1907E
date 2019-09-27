<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assests/js/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assests/css/admin.css">
    <title>Login</title>
</head>
<body>
<?php
require_once "../init.php";
if(App::check_login()){
    header("Location: index.php");
}
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password1=md5($password);
    $query="SELECT * FROM users WHERE username='$username' AND password='$password1' AND block='0'";
    $kg=mysqli_query($connection,$query);
    $user=$kg->fetch_assoc();
    $json_user=json_encode($user);
    if(isset($user['id']) && $user['id']>0){
        $_SESSION['user']=$json_user;
        header("Location: index.php");
    }

}

?>
<div class="wrapper-login-page">
    <form action="login.php" method="post">
        <table class="table table-bordered" style="margin: 40px auto">
            <tr>
                <td>Username</td>
                <td><input class="form-control" type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input class="form-control" type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button class="btn btn-primary btn-login" name="login" type="submit">Login</button>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>