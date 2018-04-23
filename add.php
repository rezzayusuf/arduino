<?php
   	include("connect.php");
   	
   	$link=Connection();

	$lpg=$_POST["lpg"];
   $suhu=$_POST["suhu"];
	$distance=$_POST["distance"];

	$query = "INSERT INTO sensor (id, lpg, suhu, distance) 
		VALUES ('','".$lpg."','".$suhu."','".$distance."')"; 
   	
   mysql_query($query,$link);
	mysql_close($link);

   	header("Location: index.php");
?>
