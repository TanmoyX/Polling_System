<?php
  
	$mysql_host = "localhost";
	$mysql_user = "id1406650_root";
	$mysql_pass = "admin";
	$mysql_db = "id1406650_poll";
	 
	$conn = mysqli_connect($mysql_host , $mysql_user , $mysql_pass , $mysql_db);
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}
	
	$password = $_POST['password'];
	$pref1 = $_POST['pref1'];
	$pref2 = $_POST['pref2'];
        if ($pref1 == $pref2){
?>
<html>
<script>
window.alert("Your both preferences cannot be same. Please Re-enter.");
window.location = 'index.php';
</script>
</html>
<?php
        }else{
        $password = (int)$password;
	$sql = "SELECT * FROM polls WHERE `g_id` = '$password'";
	$res = mysqli_query($conn, $sql);

	if ($result = mysqli_fetch_array($res)){
                if ($result['status'] == 1){
?>
<html>
<script>
window.alert("You have already cast your vote. Once is enough. Thank you!");
window.location = 'index.php';
</script>
</html>
<?php
                }
		$sql = "UPDATE project SET `pref1` = `pref1` + 1 WHERE `name` = '$pref1'";
		mysqli_query($conn,$sql);
                $sql = "UPDATE project SET `pref2` = `pref2` + 1 WHERE `name` = '$pref2'";
		mysqli_query($conn,$sql);
                $sql = "UPDATE polls SET `status` = '1' WHERE `g_id` = '$password'";
		mysqli_query($conn,$sql);
	?>
	<html>
		<script>
			window.alert("Successful! Thanks for voting.");
			window.location = "index.php";
		</script>
	</html>
	<?php
	}
	else{
	?>
	<html>
		<script>
			window.alert("Oops! You have entered an ID which has not been registered.");
			window.location = "index.php";
		</script>
	</html>
	<?php
	}
	
	}
?>
<!--
	-->