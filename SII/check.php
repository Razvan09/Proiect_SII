<meta http-equiv="refresh" content="3">
<?php
if (isset($_GET["user"]) && isset($_GET["type"])){
	$user=$_GET["user"];
	$type=$_GET["type"];
	if ($type=="user"){
		$handle = fopen("OU/$user", "w");
		fwrite($handle, time());
		fclose($handle);
	}else{
		$handle = fopen("OG/$user", "w");
		fwrite($handle, time());
		fclose($handle);
	}
}
?>