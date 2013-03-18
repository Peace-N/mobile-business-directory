<?php
 		include_once('db.php');
 
		$company = $_POST['company'];
		$telephone = $_POST['telephone'];
		$service = $_POST['service'];
		$address = $_POST['address'];
 
		if(mysql_query("INSERT INTO directory VALUES('','$company', '$telephone', '$service', '$address')"))
		  echo "Your Company has been successifuly added";
		else
		  echo "Insertion Failed";
?>