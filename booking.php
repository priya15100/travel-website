<?php

$con=mysqli_connect('localhost','root','','booking');

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$destination=$_POST['destination'];


$sql="INSERT INTO `booking`(`id`,`ffirst`,`flast`,`femail`,`city`,`fphone`,`fdesti`) VALUES (0,'$firstname','$lastname','$email','$city','$phone','$destination')";
$result = mysqli_query($con,$sql);

if(isset($_POST['submit'])){
	header('succsefully');
}


?>