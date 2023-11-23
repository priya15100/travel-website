<?php

$db = mysqli_connect('localhost:3307','root','','booking');

$username = $_POST["username"];
$password = $_POST["password"];

$i=0;
$usern = "";
$passd = "";

$que="INSERT INTO `login` (`user`,`pass`) VALUES ('$username','$password')";

$sql="SELECT fname, password FROM `customer` WHERE fname='$username' and password='$password'";
$result2 = mysqli_query($db, $sql);

if(isset($_POST['submit'])){
	if($username == 'admin' and $password == 'ad123'){
		$result = mysqli_query($db, $que);
		
	}
	elseif($result2) {
		while($rows = mysqli_fetch_assoc($result2) and $i==0)
		{

			$usern = $rows['fname'];
			$passd = $rows['password'];
			$i= $i+1;
		}
		if ($usern==$username and $passd==$password) {
			$result = mysqli_query($db, $que);
			header("location:mainPage.html");
		}
		// else{
		// 	?>
		// 	<script>
		// 		alert("Invalid username or password");
		// 	</script>
		// 	<?php
		// }
	}
}

?>