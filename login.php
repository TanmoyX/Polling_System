<?php
session_start();
$db = mysqli_connect("localhost", "id1406650_root", "admin", "id1406650_poll");
if(isset($_POST['user'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $pass = md5($pass);
    $sql = "SELECT * FROM admin WHERE `user` = '$user' AND `password` = '$pass'";
    $res = mysqli_query($db, $sql);
    if (mysqli_num_rows($res)){
        $_SESSION['user'] = $user;
?>
<html>
    <script>
        window.alert("Welcome Admin!");
        window.location = "registration.php";
    </script>
</html>
<?php
    }
    else{
?>
<html>
    <script>
        window.alert("ERROR! Wrong user ID or password.");
        window.location = "login.php";
    </script>
</html>
<?php
    }
    
}
?>
<html>
    <head>
        <title>IIEDC POLLING</title>
    </head>
    <body>
        <div style = "text-align: center; padding-left:10%; padding-right: 10%; padding-top: 100px;">
            <h1><strong>LOGIN FOR ADMIN</strong></h1>
            <form action="login.php" method="post">
                <h4><strong>Enter User Name</strong></h4>
                <input name = "user" required/>
                <h4><strong>Enter Password</strong></h4>
                <input type="password" name="pass" required/><br><br>
                <button type="submit">Login</button>
            </form>
        </div>
    </body>
</html>