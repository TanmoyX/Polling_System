<!DOCTYPE html>
<?php
session_start();
if(!(isset($_SESSION['user']))){
?>
<html>
<script>
window.alert("You cannot skip Login. Please Login");
window.location = "login.php";
</script>
</html>
<?php
}
?>
<html>
<body background="http://www.fg-a.com/wallpapers/black-background-geometric-shapes.jpg" style="height:700px;">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
<
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 50px;
}
.show{
	text-align: center;
	display: inline-block;
	width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

h1{
	color:#eee; 
	text-align: center;
}
</style>

<h3><strong><a href = "logout.php">Logout</a><strong></h3>
<h1>User ID Generator</h1>

<div>
  <form action="registration.php" method="post">
    <?php
    $rand = rand(100000,9999999);
	echo $rand;

	$mysql_host = "localhost";
	$mysql_user = "id1406650_root";
	$mysql_pass = "admin";
	$mysql_db = "id1406650_poll";
	$abcd = 1234; 
	$conn = mysqli_connect($mysql_host , $mysql_user , $mysql_pass , $mysql_db);
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	$sql = "INSERT INTO polls ( g_id) VALUES ('$rand')";
  
   

  /*
      $to = "8902365800@vtext.com" ;
    $from = "localhost/Polling/index1.php" ;
    $message = "Thank You . Your Unique ID is : $rand " ;
    $headers = "From :  $from \n" ;
    $headers .= "MIME-version : 1.0 \n" ;
    $headers .= "Content-type: text/php ; charset=iso-8859-1\n";


    mail($to, '', $message, $headers) ; */
	

	mysqli_query($conn, $sql);
	mysqli_close($conn);
?>
	<input type="Submit" name="id" value="GENERATE ID">
	</form>
    
</div>

</body>
</html>