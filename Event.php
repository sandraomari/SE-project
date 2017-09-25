<?php 

include "connection.php";


$sql="";


session_start();

		// 
		$event=$_POST['event'];
		$date=$_POST['date'];
		$time=$_POST['tume'];
		$venue=($_POST['venue']);

		$price_regular=$POST['price_regular'];
		$price_regular_5=$POST['price_regular_5'];
		$price_regular_10=$POST['price_regular_10'];
		$price_regular_20=$POST['price_regular_20'];
		$price_regular=$POST['price_regular'];
		$price_vip_5=$POST['price_vip_5'];
		$price_vip_10=$POST['price_vip_10'];
		$price_vip_20=$POST['price_vip_20'];
		// require sql statement from database above **missing
		$sql="";

		mysqli_query($connection,$sql);

 ?>
